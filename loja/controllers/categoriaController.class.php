<?php
require_once "models/conexao.class.php";
require_once "models/categoriaDAO.class.php";
require_once "models/categoria.class.php";

class CategoriaController
{
    public function listar()
    {
        // buscar os dados para apresentação na view

        $categoriaDAO = new CategoriaDAO();
        $retorno = $categoriaDAO->BuscarTodas();

        if (!is_array($retorno)) {
            $retorno = [];
        }


        // apresentá-los
        require_once "views/listar_categorias.php";
    }

    public function inserir()
    {
        $msg = "";

        if ($_POST) {
            // verificação do preenchimento
            if (empty($_POST["descritivo"])) {
                $msg = "Preencha o nome da categoria";
            } else {
                // inserir no banco de dados a nova categoria
                $categoria = new Categoria(0, $_POST["descritivo"]);
                $categoriaDAO = new CategoriaDAO();

                // Correcao: havia erro 500 aqui porque cadastrar() era chamado duas vezes.
                // Na segunda chamada, a conexao ja estava fechada dentro do DAO.
                $retorno = $categoriaDAO->cadastrar($categoria);
                header("Location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
                die();
            }
        }
        require_once "views/form_categoria.php";
    }

    public function excluir()
    {
        if ($_GET && isset($_GET["id"])) {
            // excluir fisicamente do banco de dados
            $categoria = new Categoria($_GET["id"]);
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->Deletar($categoria);
            header("Location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
            die();
        }
    } // excluir

    public function alterar()
    {
        $msg = "";
        $ret = [];

        if ($_POST) {
            if (empty($_POST["descritivo"])) {
                $msg = "Preencha o nome da categoria";
            } elseif (empty($_POST["id_categoria"])) {
                $msg = "Categoria invalida para alteracao";
            } else {
                $categoria = new Categoria($_POST["id_categoria"], $_POST["descritivo"]);
                $categoriaDAO = new CategoriaDAO();

                // Correcao: a alteracao ja estava usando o id vindo do POST,
                // mas o carregamento do formulario usava outro parametro na URL.
                $retorno = $categoriaDAO->editar($categoria);
                header("Location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
                die();
            }
        }

        if ($_GET && isset($_GET["id"])) {
            // Correcao: havia erro aqui porque o codigo verificava id_categoria,
            // mas depois tentava ler $_GET["id"].
            // buscar a categoria no banco de dados
            $categoria = new Categoria($_GET["id"]);
            $categoriaDAO = new CategoriaDAO();
            $ret = $categoriaDAO->buscarUma($categoria);

            if (!is_array($ret)) {
                $ret = [];
            }
        }
        require_once "views/edit_categoria.php";
    }
} // fim da classe categoriaController
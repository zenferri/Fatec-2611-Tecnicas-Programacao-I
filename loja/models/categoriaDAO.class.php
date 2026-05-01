<?php

class CategoriaDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Alterar() {}

    public function Deletar($categoria)
    {
        $sql = "DELETE FROM categorias WHERE id_categoria = ?";
            try
            {
                $stm = $this->db->prepare($sql);
                //substituir o ponto de interrogação
                $stm->bindValue(1, $categoria->getId_categoria());
                $stm->execute();
                $this->db = null;
                return "Categoria excluida com sucesso";
            }
            catch(PDOException $e)
            {
                $this->db = null;
                return "Problema ao excluir uma categoria";
            }

    }

    public function BuscarTodas()
    {
        $sql = "SELECT * FROM categorias";

        try {

            // preparar a frase Ssql para evitar injeção de SQL
            $stm = $this->db->prepare($sql); 

            // executar
            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);

            // Correcao: havia erro aqui porque o codigo tentava usar $stm->db = null,
            // mas a conexao pertence ao DAO e nao ao PDOStatement.
            $this->db = null;
            return $dados;

        } 
        
        catch (PDOException $e) {

            // Correcao: o fechamento da conexao tambem estava errado no catch.
            $this->db = null;
            return "Problema ao buscar as categorias";

        }
    }

    public function editar($categoria) {
        $sql = "UPDATE categorias SET descritivo = ? WHERE id_categoria = ?";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $categoria->getDescritivo());
            $stm->bindValue(2, $categoria->getId_categoria());
            $stm->execute();
            $this->db = null;
            return "Categoria atualizada com sucesso";
        }

        catch(PDOException $e) {
            $this->db = null;
            return "Problema ao alterar uma categoria";
        }

    }

    public function cadastrar($categoria){
        $sql = "INSERT INTO categorias (descritivo) VALUES(?)";
        try
        {
            $stm = $this->db->prepare($sql);
            // substituir o ponto de interrogação
            $stm->bindValue(1, $categoria->getDescritivo());
            $stm->execute();
            $this->db = null;
            return "Categoria inserida com sucesso";
        }

        catch(PDOException $e)
        {
            $this->db = null;
            return "Problema ao cadastrar uma nova categoria";
        }
    }

    public function buscarUma($categoria) {
        $sql = "SELECT * FROM categorias WHERE id_categoria = ?";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $categoria->getId_categoria());
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            $this->db = null;
            return $dados;
        }
        catch(PDOException $e) {
            $this->db = null;
            return "Problema ao buscar uma categoria";
        }
    }
} // fim da classe

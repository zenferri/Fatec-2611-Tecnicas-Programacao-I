<?php

class UsuarioDAO extends Conexao
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function verficar_email($usuario)
    {
        $sql = "SELECT email, senha, nome FROM usuarios WHERE email = ?";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usuario->getEmail());
            $stm->execute();
            $this->db = null;
            return $stm->fetchAll(PDO::FETCH_OBJ);

        }
        catch(PDOException $e) {
            $this->db = null;
            return "Problema ao verificar o email";
        } 
    } // fim verificar e-mail

    public function inserir($usuario){
        $sql = "INSERT INTO usuarios (nome, email, senha, perfil) VALUES (?, ?, ?, ?)";
        try {
            $stm = $this->db->prepare($sql);
            $stm->bindValue(1, $usuario->getNome());
            $stm->bindValue(2, $usuario->getEmail());
            $stm->bindValue(3, $usuario->getSenha());
            $stm->bindValue(4, $usuario->getPerfil());
            $stm->execute();
            $this->db = null;
            return "Usuário cadastrado com sucesso";
        }
        catch(PDOException $e) {
            $this->db = null;
            return "Problema ao cadastrar o usuário";
        }
        // fim cadastrar
    }


} // fim da classe

?>


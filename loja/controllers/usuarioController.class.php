<?php

require_once "models/conexao.class.php";
require_once "models/usuarioDAO.class.php";
require_once "models/usuario.class.php";

class UsuarioController
{
    public function inserir()
    {
        $msg = array("", "", "", "");
        $erro = false;
        if ($_POST) {
            //verificações
            if (empty($_POST["nome"])) {
                $msg[0] = "Preencha o seu nome:";
                $erro = true;
            }
            if (empty($_POST["email"])) {
                $msg[1] = "Preencha o seu e-mail:";
                $erro = true;
            }
            if (empty($_POST["senha"])) {
                $msg[2] = "Preencha a senha:";
                $erro = true;
            }
            if (empty($_POST["confirme"])) {
                $msg[3] = "Confirme a senha:";
                $erro = true;
            }
            if ($_POST["senha"] != "" && $_POST["confirme"] != "") {
                if ($_POST["senha"] !=  $_POST["confirme"]) {
                    $msg[3] = "Senhas não conferem!";
                    $erro = true;
                }
            }

            // verifica se o e-mail já está cadastrado
            if ($_POST["email"] != "") {
                $usuarioDAO = new usuarioDAO();
                $usuario = new Usuario(email: $_POST["email"]);
                $retorno = $usuarioDAO->verficar_email($usuario);
                if (count($retorno) > 0) {
                    $msg[1] = "E-mail já existente!";
                    $erro = true;
                }
            }

            // guardar no banco de dados
            if (!$erro) {
                $usuario = new Usuario(0, $_POST["nome"], $_POST["email"], password_hash($_POST["senha"], PASSWORD_DEFAULT), "Cliente");
                $usuarioDAO = new usuarioDAO();
                $retorno = $usuarioDAO->inserir($usuario);
                header("Location:index.php?controle=usuarioController&metodo=login");
                exit;
            }
        }

        // mostrar uma visão
        require_once "views/form_usuario.php";

        // redirecionar para o login


    }
    public function login()
    {
        $msg = array("", "", "");
        $erro = false;
        if ($_POST) {
            //verificações
            if (empty($_POST["email"])) {
                $msg[0] = "Preencha o seu e-mail:";
                $erro = true;
            }
            if (empty($_POST["senha"])) {
                $msg[1] = "Preencha a senha:";
                $erro = true;
            }

            if (!$erro) {
                $usuario = new Usuario(0, "", $_POST["email"]);
                $usuarioDAO = new usuarioDAO();
                $retorno = $usuarioDAO->verficar_email($usuario);
                if (count($retorno) > 0) {
                    if (password_verify($_POST["senha"], $retorno[0]->senha)) {
                        // logar
                        $msg[2] = "Login realizado com sucesso!";
                    } else {
                        // não logar
                        $msg[2] = "E-mail ou senha inválidos!";
                    }
                } else {
                    $msg[2] = "E-mail ou senha incorretos!";
                }
            }
        }
        require_once "views/login.php";
    }
    public function logout() {}
}

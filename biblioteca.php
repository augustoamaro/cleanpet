<?php

define('USERS', 'usuarios.txt');
define('SESSION_LOGIN', 'logado');

function salvarUsuario($usuario){
    $paginasSerializadas = serialize($paginas);
    file_put_contents(CONF,$paginasSerializadas);
}
//Função que ordena a página de login
function ordenar( $a, $b ) {
    return $a['pontos'] - $b['pontos'];
}
//Função que redireciona para tela de login
function redirecionarParaTelaDeLogin(){
    header('location: index.php');
}
//Função que destrói a sessão ao clicar em Logoff
function loggof(){
    startSession();
    session_destroy();
}
//Função que inicia uma sessão
function startSession(){
    if(!isset($_SESSION)){
        session_start();
    }
}
//Função responsável para setar o Cookie da página que está sendo navegada
function definirPaginaNavegada($codigoPagina){
    setcookie('ultimaPagina', $codigoPagina);
}
//Função que verifica o usuário que está logado
function verificaUsuarioLogado(){
    startSession();
    if(!isset($_SESSION[SESSION_LOGIN]))
        redirecionarParaTelaDeLogin();
}
//Função responsável por obter o usuário que está logado
function obterUsuarioLogado(){
    startSession();
    if(isset($_SESSION[SESSION_LOGIN])){
        return $_SESSION[SESSION_LOGIN];
    }

    return '';
}
//Função que valida o login e senha na página de login
function autentica($login, $senha){
    $handle = fopen("login.txt", 'r');
    if (!$handle){
        return false;
    }
    
    while(!feof($handle)){
        $loginsenha = fgets($handle);
        $loginsenhatxt = explode("|", $loginsenha);
        if($login === $loginsenhatxt[0] && $senha === $loginsenhatxt[1]){
            $_SESSION[SESSION_LOGIN] = $login;
            return true;
        }
        return false;
    }
    
}


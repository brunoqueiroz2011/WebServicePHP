<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
set_time_limit(0);
require 'inc/configuration.php';
require_once("PostagemService/Controller/PostagemController.php");

require 'inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/listaPostes',function(){
  $postagem = new  PostagemController();
  echo $postagem->listPostagem();
});

$app->get('/posteById-:idPoste',function($idPoste){
    $postagem = new  PostagemController();
    echo $postagem->posteById($idPoste);
});

$app->get('/listComentarios-:idPoste',function($idPoste){
    $postagem = new  PostagemController();
    echo $postagem->listComentarios($idPoste);
});

$app->get('/deletePostagem-:idPoste',function($idPoste){
    $postagem = new  PostagemController();
    echo $postagem->deletePostagem($idPoste);
});

$app->get("/novoPoste-:post", function($idPoste){    
    $postagem = new  PostagemController();
    echo $postagem->insertPostagem($idPoste);
});

$app->get("/novoComentario-:id-:post", function($idPoste,$post){    
    $postagem = new  PostagemController();
    echo $postagem->insertComentario($idPoste,$post);
});




$app->run();
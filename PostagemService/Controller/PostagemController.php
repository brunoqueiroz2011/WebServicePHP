<?php
require 'PostagemService/Dao/PostagemDao.php';

class  PostagemController{

  public function listPostagem()
  {
    $postagemDao = new  PostagemDao();
    $data = $postagemDao->listPostagem();    
    return json_encode($data);
  }

  public function posteById($idPoste)
  {
    $postagemDao = new  PostagemDao();
    $data = $postagemDao->posteById($idPoste);    
    return json_encode($data);
  }
  
  
  public function listComentarios($idPoste)
  {
    $postagemDao = new  PostagemDao();
    $data = $postagemDao->listComentarios($idPoste);    
    return json_encode($data);
  }

  public function updatePostagem()
  {
    $postagemDao = new  PostagemDao();
    $data = $postagemDao->getCanalAtendimento();
    $postagemDao->MesesPTBR($data);    
    return json_encode($data);
  }

  public function insertPostagem($data)
  {
    $postagemDao = new  PostagemDao();
    $result = $postagemDao->insertPostagem($data);    
    return json_encode($result);
  }

  public function insertComentario($idPoste,$post)
  {
    $postagemDao = new  PostagemDao();
    $result = $postagemDao->insertComentario($idPoste,$post);    
    return json_encode($result);
  }

  public function deletePostagem($idPoste)
  {
    $postagemDao = new  PostagemDao();
    $data = $postagemDao->deletePostagem($idPoste);   
    return json_encode($data);
  }


}
?>

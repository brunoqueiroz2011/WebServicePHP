<?php

class PostagemDao{

  public function listPostagem(){
    $sql = new Sql();
    $data = $sql->select("
      select id_post as id,text_post as post from postagem
    ");
    return $data;
  }
  
  public function posteById($idPoste){
    $sql = new Sql();
    $data = $sql->select("
      select text_post as post from postagem where id_post = $idPoste
    ");
    return $data;
  }

  public function listComentarios($idPoste){
    $sql = new Sql();
    $data = $sql->select("
        select c.id_cometarios as id, c.text_comentario as comentarios
		from postagem as p
		inner join cometarios as c on c.postagem_id_post = p.id_post
		where id_post = $idPoste
    ");
    return $data;
  }

  public function updatePostagem($idPostagem){
    $sql = new Sql();
    $data = $sql->query("update postagem set text_post = 'Teste de Update da postagem' where id_post = $idPostagem");
    return json_encode(array("success"=>$data));
  }

  public function insertPostagem($textoPostagem)
  {    
    $sql = new Sql();
    $data = $sql->query("   
    insert into postagem(text_post)values('".$textoPostagem."'); 
    ");

    return json_encode(array("success"=>$data));
  }

  public function insertComentario($idPost,$textoPostagem)
  {    
    $sql = new Sql();
    $data = $sql->query("   
    insert into cometarios (postagem_id_post,text_comentario) values($idPost,'".$textoPostagem."');    
    ");

    return json_encode(array("success"=>$data));
  }


  public function deletePostagem($idPostagem)
  {        
    $sql = new Sql();
    $strSql = "delete from postagem where id_post = $idPostagem";
    $data = $sql->query($strSql);
    return json_encode(array("success"=>$data));
  }

}
?>

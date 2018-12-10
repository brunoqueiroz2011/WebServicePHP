-- Select que retorna todos os Postes
select id_post as id,text_post as post
from postagem;

-- Select que retorna todos os comentarios do poste especifico
select p.text_post, c.text_comentario
from postagem as p
inner join cometarios as c on c.postagem_id_post = p.id_post
where id_post = 3
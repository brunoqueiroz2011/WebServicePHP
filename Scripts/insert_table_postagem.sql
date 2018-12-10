use test;
-- Insert na tabela de Poster
insert into postagem(text_post)values('Teste de insert de postagem 1');
insert into postagem(text_post)values('Teste de insert de postagem 2');
insert into postagem(text_post)values('Teste de insert de postagem 3');
insert into postagem(text_post)values('Teste de insert de postagem 4');


-- Insert na tabela de Comentarios com Foreign Keys com o Id do post
insert into cometarios (postagem_id_post,text_comentario) values(1,'Muito bom esse poste 1');
insert into cometarios (postagem_id_post,text_comentario) values(1,'Bem Regular esse poste 1');
insert into cometarios (postagem_id_post,text_comentario) values(1,'Mais ou Menos esse poste 2');
insert into cometarios (postagem_id_post,text_comentario) values(1,'Muito Top esse poste 3');
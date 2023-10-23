-- INSERINDO USUARIOS
INSERT INTO usuarios (nome_usuario, senha_usuario) VALUES
('Joao123', 'senha123'),
('Maria456', 'senha456'),
('Carlos789', 'senha789'),
('Ana555', 'senha555'),
('Pedro999', 'senha999'),
('Julia777', 'senha777'),
('Rafael123', 'senha12345'),
('Luisa456', 'senha45678'),
('Paulo111', 'senha11111'),
('Fernanda222', 'senha22222'),
('Lucas333', 'senha33333'),
('Laura444', 'senha44444'),
('Mariana111', 'senha111'),
('Ricardo222', 'senha222'),
('Cristina333', 'senha333'),
('Gustavo444', 'senha444'),
('Vanessa123', 'senha123456'),
('Felipe456', 'senha456789'),
('Eduarda789', 'senha789012'),
('Marcos555', 'senha555555');



--INSERTS TIME
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Corinthians Paulista', 'Estádio Olímpico Joaquim Cláudio Toledo', 'Fernando José Pitino', 35);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Palmeiras', 'Estádio Major Osvaldo Moreira Lima', 'Marcos Gomes Nunes', 55);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'São Paulo', 'Estádio do Morumbi', 'Celsinho Araújo', 32);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Santos', 'Estádio Urbano Caldeira', 'Oliver Luiz Piza Baeza', 13);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Flamengo', 'Estádio Mané Garrincha', 'Zé Ricardo', 26);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Fluminense', 'Estádio Joaquim Abrahão', 'Vágner Benazzi', 9);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Atlético Mineiro', 'Estádio Independência', 'Ronaldo José Gomes de Souza', 25);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Vasco da Gama', 'Estádio Oscar Silva Santos', 'Cacau', 23);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Cruzeiro', 'Estádio Mineirão', 'Dorival Júnior', 21);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Botafogo', 'Estádio Nilton Santos', 'Dudu Não Morre', 21);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Internacional', 'Estádio Beira-Rio', 'Ney Franco', 17);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Sport Recife', 'Estádio dos Aflitos', 'João Henrique Campos de Oliveira', 15);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'América-MG', 'Estádio Mané Garrincha', 'Cássio', 10);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Chapecoense', 'Estádio Amadeu Azzi', 'Muricy Ramalho', 2);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Bahia', 'Estádio Fonte Nova', 'Edílson Peruchetti Júnior', 13);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Paraná', 'Estádio Jundiaí', 'Guto Ferreira', 7);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Ceará', 'Estádio Castelão', 'Zé Ricardo', 5);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Goiás', 'Estádio Olímpico Pedro Ludovico Teixeira', 'Dado', 5);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Grêmio', 'Estádio Olímpico Monumental', 'Rubens Barrichello', 17);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Coritiba', 'Estádio Couto Pereira', 'Eduardo Baptista', 9);
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) 
VALUES ('', 'Ponte Preta', 'Estádio Moisés Lucarelli', 'Fábio Carille', 8



  --INSERTS JOGADORES
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem1.jpg', 'Joãozinho', 'ATA', 23, 75, 180, 'Brasil', 5, 2, 1, 10);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem2.jpg', 'Maria', 'MEI', 27, 65, 170, 'Brasil', 4, 2, 2, 7);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem3.jpg', 'Joaquim', 'ZAG', 25, 80, 190, 'Brasil', 6, 0, 0, 4);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem4.jpg', 'Carlos', 'GOL', 28, 70, 180, 'Brasil', 8, 0, 0, 10);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem5.jpg', 'Leticia', 'ATA', 26, 60, 170, 'Argentina', 4, 2, 2, 8);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem6.jpg', 'Marcelo', 'MEI', 29, 75, 180, 'Argentina', 7, 0, 0, 5);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem7.jpg', 'Fabio', 'ZAG', 27, 85, 190, 'Argentina', 5, 0, 0, 3);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem8.jpg', 'Rogério', 'GOL', 26, 75, 180, 'Argentina', 9, 0, 0, 9);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem9.jpg', 'Alice', 'ATA', 24, 65, 170, 'Uruguai', 6, 1, 1, 7);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem10.jpg', 'André', 'MEI', 25, 70, 180, 'Uruguai', 8, 1, 1, 6);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem11.jpg', 'José', 'ZAG', 26, 80, 190, 'Uruguai', 7, 1, 1, 2);
INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES ('imagem12.jpg', 'Bruno', 'GOL', 27, 75, 180, 'Uruguai', 10, 0, 0, 8);


--INSERTS CAMPEONATOS
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(1, 'Copa do Brasil 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(2, 'Brasileirão Série A 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(3, 'Brasileirão Série B 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(4, 'Brasileirão Série C 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(5, 'Brasileirão Série D 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(6, 'Campeonato Mineiro 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(7, 'Campeonato Paulista 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(8, 'Campeonato Carioca 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(9, 'Campeonato Gaúcho 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(10, 'Campeonato Pernambucano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(11, 'Campeonato Goiano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(12, 'Campeonato Catarinense 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(13, 'Campeonato Paraense 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(14, 'Campeonato Amazonense 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(15, 'Campeonato Baiano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(16, 'Campeonato Sergipano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(17, 'Campeonato Alagoano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(18, 'Campeonato Acriano 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(19, 'Campeonato do Amapá 2022');
INSERT INTO campeonato(id_campeonato, nome_campeonato) VALUES(20, 'Campeonato do Espírito Santo 2022');


--INSERTS PARTIDAS

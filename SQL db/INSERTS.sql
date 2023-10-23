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



-- INSERINDO TIMES
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) VALUES
('flamengo.png', 'Flamengo', 'Maracanã', 'Renato Gaúcho', 36),
('corinthians.png', 'Corinthians', 'Arena Corinthians', 'Sylvinho', 30),
('palmeiras.png', 'Palmeiras', 'Allianz Parque', 'Abel Ferreira', 17),
('santos.png', 'Santos', 'Vila Belmiro', 'Fábio Carille', 8),
('sao_paulo.png', 'São Paulo', 'Morumbi', 'Hernán Crespo', 21),
('fluminense.png', 'Fluminense', 'Maracanã', 'Marcos Felipe', 4),
('vasco.png', 'Vasco da Gama', 'São Januário', 'Fernando Diniz', 4),
('botafogo.png', 'Botafogo', 'Estádio Nilton Santos', 'Enderson Moreira', 2),
('gremio.png', 'Grêmio', 'Arena do Grêmio', 'Felipão', 38),
('internacional.png', 'Internacional', 'Beira-Rio', 'Diego Aguirre', 45),
('atletico_mineiro.png', 'Atlético Mineiro', 'Mineirão', 'Cuca', 15),
('cruzeiro.png', 'Cruzeiro', 'Mineirão', 'Felipão', 47),
('atletico_paranense.png', 'Atlético Paranaense', 'Arena da Baixada', 'António Oliveira', 10),
('coritiba.png', 'Coritiba', 'Couto Pereira', 'Gustavo Morínigo', 4),
('bahia.png', 'Bahia', 'Arena Fonte Nova', 'Dado Cavalcanti', 3),
('sport.png', 'Sport', 'Ilha do Retiro', 'Guto Ferreira', 1),
('ceara.png', 'Ceará', 'Arena Castelão', 'Guto Ferreira', 0),
('goias.png', 'Goiás', 'Estádio Hailé Pinheiro', 'Thiago Larghi', 37),
('fortaleza.png', 'Fortaleza', 'Arena Castelão', 'Juan Pablo Vojvoda', 3),
('flamengo_rj.png', 'Flamengo RJ', 'Maracanã', 'Renato Gaúcho', 30);


-- INSERINDO TIMES
INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) VALUES
('flamengo.png', 'Flamengo', 'Maracanã', 'Renato Gaúcho', 36),
('corinthians.png', 'Corinthians', 'Arena Corinthians', 'Sylvinho', 30),
('palmeiras.png', 'Palmeiras', 'Allianz Parque', 'Abel Ferreira', 17),
('santos.png', 'Santos', 'Vila Belmiro', 'Fábio Carille', 8),
('sao_paulo.png', 'São Paulo', 'Morumbi', 'Hernán Crespo', 21),
('fluminense.png', 'Fluminense', 'Maracanãn', 'Marcos Felipe', 4),
('vasco.png', 'Vasco da Gama', 'São Januário', 'Fernando Diniz', 4),
('botafogo.png', 'Botafogo', 'Estádio Nilton Santos', 'Enderson Moreira', 2),
('gremio.png', 'Grêmio', 'Arena do Grêmio', 'Felipão', 38),
('internacional.png', 'Internacional', 'Beira-Rio', 'Diego Aguirre', 45),
('atletico_mineiro.png', 'Atlético Mineiro', 'Mineirão', 'Cuca', 15),
('atletico_paranense.png', 'Atlético Paranaense', 'Arena da Baixada', 'António Oliveira', 10),
('coritiba.png', 'Coritiba', 'Couto Pereira', 'Gustavo Morínigo', 4),
('bahia.png', 'Bahia', 'Arena Fonte Nova', 'Dado Cavalcanti', 3),
('sport.png', 'Sport', 'Ilha do Retiro', 'Guto Ferreira', 1),
('goias.png', 'Goiás', 'Estádio Hailé Pinheiro', 'Thiago Larghi', 37),
('fortaleza.png', 'Fortaleza', 'Arena Castelão', 'Juan Pablo Vojvoda', 3);


-- INSERINDO CAMPEONATOS
INSERT INTO campeonato (nome_campeonato) VALUES
('Campeonato Brasileiro Série A'),
('Copa do Brasil'),
('Copa Libertadores'),
('Campeonato Espanhol'),
('Campeonato Inglês'),
('Serie A Italiana'),
('Bundesliga'),
('Ligue 1'),
('Champions League'),
('Copa América'),
('Copa do Mundo'),
('Copa Sul-Americana'),
('Campeonato Português'),
('La Liga'),
('Primeira Liga'),
('Eredivisie'),
('MLS'),
('Campeonato Argentino'),
('Campeonato Uruguaio'),
('J-League');


INSERT INTO partidas (campeonato_jogar, data_partida, time_um, time_dois, estadio, cidade, uf) VALUES
('Campeonato Brasileiro Série A', '2023-10-01', 'Flamengo', 'São Paulo', 'Maracanã', 'Rio de Janeiro', 'RJ'),
('Campeonato Brasileiro Série A', '2023-10-15', 'Palmeiras', 'Corinthians', 'Allianz Parque', 'São Paulo', 'SP'),
('Campeonato Brasileiro Série A', '2023-09-29', 'São Paulo', 'Flamengo', 'Morumbi', 'São Paulo', 'SP'),
('Copa Libertadores', '2023-10-14', 'Santos', 'Grêmio', 'Vila Belmiro', 'Santos', 'SP'),
('Campeonato Brasileiro Série A', '2023-09-22', 'Vasco da Gama', 'Botafogo', 'São Januário', 'Rio de Janeiro', 'RJ');

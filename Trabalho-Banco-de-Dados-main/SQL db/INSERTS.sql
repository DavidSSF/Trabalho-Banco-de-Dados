--INSERINDO USUARIOS
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



--INSERINDO TIMES
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


--INSERINDO JOGADORES
INSERT INTO jogador (nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES
('Neymar Jr.', 'ATA', 29, 68, 175, 'Paris Saint-Germain', 30, 8, 5, 40),
('Gabriel Barbosa', 'ATA', 24, 75, 178, 'Flamengo', 25, 6, 4, 35),
('Gerson Santos', 'MC', 24, 76, 181, 'Olympique de Marseille', 28, 7, 3, 10),
('Lucas Lima', 'MC', 31, 70, 173, 'Palmeiras', 20, 9, 6, 15),
('Weverton Pereira', 'GK', 34, 87, 191, 'Palmeiras', 32, 5, 4, 0),
('Geromel', 'CB', 36, 78, 190, 'Grêmio', 29, 8, 7, 3),
('Vinicius Junior', 'ATA', 21, 70, 176, 'Real Madrid', 26, 4, 5, 15),
('Luan', 'MC', 28, 74, 179, 'Corinthians', 23, 11, 6, 10),
('Diego Alves', 'GK', 36, 84, 190, 'Flamengo', 30, 7, 6, 0),
('Felipe', 'CB', 32, 82, 189, 'Atlético Mineiro', 28, 7, 6, 2),
('Everton Ribeiro', 'MC', 32, 70, 176, 'Flamengo', 31, 6, 4, 8),
('Fred', 'MC', 28, 75, 180, 'Fluminense', 22, 8, 7, 9),
('Vanderlei', 'GK', 37, 88, 191, 'Grêmio', 27, 6, 7, 0),
('Diego Souza', 'ATA', 35, 85, 191, 'Grêmio', 24, 10, 5, 18),
('Rony', 'ATA', 25, 73, 177, 'Palmeiras', 27, 5, 6, 12),
('Éverton Cebolinha', 'ATA', 25, 72, 172, 'Benfica', 28, 6, 7, 8),
('Guga', 'RB', 23, 70, 173, 'Atlético Mineiro', 31, 7, 3, 2),
('Thiago Maia', 'MC', 24, 75, 181, 'Flamengo', 25, 9, 4, 5),
('Felipe Melo', 'CB', 38, 82, 187, 'Palmeiras', 26, 7, 6, 4),
('Cássio', 'GK', 34, 91, 195, 'Corinthians', 30, 5, 6, 0),
('Lucas Paquetá', 'MC', 24, 73, 177, 'Lyon', 29, 6, 4, 11);


--INSERINDO CAMPEONATOS
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
('Copa Libertadores', '2023-09-28', 'Grêmio', 'Santos', 'Arena do Grêmio', 'Porto Alegre', 'RS'),
('Copa do Brasil', '2023-10-12', 'Flamengo', 'São Paulo', 'Maracanã', 'Rio de Janeiro', 'RJ'),
('Campeonato Brasileiro Série A', '2023-09-30', 'Flamengo', 'Corinthians', 'Maracanã', 'Rio de Janeiro', 'RJ'),
('Campeonato Espanhol', '2023-10-19', 'Barcelona', 'Real Madrid', 'Camp Nou', 'Barcelona', 'CA'),
('Campeonato Brasileiro Série A', '2023-09-29', 'São Paulo', 'Flamengo', 'Morumbi', 'São Paulo', 'SP'),
('Copa Libertadores', '2023-10-14', 'Santos', 'Grêmio', 'Vila Belmiro', 'Santos', 'SP'),
('Copa do Brasil', '2023-10-05', 'Palmeiras', 'Flamengo', 'Allianz Parque', 'São Paulo', 'SP'),
('Campeonato Brasileiro Série A', '2023-10-02', 'Flamengo', 'Santos', 'Maracanã', 'Rio de Janeiro', 'RJ'),
('Copa Libertadores', '2023-10-08', 'Grêmio', 'São Paulo', 'Arena do Grêmio', 'Porto Alegre', 'RS'),
('Campeonato Brasileiro Série A', '2023-10-12', 'Santos', 'Palmeiras', 'Vila Belmiro', 'Santos', 'SP'),
('Campeonato Brasileiro Série A', '2023-09-25', 'Flamengo', 'Fluminense', 'Maracanã', 'Rio de Janeiro', 'RJ'),
('Campeonato Brasileiro Série A', '2023-09-22', 'Vasco da Gama', 'Botafogo', 'São Januário', 'Rio de Janeiro', 'RJ');


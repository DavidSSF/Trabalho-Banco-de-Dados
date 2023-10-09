CREATE TABLE usuarios(
	id_usuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome_usuario VARCHAR(50) NOT NULL,
    senha_usuario VARCHAR(50) NOT NULL
);


CREATE TABLE timee(
    id_time INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    escudo TEXT NOT NULL,
	nome_time VARCHAR(100) NOT NULL,
	estadio VARCHAR(100) NOT NULL,
	tecnico VARCHAR(100) NOT NULL,
	quantidade_titulos INT NOT NULL
);

CREATE TABLE  jogador(
    id_jogador INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome_jogador VARCHAR(250) NOT NULL,
    posicao VARCHAR(3) NOT NULL,
    idade INT NOT NULL,
    peso INT NOT NULL,
    altura_jogador INT NOT NULL,
    time_jogador VARCHAR(100) NOT NULL,
    jogos_ganhos INT NOT NULL,
    jogos_empate INT NOT NULL,
    jogos_perdidos INT NOT NULL,
    total_gols INT NOT NULL
);

CREATE TABLE campeonato(
    id_campeonato INT AUTO_INCREMENT PRIMARY KEY,
    nome_campeonato VARCHAR(100) NOT NULL
);

CREATE TABLE partidas(
	id_partidas INT AUTO_INCREMENT PRIMARY KEY,
    campeonato_jogar VARCHAR(100) NOT NULL,
    data_partida DATE NOT NULL,
    time_um VARCHAR(100) NOT NULL,
    time_dois VARCHAR(100) NOT NULL,
    estadio VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    uf VARCHAR(2) NOT NULL
);

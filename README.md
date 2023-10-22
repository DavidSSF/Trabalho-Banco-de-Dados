
<div align="center">
  <img height="150" src="https://logodownload.org/wp-content/uploads/2017/11/cbf-logo-selecao-logo-brasil.png"  />
</div>

###
<h1 align="center">Sistema de Gerenciamento CBF (Confederação Brasileira de Futebol) ⚽</h1>

Neste projeto com fins de aprimorar nosso conhecimento quanto a linguagens já estudadas, torna-se evidente o domínio de tais conteúdos a partir da criação de um banco de dados funcional. Este banco visa armazenar e gerenciar informações relacionadas à Confederação Brasileira de Futebol, como jogadores, clubes, partidas, estatísticas, entre outros dados relevantes.

<h3 align="left">👩‍💻  Desenvolvedores </h3>

[![GitHub](https://img.shields.io/badge/GitHub-Livia-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/liviacarvalho07) <br>
[![GitHub](https://img.shields.io/badge/GitHub-Anderson-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/0AndersonMelo0)<br>
[![GitHub](https://img.shields.io/badge/GitHub-Arthur-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ArthurOliveeira)<br>
[![GitHub](https://img.shields.io/badge/GitHub-David-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/DavidSSF)<br>
[![GitHub](https://img.shields.io/badge/GitHub-Matheus-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/matheussoares1)<br>
[![GitHub](https://img.shields.io/badge/GitHub-Ruan-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/28082006ruan123)<br>
[![GitHub](https://img.shields.io/badge/GitHub-Kalel-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/KalelOliveira)<br>

###

<h3 align="left"> 🛠️ Desenvolvido com</h3>
<div align="left">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="40" alt="javascript logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" height="40" alt="html5 logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" height="40" alt="css3 logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="40" alt="php logo"  />
</div>

## Etapa 01
### 🚀 Definição do grupo:
> Ana Livia - Front e Relatora de Documentação<br>
> Anderson Melo - Front<br>
> Arthur Oliveira - MER e Logico/Relacional<br>
> David Saboia - Back-end<br>
>Francisco Matheus - Back-end<br> 
>Francisco Ruan - Front<br> 
>Kalel Oliveira - MER e Logico/Relacional <br>

## Etapas 02 e 03
### Criação do Modelo Entidade Relacionamento(MER): 
Iniciamos o projeto relacionando as entidades (5 ao total) entre si por meio do Modelo Entidade Relacionamento(MER), como é visto abaixo.

  <img height= "350" width="700" src="https://github.com/DavidSSF/Trabalho-Banco-de-Dados/assets/111568402/a8ec564a-5e8c-4b7e-8110-3aead65d07b2"/>
  <br>
  
### Criação do Modelo Lógico:
A partir do anterior, geramos o Modelo Lógico 

  <img height= "350" width="700" src="https://github.com/DavidSSF/Trabalho-Banco-de-Dados/assets/111568402/313d7bce-3181-43f8-b136-c5666cdf82e8"/>

## Etapas 04,05 e 6
### Criação do Banco de Dados:
Passando para o modelo físico, o código SQL é gerado, tendo assim, as tabelas e os atributos das referidas entidades, como é possível ver abaixo.

```
CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome_usuario VARCHAR(50) NOT NULL,
    senha_usuario VARCHAR(50) NOT NULL
);
```
![image](https://github.com/DavidSSF/Trabalho-Banco-de-Dados/assets/111543203/c7b6de86-a1e9-4dff-a981-1cd469a1d3d2)

### Aparência da aplicação: 
Basicamente o usuário pode acessar sua conta ou cadastrar-se para ter acesso à aplicação.


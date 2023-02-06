# Desafio - Space Flight News
Desafio feito pela Coodesh para concorrer a vaga de PHP Developer na OZ Technology.

<div style="display: inline">
	<img src="https://img.shields.io/static/v1?label=released date&message=January 2023&color=0ABF53&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=npm&message=v8.19.2&color=CB3837&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=php&message=v7.4.33&color=777BB4&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=laravel&message=v7.30.6&color=FF2D20&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=composer&message=v1.10.1&color=885630&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=jquery&message=v3.6.3&color=0769AD&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=sass&message=v1.57.1&color=CC6699&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=bootstrap&message=v5.2.3&color=7952B3&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=font awesome&message=v6.2.1&color=528DD7&style=flat"/>
	<img src="https://img.shields.io/static/v1?label=sweetalert2&message=v11.7.1&color=7066e0&style=flat"/>
</div>

## Descrição do Desafio
Construir uma API Restful com as melhores práticas de desenvolvimento, baseada na API [Space Flight News](https://api.spaceflightnewsapi.net/v3/documentation) e executando os seguintes passos:

**Obrigatório 1** - Criar um banco de dados grátis MongoDB usando Atlas: https://www.mongodb.com/cloud/atlas ou banco de dados grátis MySQL no Heroku: https://elements.heroku.com/addons/jawsdb ou banco de dados grátis Postgres no Heroku: https://elements.heroku.com/addons/heroku-postgresql (Recomendável usar Drivers oficiais para integração com o DB).

**Obrigatório 2** - Desenvolver as seguintes rotas:

- `[GET]/: ` Retornar um Status: 200 e uma Mensagem "Back-end Challenge 2021 🏅 - Space Flight News";
- `[GET]/articles/:`   Listar todos os artigos da base de dados, utilizar o sistema de paginação para não sobrecarregar a REQUEST;
- `[GET]/articles/{id}:` Obter a informação somente de um artigo;
- `[POST]/articles/:` Adicionar um novo artigo;
- `[PUT]/articles/{id}:` Atualizar um artigo baseado no `id`;
- `[DELETE]/articles/{id}:` Remover um artigo baseado no `id`.

**Obrigatório 3** - Para alimentar o banco de dados deverá ser criado um script para armazenar os dados de todos os artigos na Space Flight News API. 

**Obrigatório 4** - Além disso é preciso desenvolver um CRON para ser executado diariamente às 9h e armazenar em seu os novos artigos ao seu banco de dados.

**Diferencial 1** - Configurar Docker no Projeto para facilitar o Deploy da equipe de DevOps.

**Diferencial 2** - Configurar um sistema de alerta se houver algum falha durante a sincronização dos artigos.

**Diferencial 3** - Descrever a documentação da API utilizando o conceito de Open API 3.0.

**Diferencial 4** - Escrever Unit Tests para os endpoints da API.

## Como Instalar o Projeto
### 1. Clonar Esse Repositório
Verifique se já possui o git instalado em sua máquina com o comando *git --version*, se aparecer uma mensagem dizendo que o comando *git* não foi encontrado, instale-o seguindo a opção abaixo que mais se adequa ao seu caso.

`Windows`

	- Acesse o site https://gitforwindows.org/ e faça o download do GIT para Windows;
	- Ao fim do download, clique 2x em cima do arquivo para que ele inicie o processo de instalação. É necessário somente seguir as instruções na tela, clicando em 'Next' e ao terminar, clique em 'Finish';
	- Abra o prompt de comando que fica em Inicar > Todos os Programas > Acessórios > Prompt de Comando.
	
`MacOS`

	- Visite o site https://sourceforge.net/projects/git-osx-installer/files/ e faça o download do instalador;
	- Siga as instruções na tela e conclua a instalação;
	- Abra o terminal.

`Linux`

	- Debian/Ubuntu: Abra o terminal e execute o comando 'sudo apt-get install git';
	- Fedora: Abra o terminal e execute o comando 'sudo dnf install git' ou 'sudo yum install git'.
	
No terminal ou no prompt de comando já aberto, configure seu usuário com o login do github ou similares. Para fazer isso é só usar o comando `git config --global user.name "Nome"` e o comando `git config --global user.email "exemplo@seuemail.com.br"`.
Após fazer os passos acima, clone esse repositório com o comando `git clone https://github.com/Amanda82cyber/challenge_space_flight_news.git`.

### Instalar as depêndencias do Composer e do npm
Caso não tenha o Composer instalado em sua máquina, [clique aqui](https://getcomposer.org/download/) e siga o processo de download. Se também não tiver o gerenciador de pacotes do node instalado, [clique aqui](https://kinsta.com/pt/blog/como-instalar-o-node-js/) e veja como fazer isso.

Com o Composer e o npm instalados, abra seu terminal ou prompt de comando e vá até a pasta deste projeto que acabou de ser clonada. Execute os seguintes comandos para instalar as depêndencias necessárias: `composer install` e `npm i`.

Após realizar o feito acima, inicialize o projeto com `php artisan serve` e clique no link gerado para acessar.

### Configurando o banco local
Como não consegui criar um banco de dados MySQL no Heroku, como pedia no desafio, ensinarei como configurar o banco de dados local.

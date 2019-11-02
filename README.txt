- Ferramentas Utilizadas: 
	- XAMPP;
	- Visual Studio Code;
	- Framework CodeIgniter;
	- AdminLTE;
	- Composer;
	- Navegador: Google Chrome;
	- Sistema Operacional: Windows 10.

- Tutorial para execu??o local:
	- Com o XAMPP aberto, criar o banco de dados a partir do PhpMyAdmin com o nome:mx_diary;
	- Com o banco de dados ja criado, abrir Prompt de Comando (cmd), ir para a o diret¨®rio do projeto e digitar o seguinte comando: php artisan migrate;
		- Tal comando ir¨¢ gerar todas as tabelas necess¨¢rias no banco de dados para que ent?o seja poss¨ªvel a execu??o do projeto;
		- Caso o migrate ja esteja sido executado anterior, usar o comando: php artisan migrate:fresh.
	- Com as tabelas ja criadas no banco de dados MySQL, ainda no Prompt de Comando e no diret¨®rio do projeto, utilizar o comando: php artisan serve;
		- Esse comando ir¨¢ fazer com que o projeto seja executado localmente a partir da porta 8000.
	- Abrir navegador, de preferencia o Google Chrome (navegador utilizado no desenvolvimento do projeto) e acessar o endere?o: http://localhost:8000/
	- Ser¨¢ direcionado para a tela de login do sistema, caso n?o tenha cadastrado nenhum usu¨¢rio anteriormente, sera necess¨¢rio o cadastro do mesmo para que seja possivel acessar o sistema.
	- Despois de acessado, o usuario ter¨¢ a possibilidade de acessar as p¨¢ginas de Cria??o de Relatos e Listagem de Relatos.


	


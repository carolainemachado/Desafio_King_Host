
<div align="center">
<img src="./MTGNJe02Ew57kFf5BA1OLpXQk8natozyOC9hGZ4S.png" alt="Logo King Host" width="120px" height="120px">
</div>
 
<div align="center">
<h1>Desafio prático do processo seletivo para a
oportunidade de Assistente de Desenvolvimento.</h1>
</div>
 
<div align="center">
</div>
 
<div align="center">
<table>
<tr>
<td align="center">
<a href="https://www.linkedin.com/in/carolaine-machado-a8395a161/">
<img src="https://avatars.githubusercontent.com/u/115194896?v=4" width="100px;" alt="Foto Carolaine"/><br>
<sub><b>Carolaine Machado</b></sub>
</a>
</td>
</tr>
</table>
</div>
 
---

<a id="ancora1"></a>
 
#### <h2>Visão Geral</h2>
  Esta aplicação web desenvolvida com Laravel consome uma API para obter uma lista de usuários e apresenta os dados de forma organizada. A aplicação utiliza o framework Laravel para gerenciar as rotas, controlar os dados e renderizar as views. A lista de usuários é separada por estado e ordenada por nome em ordem alfabética dentro de cada estado.


#### <h2>API Utilizada:</h2>
  - URL da API: https://dummyjson.com/users
  - Parâmetro: limit (para limitar o número de usuários retornados)

#### <h2>Tecnologias Utilizadas:</h2>
   - Laravel: Framework PHP para o desenvolvimento de aplicações web.
   - Blade: Motor de templates do Laravel para a renderização de views.
   - HTML: Estrutura das páginas web.
   - HTTP Client (Laravel): Para consumir a API e processar os dados.

#### <h2>Preparar o Ambiente:</h2>
   - PHP: Laravel requer PHP 8.0 ou superior.
   - Composer: Gerenciador de pacotes para PHP.
   - MySQL (ou outro banco de dados compatível com Laravel): Opcional, mas necessário se o projeto usar um banco de dados.  
 
#### <h2>Instruções de Execução:</h2>
  1. Clonar o Repositório ou Baixar os Arquivos.

  2. Instalar Dependências:
  - Instalar Dependências PHP:
        
         composer install

  3. Configurar o Ambiente:
  - Criar o Arquivo .env:
        
        cp .env.example .env

  - Configurar o .env:
    
        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=base64:YOUR_APP_KEY_HERE
        APP_DEBUG=true
        APP_URL=http://localhost

  - Iniciar o Servidor de Desenvolvimento
        
        php artisan serve


  - Visualizar a Aplicação
  Abra um navegador e acesse http://localhost:8000/users para visualizar a lista de usuários.

#### <h2>Estrutura do Projeto Laravel:</h2>
 - Controlador: UserController.php
    
    Localização: app/Http/Controllers/UserController.php

    Responsável por consumir a API, processar os dados e passar para a view.

 - View Blade: index.blade.php

    Localização: resources/views/users/index.blade.php

    Responsável por exibir os dados formatados e estilizados.

- Rota: web.php

    Localização: routes/web.php

    Define a rota para acessar a lista de usuários.
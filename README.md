# Docker - LAMP
<abbr title="Linux, Apache, MySQL, PHP">LAMP</abbr> Stack (Ubuntu, Apache, MySQL, phpMyAdmin)
**Versões**:
    **PHP**: 5.3
    **MySQL**: 5.5

-------------

# Instalação
Execute o seguinte comando no terminal para construir e rodar o container: 
`$ docker-compose up -d`
-------------
# Detalhes
A pasta html/ é onde você coloca o código php do seu projeto.
A pasta criada data/db/mysql é criada para armazenar o banco de dados.

Para acessar o projeto acesse via navegador o endereço: `localhost:80`
Para acessar o <abbr title="PHPmyAdmin é uma ferramenta utilizada para administrar seus bancos de dados através de navegadores de forma simples e intuitiva">PHPMyAdmin</abbr> acesse via navegador o endereço: `localhost:81`

Banco de Dados Padrão: mydb
Usuario: root
Senha: root

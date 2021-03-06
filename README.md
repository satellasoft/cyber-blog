# Cyber Blog

## Projeto principal do blog criado durante as lives de PHP no canal.

Para a utilização desse projeto se faz necessário algumas tecnologias, dentre elas:

* PHP 7.2^
* MariaDB ou MySQL
* Composer
* Git

O projeto está em desenvolvimento e qualquer alteração pode acarretar em erros, aguarde a versão final.

# Configuração

O arquivo de configuração fica na pasta **app\config**, contendo o arquivo **config.php** e uma subpasta chamada de **env** contendo o arquivo final de configuração para ambiente local, qa e produção.

## config.php

Faz umavalidação através de uma variável para verificar qual arquivo será utilizado.

Mude o valor da variável **$prod** para true se quiser carregar os arquivo de configuração de prod, mas caso queira utilizar o arquivo de configurações locais, basta manter o valor da variável para false.

# Renderizando páginas com Twig

Para renderizar uma página com o Twig basta extender a classe **App\Core\Controller.php** e chamar o método view.

O método recebe dois parâmetros, sendo eles:

* **$page** - Página a ser carregada, não informe .twig.php pois já é inserido automáticamente. Não utilizar **/** para diretório, mas sim **.**, ex: **diretorio.pagina**;
* **$params** - Array associativo com os valores a serem entregues para a página do twig.

# View Partials

Dentro da pasta **partials/**,contém vários arquivos de visão especiais, sendo eles:

* **body** - Arquivo contendo o corpo genérico das páginas, com as tags de script, body, head...;
* **header** - Contém todo HTML do cabeçalho que é importado no arquivo **body**;
* **footer** - Contém todo HTMK do rodapé que é importado no arquivo **body**;
* **components/post-square** - Contém o HTML para exibir postagem com uma imagem de título.

Para inserir scripts antes do fechamento ```</body>```, utilize o bloco descrito abaixo.

```php
    {% block footer %}{%endblock%}
```

Para inserir scripts antes do fechamento ```</head>```, utilize o bloco descrito abaixo.

```php
    {% block header %}{%endblock%}
```

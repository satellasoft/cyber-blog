<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %}{%endblock%}</title>

    <link rel="shortcut icon" href="{{BASE}}assets/image/logo/favicon.ico">

    <link rel="preload" href="{{BASE}}assets/css/style.css" as="style">

    <link rel="stylesheet" href="{{BASE}}assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!--Seção extra para header-->
    {% block header %}{%endblock%}
</head>

<body>
    <!--Inclui o cabeçalho da página-->
    {% include('/partials/header.twig.php') %}

    <!--Bloco de corpo-->
    {% block body %}{% endblock %}

    <!--Inclui o rodapé da página-->
    {% include('/partials/footer.twig.php') %}

    <input type="hidden" id="txtBase" value="{{BASE}}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <script src="{{BASE}}assets/js/script.js"></script>
    <!--Seção extra para footer-->
    {% block footer %}{%endblock%}
</body>

</html>
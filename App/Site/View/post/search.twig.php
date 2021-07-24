{% extends('/partials/body.twig.php') %}

{% block title %}Busca - Cyber Blog{%endblock%}

{% block body %}

<div class="max-width">

    <div class="mt-5">
        <input type="text" readonly value="{{ terms }}" class="form-control" style="max-width: 250px;width:100%;">

        <p class="mt-3">Exibindo <span class="font-weight-bold">{{countPosts}}</span> resultados para o termo pesquisado.</p>
    </div>

    <section>
        {% for post in posts%}
            {% include('/partials/components/search-content.twig.php') %}
        {% endfor %}
    </section>

</div>
<br>

{% endblock %}
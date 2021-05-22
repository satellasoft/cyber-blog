{% extends('/partials/body.twig.php') %}

{% block title %}Cyber Blog - Postagens de Tecnologia toda semana{%endblock%}

{% block body %}

<div class="max-width">

    <div class="row">
        {% for post in posts%}
        <div class="col-md-3">
            {% include('/partials/components/post-square.twig.php') %}
        </div>
        {% endfor %}
    </div>

</div>

{% endblock %}
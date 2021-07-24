{% extends('/partials/body.twig.php') %}

{% block title %}{{article.title}} - Cyber Blog{%endblock%}

{% block body %}

<div class="max-width">


    <section class="article">
        <h1>{{article.title}}</h1>

        <h2 class="mt-3">{{article.subtitle}}</h2>

        <article class="mt-5">
            {{article.article | raw}}
        </article>
    </section>

    <section class="mt-5">
        <h2>Últimas postagens</h2>
        {% for post in posts%}
        {% include('/partials/components/search-content.twig.php') %}
        {% endfor %}
    </section>

</div>
<br>

{% endblock %}
<h1>Finalmente estamos aqui!!!</h1>

<h2>{{ titulo }}</h2>

<ol>
    {% for produto in produtos %}
    
        <li>{{produto}}</li>

    {% endfor %}
</ol>
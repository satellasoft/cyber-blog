<div class="component-post-search">
    <div class="row">

        <div class="col-md-2">
            <a href="{{BASE}}post/ver/{{post.link}}">
                {% if post.image != null %}
                <img src="{{ post.image}}" alt="{{post.title}}">
                {% else%}
                <img src="{{BASE ~ 'assets/image/blog-thumbs/default-thumb.jpg'}}" alt="{{post.title}}">
                {% endif %}
            </a>
        </div>

        <div class="col-md-10">
            <h1>{{post.title}}</h1>
            <h2>{{post.description}}</h2>

            <a href="{{BASE}}post/ver/{{post.link}}">Ler mais...</a>
        </div>

    </div>
</div>
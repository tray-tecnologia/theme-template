---
layout: page
title: Categories
type: Variáveis/Helpers
permalink: /variables/categories/
scope: todas
---

Informações sobre as categorias cadastradas no Painel Administrativo.

<table>
    <tbody>
        <tr>
            <td>id</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ categories[0].id }}

                {% endraw %}
                {% endhighlight %}
                Identificador único da categoria
            </td>
        </tr>
        <tr>
            <td>parent</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ categories[25].parent }}

                {% endraw %}
                {% endhighlight %}
                Identificador único da categoria mãe
            </td>
        </tr>
        <tr>
            <td>name</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ categories[0].name }}

                {% endraw %}
                {% endhighlight %}
                Nome da categoria
            </td>
        </tr>
        <tr>
            <td>description</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ categories[0].description }}

                {% endraw %}
                {% endhighlight %}
                Descrição da categoria
            </td>
        </tr>
        <tr>
            <td>children</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% for category in categories %}
    {% for child in category.children %}
        {{ child.id }}
        {{ child.name }}
    {% endfor %}
{% endfor %}

                {% endraw %}
                {% endhighlight %}
                Subcategorias
            </td>
        </tr>
    </tbody>
</table>

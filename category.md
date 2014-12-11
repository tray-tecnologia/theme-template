---
layout: page
title: Category
type: Variáveis/Helpers
permalink: /variables/category/
scope: catalog
---

Informações sobre a categoria atual.

<table>
    <tbody>
        <tr>
            <td>id</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ category.id }}

                {% endraw %}
                {% endhighlight %}
                Identificador único da categoria
            </td>
        </tr>
        <tr>
            <td>name</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ category.name }}

                {% endraw %}
                {% endhighlight %}
                Nome da categoria
            </td>
        </tr>
        <tr>
            <td>brands</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if category.brands %}

    <select name="filtrar_marca">
        {% for brand in category.brands %}
            <option value="{{ brand.name }}">{{ brand.name }}</option>
        {% endfor %}
    </select>

{% endif %}

                {% endraw %}
                {% endhighlight %}
                As marcas vinculadas aos produtos dessa categoria
            </td>
        </tr>
        <tr>
            <td>children</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
{% if category.children  %}

    {% for children in category.children %}
        <a href="{{ children.link }}">{{ children.name }}</a>
    {% endfor %}

{% endif %}
                {% endraw %}
                {% endhighlight %}
                Subcategorias
            </td>
        </tr>
    </tbody>
</table>

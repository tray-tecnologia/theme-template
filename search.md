---
layout: page
title: Search
permalink: /variables/search/
scope: search (alguns índices estão disponíveis na catalog)
---

Informações relacionadas a busca de produtos.

<table>
    <tbody>
        <tr>
            <td>available_options</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if search.available_options %}
        
    <select name="disponibilidade_tag">
        {% for option in search.available_options %}
            <option value="{{ option.value }}">{{ option.name }}</option>
        {% endfor %}
    </select>

{% endif %}

                {% endraw %}
                {% endhighlight %}
                Opções de disponibilidade de produto
            </td>
        </tr>
        <tr>
            <td>order_options</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if search.order_options %}
        
    <select name="order">
        {% for option in search.order_options %}
            <option value="{{ option.value }}">{{ option.name }}</option>
        {% endfor %}
    </select>

{% endif %}

                {% endraw %}
                {% endhighlight %}
                Opções de ordenação
            </td>
        </tr>
        <tr>
            <td>word</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if search.word %}

    Exibindo resultados para: {{ search.word }}

{% endif %}

                {% endraw %}
                {% endhighlight %}
                Termo buscado na loja.
            </td>
        </tr>
        <tr>
            <td>brands</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if search.brands %}

    <select name="filtrar_marca">
        {% for brand in search.brands %}
            <option value="{{ brand.name }}">{{ brand.name }}</option>
        {% endfor %}
    </select>

{% endif %}

                {% endraw %}
                {% endhighlight %}
                As marcas vinculadas aos produtos dessa busca
            </td>
        </tr>
    </tbody>
</table>

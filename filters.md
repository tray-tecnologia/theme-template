---
layout: page
title: Filters
type: Variáveis/Helpers
permalink: /variables/filters/
scope: catalog | search
---

A variável `filters` te da a possibilidade de montar filtros como esse:

<img src="{{ site.baseurl }}/assets/filters-example.png" alt="Tray OpenCode filters">

Snippet de código para montar o filtro:

{% highlight html+jinja %}
{% raw %}

{% if filters %}

<form name="form-filter" method="get">
    <input type="hidden" name="loja" value="{{ store.id }}" />
    {% if category.id %}
        <input type="hidden" name="categoria" value="{{ category.id }}" />
    {% endif %}
    {% for myFilter in filters %}
        {% if myFilter.items|length > 0 %}
            <h3>{{ myFilter.title }}</h3>
            <ul>
            {% for item in myFilter.items %}
                <li>
                    {% if item.type == "link" %}
                        <a href="{{ item.url }}">{{ item.title }}</a>
                    {% endif %}

                    {% if item.type == "checkbox" %}
                        <label>
                            {% set checked = item.applied ? 'checked="checked"' %}
                            <input type="checkbox" name="{{ item.name }}" value="{{ item.value }}" {{ checked }} />
                            {{ item.title }}
                        </label>
                    {% endif %}
                </li>
            {% endfor %}
            </ul>
        {% endif %}
    {% endfor %}
    <button type="submit" class="filter-button">{{ Translation('filtrar') }}</button>
</form>

{% endif %}

{% endraw %}
{% endhighlight %}

<table>
  <thead><tr>
    <th>Chaves principais</th>
    <th>Descrição</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>categories</td>
      <td>Lista de categorias</td>
    </tr>
    <tr>
      <td>brands</td>
      <td>Lista de marcas</td>
    </tr>
    <tr>
      <td>prices</td>
      <td>Lista de preços</td>
    </tr>
    <tr>
      <td>variations</td>
      <td>Lista de variações</td>
    </tr>
    <tr>
      <td>features</td>
      <td>Lista de características</td>
    </tr>
  </tbody>
</table>

<table>
  <thead><tr>
    <th>Chaves secundárias</th>
    <th>Descrição</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>title</td>
      <td>Título do filtro (ex: Categorias, Filtrar por marca, Faixa de preços)</td>
    </tr>
    <tr>
      <td>items</td>
      <td>Lista de itens</td>
    </tr>
  </tbody>
</table>

Exemplo de conteúdo da variável "filters":
{% highlight php %}
[categories] => Array
    (
        [title] => Categorias
        [applied] => 
        [items] => Array
            (
                [0] => Array
                    (
                        [title] => EPSON
                        [count] => 2
                        [url] => /mvc/store/catalog/?categoria=8-epson&loja=332719
                        [type] => link
                        [applied] => 0
                    )

                [1] => Array
                    (
                        [title] => HP
                        [count] => 18
                        [url] => /mvc/store/catalog/?categoria=10-hp&loja=332719
                        [type] => link
                        [applied] => 0
                    )

            )

    )

[brands] => Array
    (
        [title] => Filtrar por Marca
        [applied] => 
        [items] => Array
            (
                [0] => Array
                    (
                        [title] => EPSON
                        [count] => 2
                        [url] => /mvc/store/catalog/?categoria=2&loja=332719&marca=marca_epson
                        [type] => checkbox
                        [applied] => 0
                        [name] => marca
                        [value] => marca_epson
                    )

                [1] => Array
                    (
                        [title] => HP
                        [count] => 18
                        [url] => /mvc/store/catalog/?categoria=2&loja=332719&marca=marca_hp
                        [type] => checkbox
                        [applied] => 0
                        [name] => marca
                        [value] => marca_hp
                    )

            )

    )

[prices] => Array
    (
        [title] => Faixa de Preços
        [applied] => 
        [items] => Array
            (
                [0] => Array
                    (
                        [title] => De R$ 22,99 a R$ 156,81
                        [count] => 13
                        [url] => /mvc/store/catalog/?categoria=2&loja=332719&range=22.99-156.81
                        [type] => checkbox
                        [applied] => 0
                        [name] => range
                        [value] => 22.99-156.81
                        [from] => 22.99
                        [to] => 156.81
                    )

                [1] => Array
                    (
                        [title] => De R$ 156,82 a R$ 291,63
                        [count] => 4
                        [url] => /mvc/store/catalog/?categoria=2&loja=332719&range=156.82-291.63
                        [type] => checkbox
                        [applied] => 0
                        [name] => range
                        [value] => 156.82-291.63
                        [from] => 156.82
                        [to] => 291.63
                    )

                [2] => Array
                    (
                        [title] => De R$ 561,28 a R$ 696,09
                        [count] => 2
                        [url] => /mvc/store/catalog/?categoria=2&loja=332719&range=561.28-696.09
                        [type] => checkbox
                        [applied] => 0
                        [name] => range
                        [value] => 561.28-696.09
                        [from] => 561.28
                        [to] => 696.09
                    )

            )

    )
{% endhighlight %}
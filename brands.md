---
layout: page
title: Brands
permalink: /functions/brands/
scope: todas
help: gerenciar-marcas
help_title: Gerenciar marcas
---

Essa função retorna as marcas cadastradas no Painel Administrativo da loja.

Veja alguns exemplos de uso:

{% highlight html+jinja %}
{% raw %}

{# todas as marcas #}
{% set brands = Brands() %}

{# busca a marca Tray #}
{% set brandTray = Brands( { "brand": "Tray" } ) %}

{# todas as marcas ordenadas por ID decrescente #}
{% set brands = Brands({ "order": { "id": "desc" }}) %}

{% endraw %}
{% endhighlight %}

As requisições de marcas sempre retornarão um array de dados onde cada chave está descrita abaixo:

<table>
    <tr>
        <td>id</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
            {{ brands[0].id }}
            {% endraw %}
            {% endhighlight %}
            Identificador único da marca
        </td>
    </tr>
    <tr>
        <td>name</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
            {{ brands[0].name }}
            {% endraw %}
            {% endhighlight %}
            Nome da marca
        </td>
    </tr>
</table>

Poderá utilizar também nosso [snippet de menu de marcas](http://tray-tecnologia.github.io/opencode-components/brands-menu/){:target="_blank"}

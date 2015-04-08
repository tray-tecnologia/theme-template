---
layout: page
title: Product
permalink: /js/product/
---

Para adicionar e remover produtos da [comparação de produtos](http://wiki.tray.com.br/documentacao/configuracoes-gerais-da-loja/) via AJAX, utilize o seguinte snippet:

{% highlight html+jinja %}
{% raw %}

{% set compareCSS = 'compare-hidden' %}

<a data-compare="remove" href="{{ links.compare_delete ~ product.id }}" class="{{ not product.compare ? compareCSS }}">
    {{ Translation("remover_comparar") }}
</a>

<a data-compare="add" href="{{ links.compare_add  ~ product.id }}" class="{{ product.compare ? compareCSS }}">
    {{ Translation("comparar_produto") }}
</a>

{% endraw %}

{% endhighlight %}

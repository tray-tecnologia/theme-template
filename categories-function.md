---
layout: page
title: Categories
permalink: /functions/categories/
scope: todas
help: gerenciar-categorias
help_title: Gerenciar categorias
---

Essa função retorna as categorias cadastradas no Painel Administrativo da loja.

Veja alguns exemplos de uso:

{% highlight html+jinja %}
{% raw %}

{# todas as categorias #}
{% set myCategories = Categories() %}

{# busca a categoria 1 #}
{% set categoryTray = Categories( { "id": 1 } ) %}

{# todas as categorias ordenadas por nome ascendente #}
{% set myCategories = Categories({ "order": { "name": "desc" }}) %}

{% endraw %}
{% endhighlight %}

As requisições de categorias sempre retornarão um array de dados, veja o padrão de retorno em: 
[Categories]({{ site.baseurl }}/variables/categories/)

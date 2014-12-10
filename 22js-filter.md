---
layout: page
title: Filter
type: Módulos JavaScript
permalink: /modules/filter/
---

Nas páginas de catálogo e busca, você poderá filtrar os produtos exibidos e ordená-los. Quando adicionar o atributo `data-form="filter"` em um formulário, ele iniciará o módulo filter. Esse módulo fará com que sempre que um `<select>` for alterado (onchange), o formulário seja submetido e recarregue os produtos.

{% highlight html+jinja %}
{% raw %}

<form data-form="filter">
    <select></select>
</form>

{% endraw %}
{% endhighlight %}
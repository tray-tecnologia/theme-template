---
layout: page
title: Search (Suggestion)
permalink: /js/search/
---

Para mais informações, visite a wiki de [sugestões de busca](http://wiki.tray.com.br/documentacao/sistema-de-busca-inteligente/#auto-sugestao).

<table>
    <tr>
        <td>data-search</td>
        <td>Tipo da busca (ex: suggestion)</td>
    </tr>
    <tr>
        <td>data-input</td>
        <td>Caixa de texto principal (ex: suggestion)</td>
    </tr>
</table>

{% highlight html+jinja %}
{% raw %}

<form data-search="suggestion">
    <input data-input="suggestion" type="text">
</form>

{% endraw %}
{% endhighlight %}

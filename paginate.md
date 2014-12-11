---
layout: page
title: Paginate
type: Variáveis/Helpers
permalink: /variables/paginate/
scope: catalog | search
---

Helper de paginação de produtos. Se quiser utilizar um snippet pronto, utilize a seguinte chamada:

{% highlight html+jinja %}
{% raw %}

{{ _view.element('snippets/pagination') }}

{% endraw %}
{% endhighlight %}


Para montar a paginação do seu jeito, segue um snippet:

{% highlight html+jinja %}
{% raw %}

{{ paginate.counter('Encontramos {:count} produto(s) em {:pages} página(s)') }}

{% if paginate.params.pageCount > 1 %}
    {{ paginate.first('Primeira', {'class': 'page-first'}) }}

    {% if paginate.hasPrev %}
        {{ paginate.prev('Anterior', {'class': 'page-prev'}) }}
    {% endif %}

    {{ paginate.numbers({
        'modulus': 9,
        'separator': '|',
        'class': 'page-link',
        'currentClass': 'page-current'
    }) }}

    {% if paginate.hasNext %}
        {{ paginate.next('Próxima', {'class': 'page-next'}) }}
    {% endif %}

    {{ paginate.last('Última', {'class': 'page-last'}) }}
{% endif %}

{% endraw %}
{% endhighlight %}

Se quiser mais informações, poderá visitar a [documentação oficial do helper Paginator](http://book.cakephp.org/2.0/en/core-libraries/helpers/paginator.html).
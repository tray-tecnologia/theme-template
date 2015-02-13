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


Para montar a paginação do seu jeito, segue um snippet: [paginate](http://tray-tecnologia.github.io/opencode-components/paginate/).

Se quiser mais informações, poderá visitar a [documentação oficial do helper Paginator](http://book.cakephp.org/2.0/en/core-libraries/helpers/paginator.html).
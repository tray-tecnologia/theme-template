---
layout: page
title: Customer
type: Módulos JavaScript
permalink: /modules/customer/
---

Para contornar o cache, utilize essa marcação para exibir o nome do cliente logado.

{% highlight html+jinja %}
{% raw %}

<span data-customer="name">{{ customer.name }}</span>

{% endraw %}
{% endhighlight %}

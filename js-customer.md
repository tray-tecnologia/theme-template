---
layout: page
title: Customer
permalink: /js/customer/
---

Para contornar o cache, utilize essa marcação para exibir o nome do cliente logado.

{% highlight html+jinja %}
{% raw %}

<span data-customer="name">{{ customer.name }}</span>

{% endraw %}
{% endhighlight %}

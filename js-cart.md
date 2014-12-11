---
layout: page
title: Cart
type: Módulos JavaScript
permalink: /modules/cart/
---

Para contornar o cache, utilize essa marcação para exibir os dados do carrinho atualizados.

{% highlight html+jinja %}
{% raw %}

<span data-cart="amount">{{ cart.amount }}</span>
<span data-cart="price">{{ cart.price }}</span>

{% endraw %}
{% endhighlight %}

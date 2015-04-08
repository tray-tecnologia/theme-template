---
layout: page
title: Cart
permalink: /variables/cart/
scope: todas
---

Informações do carrinho de compras

<table>
    <tbody>
        <tr>
            <td>amount</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                Você tem {{ cart.amount }} produtos no carrinho

                {% endraw %}
                {% endhighlight %}
                Total de produtos no carrinho
            </td>
        </tr>
        <tr>
            <td>price</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                Valor total: {{ cart.price }}

                {% endraw %}
                {% endhighlight %}
                Valor total à pagar
            </td>
        </tr>
    </tbody>
</table>

**Obs:** Para problemas com cache, leia sobre o [módulo Cart em JavaScript]({{ site.baseurl }}/js/cart/)
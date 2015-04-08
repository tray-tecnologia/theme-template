---
layout: page
title: Payment Methods
permalink: /variables/payment-methods/
scope: todas
---

Informações de formas de pagamento cadastradas no Painel Administrativo.

<table>
    <tr>
        <td>order</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}

{% for payment in paymentMethods.order %}
    <img src="{{ payment.thumbnail.url }}" alt="{{ payment.display_name }}">
{% endfor %}

            {% endraw %}
            {% endhighlight %}
            Formas de pagamento à vista
        </td>
    </tr>
    <tr>
        <td>credit</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}

{% for payment in paymentMethods.credit %}
    <img src="{{ payment.thumbnail.url }}" alt="{{ payment.display_name }}">
{% endfor %}

            {% endraw %}
            {% endhighlight %}
            Formas de pagamento à prazo
        </td>
    </tr>
</table>

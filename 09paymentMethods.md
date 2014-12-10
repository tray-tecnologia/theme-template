---
layout: page
title: Payment Methods
type: Variáveis/Helpers
permalink: /variables/payment-methods/
---

Informações de formas de pagamento cadastradas no Painel Administrativo.

<table>
    <tr>
        <td>order</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}

{% for payment in paymentMethods.order %}
    <img src="{{ payment.thumb }}" alt="{{ payment.description }}">
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
    <img src="{{ payment.thumb }}" alt="{{ payment.description }}">
{% endfor %}

            {% endraw %}
            {% endhighlight %}
            Formas de pagamento à prazo
        </td>
    </tr>
</table>

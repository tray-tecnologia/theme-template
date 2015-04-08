---
layout: page
title: Customer
permalink: /variables/customer/
scope: todas
---

Dados do consumidor que está navegando na loja.

<table>
    <tbody>
        <tr>
            <td>id</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ customer.id }}

                {% endraw %}
                {% endhighlight %}
                Identificador único do cliente (se estiver logado)
            </td>
        </tr>
        <tr>
            <td>logged</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
                                
{% if customer.logged %}
    Bem-vindo {{ customer.name }}!
{% endif %}

                {% endraw %}
                {% endhighlight %}
                Retorna se está logado ou não
            </td>
        </tr>
        <tr>
            <td>name</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ customer.name }}

                {% endraw %}
                {% endhighlight %}
                Nome completo do cliente
            </td>
        </tr>
        <tr>
            <td>email</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ customer.email }}

                {% endraw %}
                {% endhighlight %}
                E-mail do cliente
            </td>
        </tr>
    </tbody>
</table>
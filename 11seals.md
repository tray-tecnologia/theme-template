---
layout: page
title: Seals
type: Variáveis/Helpers
permalink: /variables/seals/
scope: todas
---

A Tray possui integração com 2 selos: [Loja Protegida](https://www.lojaprotegida.com.br/) e [Ebit](http://www.ebit.com.br/).

<table>
    <tbody>
        <tr>
            <td>ebit</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
                {{ seals.ebit }}
                {% endraw %}
                {% endhighlight %}
                Retorna o HTML do selo do Ebit
            </td>
        </tr>
        <tr>
            <td>hackersafe</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
                {{ seals.hackersafe }}
                {% endraw %}
                {% endhighlight %}
                Retorna o HTML do selo Loja Protegida
            </td>
        </tr>
    </tbody>
</table>

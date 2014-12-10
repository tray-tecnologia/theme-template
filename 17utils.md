---
layout: page
title: Utils
type: Variáveis/Helpers
permalink: /variables/utils/
scope: todas
---

Utilidades técnicas.

<table>
    <tbody>
        <tr>
            <td>assets_version</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
<script src="my.js?{{ utils.assets_version }}"></script>
<link href="my.css?{{ utils.assets_version }}" rel="stylesheet"/>
                {% endraw %}
                {% endhighlight %}
                Hash para arquivos estáticos devido a cache
            </td>
        </tr>
        <tr>
            <td>is_https</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}
{% if utils.is_https %}
    Fique tranquilo, você está navegando em um ambiente seguro!
{% endif %}
                {% endraw %}
                {% endhighlight %}
                Verifica se está em ambiente seguro
            </td>
        </tr>
    </tbody>
</table>

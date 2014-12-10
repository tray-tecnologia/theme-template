---
layout: page
title: Pages
type: Variáveis/Helpers
permalink: /variables/pages/
scope: todas
---

Contém informações das páginas da loja.

<table>
    <tbody>
        <tr>
            <td>current</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if pages.current == 'home' %}
    Você está na nossa página inicial, navegue na nossa loja!
{% endif %}

                {% endraw %}
                {% endhighlight %}
                Em qual página o usuário está navegando, ex: home
            </td>
        </tr>
        <tr>
            <td>custom</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% for custom in pages.custom %}
    <a href="{{ custom.url }}">{{ custom.name }}</a>
{% endfor %}

                {% endraw %}
                {% endhighlight %}

                <a href="http://wiki.tray.com.br/documentacao/paginas-personalizadas-2/">Páginas Personalizadas</a> cadastradas no Painel Administrativo
            </td>
        </tr>
    </tbody>
</table>

<table>
    <thead><tr>
        <th>Retorno de <code>pages.current</code></th>
        <th>Descrição</th>
    </tr></thead>
    <tbody>
        <tr>
            <td>home</td>
            <td>Página inicial da loja</td>
        </tr>
        <tr>
            <td>search</td>
            <td>Página de busca</td>
        </tr>
        <tr>
            <td>catalog</td>
            <td>Página de catálogo (categoria)</td>
        </tr>
        <tr>
            <td>product</td>
            <td>Página de produto</td>
        </tr>
        <tr>
            <td>checkout_cart</td>
            <td>Carrinho de compras</td>
        </tr>
        <tr>
            <td>register</td>
            <td>Página de cadastro</td>
        </tr>
        <tr>
            <td>login</td>
            <td>Página de login</td>
        </tr>
        <tr>
            <td>checkout_payment</td>
            <td>Escolha de pagamento na finalização de compra</td>
        </tr>
        <tr>
            <td>company</td>
            <td>Quem somos</td>
        </tr>
        <tr>
            <td>map</td>
            <td>Mapa do site</td>
        </tr>
    </tbody>
</table>

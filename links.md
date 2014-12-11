---
layout: page
title: Links
type: Variáveis/Helpers
permalink: /variables/links/
scope: todas
---

<table>
    <tbody>
        <tr>
            <td>search</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.search }}">Buscar</a>

                {% endraw %}
                {% endhighlight %}
                Página de busca
            </td>
        </tr>
        <tr>
            <td>search_by_brand</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.search_by_brand }}tray">Buscar pela marca "tray"</a>

                {% endraw %}
                {% endhighlight %}
                Página de busca por marca
            </td>
        </tr>
        <tr>
            <td>home</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.home }}">Página Inicial</a>

                {% endraw %}
                {% endhighlight %}
                Página inicial
            </td>
        </tr>
        <tr>
            <td>company</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.company }}">Empresa</a>

                {% endraw %}
                {% endhighlight %}
                Página com informações sobre a loja/empresa
            </td>
        </tr>
        <tr>
            <td>contact</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.contact }}">Fale conosco</a>

                {% endraw %}
                {% endhighlight %}
                Página de contato
            </td>
        </tr>
        <tr>
            <td>cart</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.cart }}">Carrinho de compras</a>

                {% endraw %}
                {% endhighlight %}
                Página do carrinho de compras
            </td>
        </tr>
        <tr>
            <td>info</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.info }}">Mais informações</a>

                {% endraw %}
                {% endhighlight %}
                
                Página de informações gerais sobre os processos da loja
            </td>
        </tr>
        <tr>
            <td>info_buy</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.info_buy }}">Como comprar</a>

                {% endraw %}
                {% endhighlight %}
                Âncora de informações sobre compra
            </td>
        </tr>
        <tr>
            <td>security</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.security }}">Segurança</a>

                {% endraw %}
                {% endhighlight %}
                Âncora de informações sobre segurança
            </td>
        </tr>
        <tr>
            <td>warranty</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.warranty }}">Garantia</a>

                {% endraw %}
                {% endhighlight %}
                Âncora de informações sobre garantia
            </td>
        </tr>
        <tr>
            <td>send</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.send }}">Envio</a>

                {% endraw %}
                {% endhighlight %}
                Âncora de informações sobre envio
            </td>
        </tr>
        <tr>
            <td>payment</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.payment }}">Pagamento</a>

                {% endraw %}
                {% endhighlight %}
                Âncora de informações sobre pagamento
            </td>
        </tr>
        <tr>
            <td>newsletter</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.newsletter }}">Inscreva-se para receber novidades</a>

                {% endraw %}
                {% endhighlight %}
                Página de cadastro de newsletter
            </td>
        </tr>
        <tr>
            <td>map</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.map }}">Mapa do site</a>

                {% endraw %}
                {% endhighlight %}
                Página mapa do site
            </td>
        </tr>
        <tr>
            <td>register</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.register }}">Cadastre-se</a>

                {% endraw %}
                {% endhighlight %}
                Página de cadastro
            </td>
        </tr>
        <tr>
            <td>central</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.central }}">Central do cliente</a>

                {% endraw %}
                {% endhighlight %}
                Página da central do cliente
            </td>
        </tr>
        <tr>
            <td>login</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.login }}">Entrar</a>

                {% endraw %}
                {% endhighlight %}
                Página de login
            </td>
        </tr>
        <tr>
            <td>orders</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.orders }}">Meus pedidos</a>

                {% endraw %}
                {% endhighlight %}
                Página de pedidos
            </td>
        </tr>
        <tr>
            <td>orders_tracking</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.orders_tracking }}">Rastrear pedidos</a>

                {% endraw %}
                {% endhighlight %}
                Página de rastreio de pedidos
            </td>
        </tr>
        <tr>
            <td>orders_return</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.orders_return }}">Trocas e devoluções</a>

                {% endraw %}
                {% endhighlight %}
                Página de trocas/devoluções
            </td>
        </tr>
        <tr>
            <td>payment_confirm</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.payment_confirm }}">Confirmar pagamento</a>

                {% endraw %}
                {% endhighlight %}
                Página de confirmação de pagamento
            </td>
        </tr>
        <tr>
            <td>account</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.account }}">Minha Conta</a>

                {% endraw %}
                {% endhighlight %}
                Página central do cliente
            </td>
        </tr>
        <tr>
            <td>account_password</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.account_password }}">Alterar senha</a>

                {% endraw %}
                {% endhighlight %}
                Página de alteração de senha
            </td>
        </tr>
        <tr>
            <td>logout</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <a href="{{ links.logout }}">Sair</a>

                {% endraw %}
                {% endhighlight %}
                Página de logout
            </td>
        </tr>
        <tr>
            <td>compare_add</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

<a href="{{ links.compare_add ~ product.id }}">
    Adicionar à comparação de produto
</a>

                {% endraw %}
                {% endhighlight %}
                Adiciona um produto à comparação
            </td>
        </tr>
        <tr>
            <td>compare_delete</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

<a href="{{ links.compare_remove }}">
    Remover da comparação de produto
</a>

                {% endraw %}
                {% endhighlight %}
                Remove um produto da comparação
            </td>
        </tr>
    </tbody>
</table>

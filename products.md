---
layout: page
title: Products
permalink: /variables/products/
scope: home | catalog | search
---

A variável `products` está disponível de acordo com as regras de cada página:

* Na "home" contém os produtos em destaque;
* Na "catalog" contém os produtos de uma categoria específica de acordo com os filtros aplicados;
* Na "busca" contém os produtos de acordo com os critérios da busca e os filtros aplicados.

Para chamar produtos com critérios personalizados, veja a função [Products()]({{ site.baseurl }}/functions/products).

As requisições de produtos sempre retornarão um array de dados onde cada chave está descrita abaixo:

<table>
    <tr>
        <td>id</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
            {{ products[0].id }}
            {% endraw %}
            {% endhighlight %}
            Identificador único do produto
        </td>
    </tr>
    <tr>
        <td>name</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if 'tenis' in products[0].name %}
    O produto {{ products[0].name }} é um tênis!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Nome do produto
        </td>
    </tr>
    <tr>
        <td>category_id</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
            {{ products[0].category_id }}
            {% endraw %}
            {% endhighlight %}
            Identificador único da categoria principal do produto
        </td>
    </tr>
    <tr>
        <td>price</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].price > 0 and products[0].show_price %}
    {{ products[0].price|currency }}
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Valor do produto
        </td>
    </tr>
    <tr>
        <td>price_offer</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].price_offer > 0 and products[0].show_price %}
    Esse produto está em promoção!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Valor do produto em promoção
        </td>
    </tr>
    <tr>
        <td>show_price</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].price > 0 and products[0].show_price %}
    {{ products[0].price|currency }}
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Existem regras na plataforma referente a exibição do preço. Só exiba o preço se o show_price for verdadeiro
        </td>
    </tr>
    <tr>
        <td>has_other_prices</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].has_other_prices %}
    Esse produto tem variações!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna se o produto possui outros preços, ou seja, se possui variações
        </td>
    </tr>
    <tr>
        <td>payment</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{{ products[0].payment }}
            {% endraw %}
            {% endhighlight %}
            Retorna opões de parcelamento do produto
        </td>
    </tr>
    <tr>
        <td>link</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
<a href="{{ products[0].link }}"> 
    {{ products[0].name }} 
</a>
            {% endraw %}
            {% endhighlight %}
            Link para a página do produto
        </td>
    </tr>
    <tr>
        <td>available</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].upon_request %}
    Produto sob consulta!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna se o produto está sob consulta
        </td>
    </tr>
    <tr>
        <td>available</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if not products[0].available %}
    Produto indisponível!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna se o produto está disponível
        </td>
    </tr>
    <tr>
        <td>stock</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].stock <= 5 %}
    Aproveite, últimas unidades!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Quantidade de produtos em estoque
        </td>
    </tr>
    <tr>
        <td>featured</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].featured %}
    Produto em destaque!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna verdadeiro se for destaque
        </td>
    </tr>
    <tr>
        <td>new</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].new %}
    Produto em lançamento!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna verdadeiro se for lançamento
        </td>
    </tr>
    <tr>
        <td>free_shipping</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].free_shipping %}
    Produto com frete grátis, aproveite!
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna verdadeiro se possuir frete grátis
        </td>
    </tr>
    <tr>
        <td>additional_button</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].additional_button %}
    {{ Image('botao_adicional') }}
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Retorna verdadeiro se possuir botão adicional cadastrado
        </td>
    </tr>
    <tr>
        <td>availability</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% if products[0].availability %}
    Disponibilidade: {{ products[0].availability }}
{% endif %}
            {% endraw %}
            {% endhighlight %}
            Informação de disponibilidade do produto
        </td>
    </tr>
    <tr>
        <td>ranking</td>
        <td>
            count | rating

            {% highlight html+jinja %}
            {% raw %}

{% set ranking = products[0].ranking %}
{% if ranking %}
    Quantidade de avaliações: {{ ranking.count }} <br>
    Nota do produto: {{ ranking.rating }}
{% endif %}

            {% endraw %}
            {% endhighlight %}
            Ranking (avaliação) do produto
        </td>
    </tr>
    <tr>
        <td>bonus_html</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}

            {{ product.bonus_html }}

            {% endraw %}
            {% endhighlight %}
            <a href="http://wiki.tray.com.br/documentacao/programa-de-fidelizacao/" target="_blank">Programa de fidelização</a>
        </td>
    </tr>
</table>

### Imagens

Informações sobre as imagens dos produtos.

<table>
    <tr>
        <td>small</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% set images = products[0].images %}
<img src="{{ images[0].small }}" alt="">
            {% endraw %}
            {% endhighlight %}
            30x30
        </td>
    </tr>
    <tr>
        <td>medium</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% set images = products[0].images %}
<img src="{{ images[0].medium }}" alt="">
            {% endraw %}
            {% endhighlight %}
            90x90
        </td>
    </tr>
    <tr>
        <td>large</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% set images = products[0].images %}
<img src="{{ images[0].large }}" alt="">
            {% endraw %}
            {% endhighlight %}
            180x180
        </td>
    </tr>
    <tr>
        <td>full</td>
        <td>
            {% highlight html+jinja %}
            {% raw %}
{% set images = products[0].images %}
<img src="{{ images[0].full }}" alt="">
            {% endraw %}
            {% endhighlight %}
            Tamanho original
        </td>
    </tr>
</table>
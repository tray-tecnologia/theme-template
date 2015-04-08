---
layout: page
title: Products
permalink: /functions/products/
scope: todas
---

Para buscar produtos de acordo com as suas necessidades, utilize a seguinte chamada:

{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'filter': 'featured',
    'limit': 8,
    'order': {'quantity_sold': 'desc'},
    'categories': 1,
    'brands': 'Tray'
}) %}

{% endraw %}
{% endhighlight %}

A chamada acima retornará até **8** produtos em **destaque** ordenados pelos **mais vendidos** que estejam cadastrados na categoria **1** e marca **Tray**.

{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'filter': 'available',
    'order': 'rand'
}) %}

{% endraw %}
{% endhighlight %}

A chamada acima retornará os produtos disponíveis aleatoriamente. Veja mais parâmetros disponíveis abaixo:

<table>
    <tbody>
        <tr>
            <td>filter</td>
            <td>
{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'filter': 'available'
}) %}

{% endraw %}
{% endhighlight %}

            featured | new | free_shipping | available | promotion
            </td>
        </tr>
        <tr>
            <td>limit</td>
            <td>
{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'limit': 20
}) %}

{% endraw %}
{% endhighlight %}
            </td>
        </tr>
        <tr>
            <td>order</td>
            <td>
{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'order': 'rand'
}) %}

{% endraw %}
{% endhighlight %}

            id | name | price | price_offer | stock
            </td>
        </tr>
        <tr>
            <td>categories</td>
            <td>
{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'categories': 2
}) %}

{% endraw %}
{% endhighlight %}
            </td>
        </tr>
        <tr>
            <td>brands</td>
            <td>
{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'brands': 'tray'
}) %}

{% endraw %}
{% endhighlight %}
            </td>
        </tr>
    </tbody>
</table>

**Obs:** É possível realizar múltiplas ordenações, conforme exemplo:

{% highlight html+jinja %}
{% raw %}

{% set products = Products({
    'order': {
        'quantity_sold': 'desc',
        'name': 'asc',
        'id': 'desc'
    }
}) %}

{% endraw %}
{% endhighlight %}

As requisições de produtos sempre retornarão um array de dados, veja o padrão de retorno em: 
[Products]({{ site.baseurl }}/variables/products/)
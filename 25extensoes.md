---
layout: page
title: Extensões
type: Extensões
permalink: /extensions/
---

A Tray possui diversas [extensões](http://wiki.tray.com.br/secao/tray-commerce/extensoes/) para tornar a sua loja virtual imbatível. Nem todas as extensões tem necessidade de realizar chamadas de código no layout, porém, algumas precisam.

Veja a tabela de recursos disponíveis e o respectivo código necessário:

<table>
    <tr>
        <td>
            <a href="http://wiki.tray.com.br/documentacao/depoimentos-e-bit/">Depoimentos E-bit</a><br>
            <a href="http://wiki.tray.com.br/documentacao/depoimentos-da-loja-virtual/">Depoimentos da Loja Virtual</a>
        </td>
        <td>
{% highlight html+jinja %}
{% raw %}

{{ _view.element('CustomerReview.reviews') }}

{% endraw %}
{% endhighlight %}
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://wiki.tray.com.br/documentacao/filtro-de-caracteristicas-de-produto/">Filtro de características</a>
        </td>
        <td>
{% highlight html+jinja %}
{% raw %}

{{ _view.element('FeaturesTopMenu.features_top_menu') }}

{% endraw %}
{% endhighlight %}
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://wiki.tray.com.br/documentacao/menu-superior-inteligente-2/">Menu Superior Inteligente</a>
        </td>
        <td>
{% highlight html+jinja %}
{% raw %}

{{ _view.element('SmartTopMenu.smart_top_menu') }}

{% endraw %}
{% endhighlight %}
        </td>
    </tr>
    <tr>
        <td>
            <a href="http://wiki.tray.com.br/documentacao/sistema-de-noticias/">Notícias</a>
        </td>
        <td>
{% highlight html+jinja %}
{% raw %}

{{ _view.element('News.news') }}

{% endraw %}
{% endhighlight %}
        </td>
    </tr>
</table>

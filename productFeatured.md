---
layout: page
title: Product Featured
type: Variáveis/Helpers
permalink: /variables/product-featured/
scope: catalog
---

Produto em destaque da categoria atual. As informações retornadas são as mesmas da <a href="{{ site.baseurl }}/variables/products/">Products</a>.

{% highlight html+jinja %}
{% raw %}

<a href="{{ productFeatured.link }}" title="{{ productFeatured.name }}">
    <img src="{{ productFeatured.images[0].large }}" alt="{{ productFeatured.name }}">
</a>

{% endraw %}
{% endhighlight %}

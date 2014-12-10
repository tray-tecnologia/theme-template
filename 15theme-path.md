---
layout: page
title: Theme Path
type: Variáveis/Helpers
permalink: /variables/theme-path/
scope: todas
---

Caminho absoluto do tema para ser utilizado juntamente com seus assets.

{% highlight html+jinja %}
{% raw %}

<img src="{{ themePath }}img/my-image.png" alt="">
<script src="{{ themePath }}js/my-script.js"></script>
<link href="{{ themePath }}css/my-style.css" rel="stylesheet" type="text/css">

{% endraw %}
{% endhighlight %}
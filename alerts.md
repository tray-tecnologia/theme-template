---
layout: page
title: Avisos
permalink: /alerts/
---

**Importante:** Não nos responsabilizamos pelo uso de variáveis, helpers e funções que não estão documentadas aqui. Elas podem passar por ajustes e mudanças sem aviso prévio.

Seja cuidadoso ao utilizar variáveis ou parâmetros que estão com a nomenclatura em português, provavelmente será alterado para o inglês assim que possível. Avisaremos com antecedência sobre essas mudanças.

Nós fornecemos toda a flexibilidade possível para desenvolver o seu layout, mas seguem alguns códigos que **não** devem ser retirados, para que a loja funcione corretamente:

{% highlight jinja %}
{% raw %}

<html lang="pt-br" data-store="{{ store.id }}" class="page-{{ pages.current }}">

{{ tray.meta }}

{{ tray.styles }}

{{ tray.scripts }}

{{ tray.analytics }}

{{ googleTagManager.header(pages.current, tagManagerData) }}

{{ googleTagManager.top(pages.current, tagManagerData) }}

{{ content_for_layout }}

{% element 'snippets/credits' %}

{{ googleTagManager.bottom(pages.current, tagManagerData) }}

{{ html.script('dist/application.min.js?' ~ utils.assets_version) }}

{% element 'snippets/pageview' %}

{% endraw %}
{% endhighlight %}

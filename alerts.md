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

{#
 # O atributo data-store é essencial para habilitar os módulos JS
 #}
<html lang="pt-br" data-store="{{ store.id }}" class="page-{{ pages.current }}">

{#
 # Impactos de SEO e algumas funcionalidades relacionadas a meta tags
 #}
{{ tray.meta }}

{#
 # Todo o estilo padrão da Tray será removido, e afetará a loja inteira, não remova.
 #}
{{ tray.styles }}

{#
 # Impacta as principais funcionalidades, cálculo de frete e processo de compra.
 #}
{{ tray.scripts }}

{#
 # Não contabilizará estatísticas de visitas do Google Analytics
 #}
{{ tray.analytics }}

{#
 # Google Tag Manager irá parar de funcionar
 #}
{{ googleTagManager.header(pages.current, tagManagerData) }}
{{ googleTagManager.top(pages.current, tagManagerData) }}
{{ googleTagManager.bottom(pages.current, tagManagerData) }}

{#
 # O conteúdo da loja não será exibido
 #}
{{ content_for_layout }}

{#
 # Não será exibido o crédito da Tray no rodapé
 #}
{% element 'snippets/credits' %}

{#
 # Os módulos JS irão parar de funcionar
 #}
{{ html.script('dist/application.min.js?' ~ utils.assets_version) }}

{#
 # Não é possível remover
 #}
{% element 'snippets/pageview' %}

{% endraw %}
{% endhighlight %}

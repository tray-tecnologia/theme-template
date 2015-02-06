---
layout: page
title: Dicas
permalink: /tips/
---

Aqui você encontra algumas dicas para criar temas utilizando o OpenCode.

### Projeto Responsivo

Para deixar o seu OpenCode responsivo, adicione os seguintes arquivos no <code><head></code> do seu tema:

{% highlight html+jinja %}
{% raw %}

<link href="//images.tcdn.com.br/img/arquivos/mobile/css/open-mobile.css?{{ utils.assets_version }}" rel="stylesheet">
<script type="text/javascript" src="//images.tcdn.com.br/img/arquivos/mobile/scripts/open-mobile.js?{{ utils.assets_version }}"></script>

{% endraw %}
{% endhighlight %}

É importante também que você utilize grids no seu HTML.

**Obs:** O projeto não faz parte oficialmente do Tray OpenCode.

### Projeto Identidade Visual

Se deseja um design mais completo para iniciar um tema no OpenCode, poderá utilizar o seguinte CSS:

{% highlight html+jinja %}
{% raw %}

<link href="//images.tcdn.com.br/img/arquivos/identidade_visual/css/sistema.css?{{ utils.assets_version }}" rel="stylesheet">

{% endraw %}
{% endhighlight %}

Faça a chamada após o `tray.styles` para que funcione corretamente.

**Obs:** O projeto não faz parte oficialmente do Tray OpenCode.

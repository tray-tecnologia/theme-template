---
layout: page
title: Dicas
permalink: /tips/
---

Aqui você encontra algumas dicas para criar temas utilizando o OpenCode.

### Projeto de Identidade Visual

Se deseja um design mais completo para iniciar um tema no OpenCode, poderá utilizar o seguinte CSS:

{% highlight html+jinja %}
{% raw %}

<link href="//images.tcdn.com.br/img/arquivos/identidade_visual/css/sistema.css?{{ utils.assets_version }}" rel="stylesheet">

{% endraw %}
{% endhighlight %}

Faça a chamada após o `tray.styles` para que funcione corretamente.

**Obs:** O projeto não faz parte do Tray OpenCode.

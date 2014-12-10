---
layout: page
title: Iniciando um tema
type: Introdução
permalink: /getting-started/
---

Leia atentamente todas as informações contidas na documentação e veja como é simples criar um tema para uma loja Tray.

## Avisos

**Importante:** Não nos responsabilizamos pelo uso de variáveis, helpers e funções que não estão documentadas aqui. Elas podem passar por ajustes e mudanças sem aviso prévio.

Seja cuidadoso ao utilizar variáveis ou parâmetros que estão com a nomenclatura em português, provavelmente será alterado para o inglês assim que possível. Avisaremos com antecedência sobre essas mudanças.

## OpenCode GEM ([Download]({{ site.baseurl }}/assets/gems/opencode_theme-0.0.1b.gem))

A GEM permitirá que você tenha um ambiente de alta produtividade, por isso é a nossa recomendação.

**Pré-requisito:** Ter o Ruby instalado.
Para que as gems funcionem corretamente no MAC, é necessário instalar o XCode: [Instalar XCode via AppStore](https://itunes.apple.com/us/app/xcode/id497799835?ls=1&mt=12)

{% highlight bash %}
$ gem install opencode_theme-0.0.1b.gem
$ opencode -h
{% endhighlight %}

Serão exibidas todas as opções da GEM:

{% highlight bash %}
opencode bootstrap API_KEY PASSWORD THEME_NAME THEME_BASE
opencode configure API_KEY PASSWORD THEME_ID
opencode download FILE
opencode help [COMMAND]
opencode open
opencode publish
opencode remove FILE
opencode systeminfo
opencode upload FILE
opencode watch
{% endhighlight %}

Para criar seu primeiro tema, execute os seguintes comandos:

{% highlight bash %}
$ mkdir primeiro-tema
$ cd primeiro-tema
$ opencode bootstrap API_KEY PASSWORD 'PrimeiroTema'
{% endhighlight %}

Após executar o bootstrap, serão baixados todos os arquivos pra você começar.
Execute: 
{% highlight bash %}
$ opencode watch
{% endhighlight %}

Com o watch "ligado", sempre que salvar o arquivo será feito upload automaticamente.

## Estrutura do tema
Para manter o desenvolvimento dos temas bem organizado, disponibilizamos uma estrutura enxuta e simples para seus arquivos. Veja a estrutura inicial:

{% highlight html %}
elements/ -> trechos de código e componentes reutilizáveis
layouts/  -> estrutura do seu tema, código que será carregado em todas as páginas
pages/    -> conteúdo de cada página da sua loja
css/      -> você pode inserir suas folhas de estilo e webfonts
js/       -> você pode inserir seus plugins js
img/      -> pasta de imagens
configs/  -> opções da sua loja virtual (ainda em desenvolvimento)
{% endhighlight %}

---
layout: page
title: Páginas Disponíveis
permalink: /theme-pages/
---

As seguintes páginas estão disponíveis para edição:

{% highlight html %}
pages/
    catalog.html -> página de categoria
       home.html -> página inicial
        map.html -> mapa do site
     search.html -> página de busca
{% endhighlight %}

É só criar os arquivos respeitando a estrutura e começar a editar o HTML da página.

Se você não deseja modificar alguma página, é só excluir o arquivo:
{% highlight bash %}
$ opencode remove pages/map.html
{% endhighlight %}

Dessa forma será carregada uma página padrão.
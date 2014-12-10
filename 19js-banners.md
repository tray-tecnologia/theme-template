---
layout: page
title: Banners
type: Módulos JavaScript
permalink: /modules/banners/
---

Para mais informações sobre o comportamento dos banners, visite a wiki de [Banners](http://wiki.tray.com.br/documentacao/cadastrar-banners/).

## Pop up

O banner pop up abre-se em uma nova janela do navegador, no momento em que a loja virtual é aberta.

<table>
    <tbody>
        <tr>
            <td>data-banner</td>
            <td>Posição do banner (ex: popup, gallery)</td>
        </tr>
        <tr>
            <td>data-width</td>
            <td>Largura do banner</td>
        </tr>
        <tr>
            <td>data-height</td>
            <td>Altura do banner</td>
        </tr>
        <tr>
            <td>data-top</td>
            <td>Distância vertical entre o topo até o início do banner</td>
        </tr>
        <tr>
            <td>data-left</td>
            <td>Distância horizontal da esquerda até o início do banner</td>
        </tr>
        <tr>
            <td>data-url</td>
            <td>URL do banner que será carregada na Pop-Up</td>
        </tr>
    </tbody>
</table>

{% highlight html+jinja %}
{% raw %}

<div data-banner="popup"
    data-width="200"
    data-height="200"
    data-top="400"
    data-left="400">
</div>

{% endraw %}
{% endhighlight %}

## Gallery

Para mais informações sobre o comportamento, visite a wiki do [Banner Galeria](http://wiki.tray.com.br/documentacao/cadastrar-banners/#cadastrar-galeria).

<table>
    <tbody>
        <tr>
            <td>data-banner</td>
            <td>Posição do banner (ex: popup, gallery)</td>
        </tr>
        <tr>
            <td>data-id</td>
            <td>Identificador único do banner</td>
        </tr>
    </tbody>
</table>

{% highlight html+jinja %}
{% raw %}

<div data-banner="gallery" data-id="1"></div>

{% endraw %}

{% endhighlight %}

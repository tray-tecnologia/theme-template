---
layout: page
title: Banners
permalink: /variables/banners/
scope: todas
---

Para imprimir um banner, você poderá utilizar o helper de banner, utilizando a seguinte chamada:

{% highlight jinja %}
{% raw %}

{{ banner.home }}
{{ banner.footer }}

{% endraw %}
{% endhighlight %}

<code>home</code> e <code>footer</code> são as posições em que o banner foi cadastrado. Veja a lista de posições disponíveis: <code>home</code>, <code>footer</code>, <code>bottom</code>, <code>side</code>, <code>title</code>, <code>floating</code>, <code>popup</code>, <code>extra1</code>, <code>extra2</code>, <code>extra3</code>, <code>extra4</code>

Se você deseja criar o banner do seu jeito, poderá utilizar as seguinte informações

<table>
    <tbody>
        <tr>
            <td>id</td>
            <td>
                {% highlight jinja %}
                {% raw %}

                {{ banners.home.id }}

                {% endraw %}
                {% endhighlight %}
                <p>Identificador único do banner</p>
            </td>
        </tr>
        <tr>
            <td>type</td>
            <td>
                {% highlight jinja %}
                {% raw %}

                {{ banners.home.type }}

                {% endraw %}
                {% endhighlight %}
                <p>Tipo do banner, valores possíveis: "javascript", "image", "flash", "gallery"</p>
            </td>
        </tr>
        <tr>
            <td>description</td>
            <td>
                {% highlight jinja %}
                {% raw %}

                {{ banners.home.description }}

                {% endraw %}
                {% endhighlight %}
                <p>Descrição do banner</p>
            </td>
        </tr>
        <tr>
            <td>src</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if banners.home %}
    <img src="{{ banners.home.src }}" title="{{ banners.home.description }}">
{% endif %}

                {% endraw %}
                {% endhighlight %}
                <p>URL do banner</p>
            </td>
        </tr>
        <tr>
            <td>link</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

<a href="{{ banners.home.link }}">
    <img src="{{ banners.home.src }}" alt="{{ banners.home.alt_text }}">
</a>

                {% endraw %}
                {% endhighlight %}
                <p>Link do banner</p>
            </td>
        </tr>
        <tr>
            <td>width</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <img src="{{ banners.home.src }}" width="{{ banners.home.width }}">

                {% endraw %}
                {% endhighlight %}
                <p>Largura da imagem ou do objeto flash</p>
            </td>
        </tr>
        <tr>
            <td>height</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <img src="{{ banners.home.src }}" width="{{ banners.home.height }}">

                {% endraw %}
                {% endhighlight %}
                <p>Altura da imagem ou do objeto flash</p>
            </td>
        </tr>
        <tr>
            <td>alt_text</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                <img src="{{ banners.home.src }}" alt="{{ banners.home.alt_text }}">

                {% endraw %}
                {% endhighlight %}
                <p>Texto alternativo para a imagem do banner</p>
            </td>
        </tr>
        <tr>
            <td>target</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

<a href="{{ banners.home.link }}" target="{{ banners.home.target }}">
    <img src="{{ banners.home.src }}" alt="{{ banners.home.alt_text }}">
</a>

                {% endraw %}
                {% endhighlight %}
                <p>Se o link vai abrir em uma nova janela ou na mesma</p>
            </td>
        </tr>
        <tr>
            <td>banner_alt</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

{% if banners.home.banner_alt %}
    {% set bannerAlt = banners.home.banner_alt %}
    <a href="{{ bannerAlt.link }}" target="{{ bannerAlt.target }}">
        <img src="{{ bannerAlt.src }}" alt="{{ bannerAlt.alt_text }}">
    </a>
{% endif %}

                {% endraw %}
                {% endhighlight %}
                <p>Banner alternativo caso não tenha suporte ao flash (apenas quando o tipo for "flash"), possui as chaves "src", "link", "target"</p>
            </td>
        </tr>
        <tr>
            <td>margin_top</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ banners.home.margin_top }}

                {% endraw %}
                {% endhighlight %}
                <p>Especifica a posição do banner referente ao topo da página (apenas banner "floating")</p>
            </td>
        </tr>
        <tr>
            <td>margin_left</td>
            <td>
                {% highlight html+jinja %}
                {% raw %}

                {{ banners.home.margin_left }}

                {% endraw %}
                {% endhighlight %}
                <p>Especifica a posição do banner referente ao lado esquerdo da página</p>
            </td>
        </tr>
    </tbody>
</table>

<p>Lembrando que o padrão de chamada é sempre: <code>banners.{position}.{key}</code>.</p>

### BannerJS
<p>O banner JavaScript possui algumas informações que os outros banners não tem, segue a lista:</p>
<table>
  <tbody>
    <tr>
      <td>interval</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.interval }}

        {% endraw %}
        {% endhighlight %}
        <p>Intervalo da transição entre cada slide<br>3 a 10 (segundos)</p>
      </td>
    </tr>
    <tr>
      <td>velocity</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.velocity }}

        {% endraw %}
        {% endhighlight %}
        <p>Velocidade da animação<br>0.5 | 1.0 | 1.5 | 2.0</p>
      </td>
    </tr>
    <tr>
      <td>animation</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.animation }}

        {% endraw %}
        {% endhighlight %}
        <p>Tipo da animação<br>blind | block | cube | cubeSpread | fade | fadeFour | glassCube | horizontal | tube</p>
      </td>
    </tr>
    <tr>
      <td>stop_over</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.stop_over }}

        {% endraw %}
        {% endhighlight %}
        <p>Pausar a troca de slides quando o mouse estiver sobre o banner<br>0 | 1</p>
      </td>
    </tr>
    <tr>
      <td>navigation</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.navigation }}

        {% endraw %}
        {% endhighlight %}
        <p>Tipos de navegação<br>0 | 1 | 2</p>
      </td>
    </tr>
    <tr>
      <td>progressbar</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

        {{ banners.extra1.progressbar }}

        {% endraw %}
        {% endhighlight %}
        <p>Exibir barra de progresso<br>0 | 1</p>
      </td>
    </tr>
    <tr>
      <td>slides</td>
      <td>
        {% highlight html+jinja %}
        {% raw %}

{% for slide in banners.extra1.slides %}
    <a href="{{ slide.link }}" target="{{ slide.target }}">
        <img src="{{ slide.image }}" alt="{{ slide.label }}">
    </a>
{% endfor %}

        {% endraw %}
        {% endhighlight %}
        <p>Dados das imagens cadastradas<br>image | link | label | target | width | height</p>
      </td>
    </tr>
  </tbody>
</table>
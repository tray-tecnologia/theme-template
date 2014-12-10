---
layout: page
title: Tags
type: Variáveis/Helpers
permalink: /variables/tags/
---

Lista de palavras mais buscadas na loja.

<table>
	<tbody>
		<tr>
			<td>
				font_size
			</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ tags[0].font_size }}
                {% endraw %}
                {% endhighlight %}
                Tamanho da fonte com base na quantidade de vezes que foi buscada
			</td>
		</tr>
		<tr>
			<td>url</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ tags[0].url }}
                {% endraw %}
                {% endhighlight %}
                URL para a página de busca
			</td>
		</tr>
		<tr>
			<td>word</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ tags[0].word }}
                {% endraw %}
                {% endhighlight %}
                Palavra buscada
			</td>
		</tr>
	</tbody>
</table>


{% highlight html+jinja %}
{% raw %}

{% for tag in tags %}
    <a href="{{ tag.url }}" style="font-size: {{ tag.font_size }}%">{{ tag.word }}</a>
{% endfor %}

{% endraw %}
{% endhighlight %}
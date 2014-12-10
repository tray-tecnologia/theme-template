---
layout: page
title: Store
type: Variáveis/Helpers
permalink: /variables/store/
---

Informações básicas da loja.

<table>
	<tbody>
		<tr>
			<td>id</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ store.id }}
                {% endraw %}
                {% endhighlight %}
                Identificador único da loja
			</td>
		</tr>
		<tr>
			<td>name</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ store.name }}
                {% endraw %}
                {% endhighlight %}
                Nome da loja
			</td>
		</tr>
		<tr>
			<td>url</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ store.url }}
                {% endraw %}
                {% endhighlight %}
                URL da loja
			</td>
		</tr>
		<tr>
			<td>chat</td>
			<td>
				{% highlight html+jinja %}
                {% raw %}
                {{ store.chat }}
                {% endraw %}
                {% endhighlight %}
                Retorna o conteúdo do campo "Atendimento Online" cadastrado no Painel Administrativo
			</td>
		</tr>
	</tbody>
</table>

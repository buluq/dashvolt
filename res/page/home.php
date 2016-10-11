<div class="uk-grid">
	<h1 class="uk-align-center">{{ @site.name }}</h1>
</div>

<ul class="uk-grid uk-grid-width-1-3 uk-container uk-container-center">
	<repeat group="{{ @site.services.forum }}" value="{{ @data }}">
		<li>
			<div class="uk-panel uk-panel-space uk-panel-hover">
				<h2 class="uk-panel-title"><span class="{{ @data.2 }}"></span> {{ strtoupper(@data.1) }}</h2>

				<p>{{ @data.3 | raw }}</p>

				<a class="uk-button uk-button-primary uk-width-1-1" href="/forum/{{ @data.0 }}"><span class="uk-icon-chevron-circle-right"></span> Masuk forum {{ @data.1 }}</a>
			</div>
		</li>
	</repeat>

	<repeat group="{{ @site.services.request }}" value="{{ @data }}">
		<li>
			<div class="uk-panel uk-panel-space uk-panel-hover">
				<h2 class="uk-panel-title"><span class="{{ @data.2 }}"></span> {{ strtoupper(@data.1) }}</h2>

				<p>{{ @data.3 | raw }}</p>

				<a class="uk-button uk-button-primary uk-width-1-1" href="/file/{{ @data.0 }}"><span class="uk-icon-chevron-circle-right"></span> Minta request {{ @data.1 }}</a>
			</div>
		</li>
	</repeat>

	<repeat group="{{ @site.services.file }}" value="{{ @data }}">
		<li>
			<div class="uk-panel uk-panel-space uk-panel-hover">
				<h2 class="uk-panel-title"><span class="{{ @data.2 }}"></span> {{ strtoupper(@data.1) }}</h2>

				<p>{{ @data.3 | raw }}</p>

				<a class="uk-button uk-button-primary uk-width-1-1" href="/file/{{ @data.0 }}"><span class="uk-icon-chevron-circle-right"></span> Akses file {{ @data.1 }}</a>
			</div>
		</li>
	</repeat>

</ul>

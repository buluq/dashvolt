<nav class="uk-navbar uk-navbar-attached">
	<div class="uk-navbar-flip">
		<a class="uk-navbar-brand" href="/">{{ @site.name }}</a>
	</div>

	<ul class="uk-navbar-nav">
		<li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
			<a href=""><span class="uk-icon-group"></span> Forum</a>

			<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
				<ul class="uk-nav uk-nav-navbar">
					<repeat group="{{ @site.services.forum }}" value="{{ @data }}">
						<li><a href="/forum/{{ @data.0 }}"><span class="{{ @data.2 }}"></span> {{ @data.1 }}</a></li>
					</repeat>
				</ul>
			</div>
		</li>

		<li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
			<a href=""><span class="uk-icon-plus-square"></span> Request</a>

			<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
				<ul class="uk-nav uk-nav-navbar">
					<repeat group="{{ @site.services.request }}" value="{{ @data }}">
						<li><a href="/file/{{ @data.0 }}"><span class="{{ @data.2 }}"></span> {{ @data.1 }}</a></li>
					</repeat>
				</ul>
			</div>
		</li>

		<li class="uk-parent" data-uk-dropdown aria-haspopup="true" aria-expanded="false">
			<a href=""><span class="uk-icon-archive"></span> File</a>

			<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
				<ul class="uk-nav uk-nav-navbar">
					<repeat group="{{ @site.services.file }}" value="{{ @data }}">
						<li><a href="/file/{{ @data.0 }}"><span class="{{ @data.2 }}"></span> {{ @data.1 }}</a></li>
					</repeat>
				</ul>
			</div>
		</li>
	</ul>
</nav>

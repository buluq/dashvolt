<!doctype html>
<html>
	<include href="document-header.php" />

	<body>
		<header>
			<include href="page-navbar.php" />
		</header>

		<main class="uk-margin-top">
			<include href="{{ @page . '.php' }}" />
		</main>

		<div class="uk-container uk-container-center">
			<div class="uk-alert uk-alert-warning uk-animation-slide-bottom" data-uk-alert>
				<a href="" class="uk-alert-close uk-close"></a>

				<p>Selamat menikmati tampilan baru {{ @site.name }}.</p>
			</div>
		</div>

		<include href="page-footer.php" />

		<include href="document-footer.php" />

		<check if="{{ @DEVMODE == 1 }}">
			<include href="development.php" />
		</check>
	</body>
</html>

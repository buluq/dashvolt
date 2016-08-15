<!doctype html>
<html>
	<include href="document-header.php" />

	<body>
		<header>
			<include href="page-navbar.php" />
		</header>

		<main>
			<include href="{{ @page . '.php' }}" />
		</main>

		<include href="page-footer.php" />

		<include href="document-footer.php" />

		<check if="{{ @DEVMODE == 1 }}">
			<include href="development.php" />
		</check>
	</body>
</html>

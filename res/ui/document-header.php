<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="robots" content="noindex">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>{{ @site.name }}</title>

	<repeat group="{{ @site.assets.css }}" value="{{ @file }}">
		<link rel="stylesheet" href="{{ @file }}">
	</repeat>
</head>

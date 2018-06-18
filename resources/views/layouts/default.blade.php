<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Hôtel</title>
	@include('partials.head')
</head>
<body>
	@include('partials.header') <!--template include the header all pages  -->

	@yield('content')

	@include('partials.footer') <!--template include the footer all pages -->

</body>
</html>
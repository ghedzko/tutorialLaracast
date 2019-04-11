<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Projects</h1>
		<ul>
			@foreach($centros as $centro)
			<li>
				<a href="/centros/{{ $centro->id }}">
				
					{{ $centro -> nombre }}
				</a>
			</li>
			@endforeach
		</ul>
</body>
</html>
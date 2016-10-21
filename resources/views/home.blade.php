<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h1>Home</h1>
	<header>

	<h1>{{request()->is('/') ? 'Estoy en el Home' : 'no Estoy en el Home'}}</h1>
	<!-- este metodo nos da la url del sitio con el metodo request
	<h1>{{ request()->url()}} </h1>
	 -->
		<nav>
			<a href="{{route('home')}}">inicio</a>
			<a href="{{route('saludos','andres')}}">saludo</a>
			<a href="{{route('contactos')}}">Contacto</a>
			<p>hola andres {{request()->url()}}</p>
		</nav>
	</header>


 version 1 donde  trabajo con mi branch version1 


</body>
</html>
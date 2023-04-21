<h1>Portal lingua</h1>
<p>Hola {{$user['name']}} aqui et mostrem les persones que et poden ajudar:</p>
<a href="{{ route('veurePersones') }}">Veure persones que em poden ajudar</a>
<br>
<a href="{{ route('eliminarUsuari') }}">Donar-me de baixa</a>
<br>
<a href="{{ route('destroySession') }}">Sortir</a>

<h1>Portal lingua</h1>
<p>Hola {{$user['name']}} aqui et mostrem les persones que et poden ajudar:</p>
<table>
    <tr>
        <td>Nom</td>
        <td>Email</td>
        <td>Idioma natiu</td>
        <td>Idioma que vol aprendre</td>
    </tr>
    <tr>
        @foreach($usersCompatibles as $item)
            <th>{{$item->name}}</th>
            <th>{{$item->email}}</th>
            <th>{{$item->natiu}}</th>
            <th>{{$item->aaprendre}}</th>
        @endforeach
    </tr>
</table>
<a href="{{ route('menu') }}">Tornar al menu</a>

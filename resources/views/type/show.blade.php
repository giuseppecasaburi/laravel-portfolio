<h1>IO SONO SHOW</h1>
<h3>{{$type->name}}</h3>
<p>Colore in formato HEX: {{$type->color}}</p>
<a href="{{route("type.edit", $type->id)}}">Modifica</a>
<form action="{{route("type.destroy", $type->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit">Elimina tag</button>
</form>
<a href="{{route("type.index")}}">Home</a>
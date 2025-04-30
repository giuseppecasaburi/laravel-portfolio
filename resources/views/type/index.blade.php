<h1>Ciao sono index di type</h1>
<a href="{{route("type.create")}}">Aggiungi un nuovo tipo di tecnologia di sviluppo!</a>
@foreach ($types as $type)
    <p>{{$type->name}}</p>
    <a href="{{route("type.show", $type->id)}}">Visualizza!</a>
    <a href="{{route("type.edit", $type->id)}}">Modifica!</a>
@endforeach
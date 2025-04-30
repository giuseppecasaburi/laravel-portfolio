<h1>IO SONO EDIT</h1>
<h1>Modifica tecnologia</h1>
<form action="{{route("type.update", $type->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nome Tecnologi</label>
        <input type="text" name="name" id="" value="{{ $type->name }}" required>
    </div>

    <div>
        <label for="color">Colore Tag</label>
        <input type="text" name="color" id="" value="{{ $type->color }}">
    </div>

    <button type="submit">Modifica tecnologia</button>
</form>
<a href="{{route("projects.index")}}">Torna alla home</a>
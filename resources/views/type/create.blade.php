<h1>IO SONO CREATE</h1>
<h1>Crea un nuovo post</h1>
<form action="{{ route('type.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome Tecnologia</label>
        <input type="text" name="name" id="" required>
    </div>

    <div>
        <label for="color">Colore Tag</label>
        <input type="text" name="color" id="">
    </div>

    <button type="submit">Aggiungi tecnologia</button>
</form>
<button><a href="{{ route('type.index') }}">Torna alla home</a></button>

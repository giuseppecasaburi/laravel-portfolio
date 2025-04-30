<h1>Crea un nuovo post</h1>
<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nome Progetto</label>
        <input type="text" name="name" id="" required>
    </div>

    <div>
        <label for="client">Cliente destinatario</label>
        <input type="text" name="client" id="">
    </div>

    <div>
        <label for="project_start">Data di inizio progetto</label>
        <input type="date" name="project_start" id="">
    </div>

    <div>
        <label for="project_end">Data di fine progetto</label>
        <input type="date" name="project_end" id="">
    </div>

    <div>
        <label for="description">Descrizione progetto</label>
        <textarea name="description" id="" cols="30" rows="10" required></textarea>
    </div>


    <div>
        Tecnologie utilizzate:
        @foreach ($types as $type)
        <input value="{{ $type->id }}" type="checkbox" name="tags[]" id="tag-{{ $type->id }}">
        <label for="tag-{{ $type->id }}">{{ $type->name }}</label>
        @endforeach
    </div>

    <button type="submit">Aggiungi post</button>
</form>
<button><a href="{{ route('projects.index') }}">Torna alla home</a></button>

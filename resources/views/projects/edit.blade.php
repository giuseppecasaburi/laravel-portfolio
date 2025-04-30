<h1>Modifica un post</h1>
<form action="{{ route("projects.update", $project->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nome Progetto</label>
        <input type="text" name="name" id="" value="{{ $project->name }}" required>
    </div>

    <div>
        <label for="client">Cliente destinatario</label>
        <input type="text" name="client" id="" value="{{ $project->client }}">
    </div>

    <div>
        <label for="project_start">Data di inizio progetto</label>
        {{-- Carbon libreria che crea un oggetto a partire dalla variabile
            ->format("Y-m-d") converte l'oggetto in striga formattata --}}
        <input type="date" name="project_start" id="" value="{{ \Carbon\Carbon::parse($project->project_start)->format('Y-m-d') }}">
    </div>

    <div>
        <label for="project_end">Data di fine progetto</label>
        <input type="date" name="project_end" id="" value="{{ \Carbon\Carbon::parse($project->project_end)->format('Y-m-d') }}">
    </div>

    <div>
        <label for="description">Descrizione progetto</label>
        <textarea name="description" id="" cols="30" rows="10" required>{{$project->description}}</textarea>
    </div>

    <div>
        Tecnologie utilizzate:
        @foreach ($types as $type)
        <input value="{{ $type->id }}" type="checkbox" name="tags[]" id="tag-{{ $type->id }}" {{$project->types->contains($type->id) ? "checked" : ""}}>
        <label for="tag-{{ $type->id }}">{{ $type->name }}</label>
        @endforeach
    </div>

    <button type="submit">Modifica post</button>
</form>
<a href="{{route("projects.index")}}">Torna alla home</a>
<h3>{{ $project->name }}</h3>
    <p>{{ $project->description }}</p>
    <a href="{{route("projects.index")}}">Torna alla home</a>
    <form action="{{ route("projects.destroy", $project->id ) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Elimina progetto</button>
    </form>
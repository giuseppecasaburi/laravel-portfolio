<h1>Io sono index di projects</h1>
<button><a href="{{ route("projects.create") }}">Crea nuovo progetto</a></button>
@foreach ($projects as $project)
    <h3>{{ $project->name }}</h3>
    <p>{{ $project->description }}</p>
    <div>
        Tecnologie utilizzate:
        @foreach ($project->types as $type)
            <span>{{$type->name}}</span>
        @endforeach
    </div>
    <a href="{{ route("projects.show", $project->id)}}">Visualizza progetto!</a>
    <button><a href="{{ route("projects.edit", $project->id) }}">Modifica progetto</a></button>
@endforeach
<h1>Io sono index di projects</h1>
@foreach ($projects as $project)
    <h3>{{ $project->name }}</h3>
    <p>{{ $project->description }}</p>
    <a href="{{ route("projects.show", $project->id)}}">Visualizza progetto!</a>
@endforeach
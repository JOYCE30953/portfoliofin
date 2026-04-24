<!DOCTYPE html>
<html>
<head>
<title>Admin</title>

<style>
body{font-family:Arial;margin:0;background:#f5f5f5;}
header{background:#111;color:white;padding:20px;display:flex;justify-content:space-between;}
section{padding:40px;}

form{display:flex;flex-direction:column;max-width:400px;gap:10px;}

input{
padding:10px;
border:1px solid #ccc;
border-radius:5px;
}

button{
background:#007bff;
color:white;
padding:10px;
border:none;
cursor:pointer;
border-radius:5px;
}

.card{
background:white;
padding:15px;
margin:10px 0;
border-radius:10px;
}
</style>

</head>
<body>

<header>
<h2>ADMIN PANEL</h2>
<nav>
<a href="/admin" style="color:white;">Projets</a>
<a href="/admin/messages" style="color:white;">Messages</a>
<a href="/" style="color:white;">Site</a>
</nav>
</header>

<section>

<h2>Ajouter / Modifier projet</h2>

@if(isset($project))
<form method="POST" action="/admin/update/{{ $project->id }}">
@else
<form method="POST" action="/admin/project">
@endif

@csrf
<input name="titre" placeholder="Titre" value="{{ $project->titre ?? '' }}">
<input name="description" placeholder="Description" value="{{ $project->description ?? '' }}">
<button>
@if(isset($project)) Modifier @else Ajouter @endif
</button>
</form>

<hr>

<h2>Liste des projets</h2>

@foreach($projects as $p)
<div class="card">
<h3>{{ $p->titre }}</h3>
<p>{{ $p->description }}</p>

<a href="/admin/edit/{{ $p->id }}">Modifier</a> |
<a href="/admin/delete/{{ $p->id }}">Supprimer</a>
</div>
@endforeach

</section>
<a href="{{ url('/') }}" class="btn btn-primary">
    ⬅ Retour à l’accueil
</a>
<div style="margin-bottom: 20px;">
    <a href="{{ route('home') }}" class="btn btn-primary">
        ⬅ Retour à l’accueil
    </a>
</div>
<form method="POST" action="/admin/project">
@csrf

<input type="text" name="titre" placeholder="Titre">
<textarea name="description" placeholder="Description"></textarea>

<button type="submit">Ajouter</button>
</form>
</body>
</html>
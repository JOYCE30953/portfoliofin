<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Mes Projets</title>

<style>
body{
font-family:Arial;
background:#f5f5f5;
margin:0;
padding:0;
}

header{
background:#111;
color:white;
padding:20px;
text-align:center;
}

.container{
display:flex;
gap:20px;
flex-wrap:wrap;
justify-content:center;
padding:40px;
}

.card{
width:300px;
background:white;
border-radius:10px;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
padding:15px;
}
</style>
</head>

<body>

<header>
<h1>Mes Projets</h1>
<a href="{{ url('/') }}" style="color:white;">⬅ Retour accueil</a>
</header>

<div class="container">

@foreach($projects as $project)
    <div class="card">
        <h3>{{ $project->titre }}</h3>
        <p>{{ $project->description }}</p>
    </div>
@endforeach

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Contact | Man Frais</title>

<style>
body{
font-family:Arial;
margin:0;
background:#f5f5f5;
color:#333;
}

header{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px;
background:#111;
color:white;
}

nav a{
color:white;
margin:15px;
text-decoration:none;
}

.contact{
padding:60px;
text-align:center;
}

form{
display:flex;
flex-direction:column;
max-width:400px;
margin:auto;
gap:15px;
}

input,textarea{
padding:10px;
border-radius:5px;
border:1px solid #ccc;
}

button{
background:#007bff;
color:white;
padding:10px;
border:none;
border-radius:5px;
cursor:pointer;
}
</style>

</head>

<body>

<header>
<div>Man Frais</div>

<nav>
<a href="/">Accueil</a>
<a href="/contact">Contact</a>
<a href="/admin">Admin</a>
</nav>
</header>

<section class="contact">
<h2>Contactez-moi</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/contact">
@csrf
<input name="nom" placeholder="Votre nom">
<input name="email" placeholder="Votre email">
<textarea name="message" placeholder="Votre message"></textarea>
<button>Envoyer</button>
</form>

</section>

</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio | Man Frais</title>

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

.home{
height:90vh;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
}

.home span{
color:#007bff;
}

.btn{
background:#007bff;
color:white;
padding:12px 20px;
border-radius:5px;
text-decoration:none;
}

.about{
padding:60px;
}

.about-container{
display:flex;
gap:40px;
align-items:center;
justify-content:center;
}

.about img{
width:150px;
}

.skills{
padding:60px;
}

.skill{
max-width:600px;
margin:auto;
margin-bottom:20px;
}

.bar{
background:#ddd;
height:10px;
border-radius:5px;
}

.bar span{
display:block;
height:10px;
background:#007bff;
border-radius:5px;
}

.projects{
padding:60px;
}

.project-container{
display:flex;
gap:30px;
justify-content:center;
flex-wrap:wrap;
}

.card{
width:300px;
background:white;
border-radius:10px;
box-shadow:0 5px 10px rgba(0,0,0,0.1);
}

.card img{
width:100%;
border-radius:10px 10px 0 0;
}

.whatsapp{
position:fixed;
bottom:20px;
right:20px;
background:#25D366;
color:white;
font-size:30px;
padding:15px;
border-radius:50%;
text-decoration:none;
}

footer{
text-align:center;
background:#111;
color:white;
padding:20px;
}

/* DARK MODE */
.dark{
background:#111;
color:white;
}

.dark header{
background:black;
}
</style>

</head>

<body>

<header>
<div class="logo">Man Frais</div>

<nav>
<a href="#home">Accueil</a>
<a href="#about">À propos</a>
<a href="#skills">Compétences</a>
<a href="/projects">Projets</a>
<a href="/contact">Contact</a>
<a href="/admin">Admin</a>
</nav>

<button id="darkmode">🌙</button>
</header>

<!-- HOME -->
<section id="home" class="home">
<h1>Bonjour, je suis <span>Man Frais</span></h1>
<p>Développeur Web passionné par la création d'applications modernes.</p>
<a href="/projects" class="btn">Voir mes projets</a>
</section>

<!-- ABOUT -->
<section id="about" class="about">
<h2>À propos de moi</h2>

<div class="about-container">
<img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
<p>
Je suis développeur web passionné par la programmation.
Je crée des sites web modernes et des solutions innovantes.
</p>
</div>
</section>

<!-- SKILLS -->
<section id="skills" class="skills">
<h2>Mes Compétences</h2>

<div class="skill">
<p>HTML</p>
<div class="bar"><span style="width:90%"></span></div>
</div>

<div class="skill">
<p>CSS</p>
<div class="bar"><span style="width:85%"></span></div>
</div>

<div class="skill">
<p>JavaScript</p>
<div class="bar"><span style="width:75%"></span></div>
</div>

<div class="skill">
<p>Python</p>
<div class="bar"><span style="width:70%"></span></div>
</div>

</section>

<!-- PROJECTS -->
<section id="projects" class="projects">
<h2>Mes Projets</h2>

<div class="project-container">

<div class="card">
<img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c">
<h3>Application école</h3>
<p>Gestion des étudiants et enseignants.</p>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6">
<h3>Portfolio</h3>
<p>Présentation de mes compétences.</p>
</div>

</div>

</section>

<!-- WHATSAPP -->
<a href="https://wa.me/243999666795" target="_blank" class="whatsapp">
💬
</a>

<footer>
<p>© 2026 Portfolio - Man Frais</p>
</footer>

<script>
// DARK MODE
const btn = document.getElementById("darkmode");

btn.addEventListener("click", () => {
document.body.classList.toggle("dark");
});
</script>

</body>
</html>
const btn = document.getElementById("darkmode");

btn.onclick = () => {

document.body.classList.toggle("dark");
document.querySelector("form").addEventListener("submit", function(e){

e.preventDefault();

alert("✅ Merci pour votre message. Nous vous répondrons bientôt.");

});
}
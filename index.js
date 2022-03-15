const pseudo = document.querySelector(".pseudo");
const rectangle = document.querySelector(".formpseudo");
const envoyer = document.querySelector("#envoyer");

window.addEventListener("load", () => {
  rectangle.classList.add("test");
});

envoyer.addEventListener("click", () => {
  pseudo.classList.add("enlever");
});

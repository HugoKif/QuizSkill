const commencer = document.querySelector("#commencer");
const debut = document.querySelector(".debut");
const compteur = document.querySelector("#countdown");
const cercle = document.querySelector("#cercle");
const question1 = document.querySelector(".question1html");

commencer.addEventListener("click", () => {
  debut.classList.add("debutbye");
  cercle.classList.add("countdowncercle");
  question1.classList.add("appartionquestion");
  var countdownNumberEl = document.getElementById("countdown-number");
  var countdown = 21;

  countdownNumberEl.textContent = countdown;

  setInterval(function () {
    countdown = --countdown <= -1 ? 21 : countdown;

    if (countdown === 0) {
      compteur.classList.add("countdownend");
    }
    countdownNumberEl.textContent = countdown;
  }, 1000);
});

// COMPTEUR----------------------------------------------------------------------

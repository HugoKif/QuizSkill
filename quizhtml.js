const commencer = document.querySelector("#commencer");
const debut = document.querySelector(".debut");
const compteur = document.querySelectorAll(".countdown");
const cercle = document.querySelectorAll(".cercle");
const question1 = document.querySelector(".qhtml1");
const question2 = document.querySelector(".qhtml2");
const question3 = document.querySelector(".qhtml3");
const question4 = document.querySelector(".qhtml4");
const question5 = document.querySelector(".qhtml5");
const question6 = document.querySelector(".qhtml6");
const question7 = document.querySelector(".qhtml7");
const question8 = document.querySelector(".qhtml8");
const question9 = document.querySelector(".qhtml9");
const question10 = document.querySelector(".qhtml10");
const resultat = document.querySelector(".ensembleresult");
const containerreponse = document.querySelectorAll(".containerreponse");
const btn1 = document.querySelectorAll(".r1");
const btn2 = document.querySelectorAll(".r2");
const btn3 = document.querySelectorAll(".r3");
const btn4 = document.querySelectorAll(".r4");

const tabl = [
  question1,
  question2,
  question3,
  question4,
  question5,
  question6,
  question7,
  question8,
  question9,
  question10,
];
let i = 0;
let j = 1;
let countdown = 21;
let countdownNumberEl = document.querySelectorAll(".countdown-number");
let variableRecuperee = document.querySelectorAll(".Reponse");
let couleurscore = document.querySelectorAll(".resultat");
let bonneoumauvaise = document.querySelectorAll(".bonneoumauvaise");
let score = 0;
const titrescore = document.querySelector(".score");

commencer.addEventListener("click", () => {
  debut.classList.add("debutbye");
  setTimeout(function () {
    question1.style.position = "relative";
    question1.style.right = "0";
    question1.style.left = "0";
  }, 500);
  setTimeout(function () {
    debut.style.display = "none";
  }, 700);
  cercle[i].classList.add("countdowncercle");

  countdownNumberEl[i].textContent = countdown;

  setInterval(function () {
    if (i == 1) {
      return;
    }
    countdown = --countdown <= -1 ? 21 : countdown;
    countdownNumberEl[i].textContent = countdown;
  }, 1000);
});

document.addEventListener("click", (event) => {
  if (
    event.target == btn1[0] ||
    event.target == btn1[1] ||
    event.target == btn1[2] ||
    event.target == btn1[3] ||
    event.target == btn1[4] ||
    event.target == btn1[5] ||
    event.target == btn1[6] ||
    event.target == btn1[7] ||
    event.target == btn1[8] ||
    event.target == btn1[9] ||
    event.target == btn2[0] ||
    event.target == btn2[1] ||
    event.target == btn2[2] ||
    event.target == btn2[3] ||
    event.target == btn2[4] ||
    event.target == btn2[5] ||
    event.target == btn2[6] ||
    event.target == btn2[7] ||
    event.target == btn2[8] ||
    event.target == btn2[9] ||
    event.target == btn3[0] ||
    event.target == btn3[1] ||
    event.target == btn3[2] ||
    event.target == btn3[3] ||
    event.target == btn3[4] ||
    event.target == btn3[5] ||
    event.target == btn3[6] ||
    event.target == btn3[7] ||
    event.target == btn3[8] ||
    event.target == btn3[9] ||
    event.target == btn4[0] ||
    event.target == btn4[1] ||
    event.target == btn4[2] ||
    event.target == btn4[3] ||
    event.target == btn4[4] ||
    event.target == btn4[5] ||
    event.target == btn4[6] ||
    event.target == btn4[7] ||
    event.target == btn4[8] ||
    event.target == btn4[9]
  ) {
    if (variableRecuperee[i].value == event.target.value) {
      score++;
      couleurscore[i].setAttribute("style", "background:green;");
      bonneoumauvaise[i].setAttribute("style", "color:green");
      bonneoumauvaise[i].innerHTML = "Bonne Réponse !";
    } else {
      bonneoumauvaise[i].innerHTML = "Mauvaise Réponse !";
      bonneoumauvaise[i].setAttribute("style", "color:red");
      couleurscore[i].setAttribute("style", "background:red;");
    }
    let k = 2;
    countdown = 21;
    containerreponse[i].setAttribute("style", "justify-content:center");
    tabl[i].setAttribute("style", "position : relative;left : -200%");
    setTimeout(function () {
      tabl[j].setAttribute(
        "style",
        "position: relative;top: 0;right: 0;left: 0;"
      );
    }, 600);
    setTimeout(function () {
      tabl[i].style.display = "none";
    }, 500);

    if (i == 9) {
      resultat.setAttribute("style", "opacity:1;pointer-events: auto");
      titrescore.innerHTML = score + "/10";
    }

    cercle[j].classList.add("countdowncercle");

    countdownNumberEl[j].textContent = countdown;

    setTimeout(function () {
      setInterval(function () {
        if (j !== k) {
          return;
        }
        countdown = --countdown <= -1 ? 21 : countdown;

        countdownNumberEl[i].textContent = countdown;
        // if (countdown == 0) {
        // }
      }, 1000);
    }, 700);
    setTimeout(function () {
      i++;
      j++;
    }, 600);
  }
});

const result1 = document.querySelector(".result1");
const result2 = document.querySelector(".result2");
const result3 = document.querySelector(".result3");
const result4 = document.querySelector(".result4");
const result5 = document.querySelector(".result5");
const result6 = document.querySelector(".result6");
const result7 = document.querySelector(".result7");
const result8 = document.querySelector(".result8");
const result9 = document.querySelector(".result9");
const result10 = document.querySelector(".result10");
const ex1 = document.querySelector(".ex1");
const ex2 = document.querySelector(".ex2");
const ex3 = document.querySelector(".ex3");
const ex4 = document.querySelector(".ex4");
const ex5 = document.querySelector(".ex5");
const ex6 = document.querySelector(".ex6");
const ex7 = document.querySelector(".ex7");
const ex8 = document.querySelector(".ex8");
const ex9 = document.querySelector(".ex9");
const ex10 = document.querySelector(".ex10");

const close1 = document.querySelector(".cr1");
const close2 = document.querySelector(".cr2");
const close3 = document.querySelector(".cr3");
const close4 = document.querySelector(".cr4");
const close5 = document.querySelector(".cr5");
const close6 = document.querySelector(".cr6");
const close7 = document.querySelector(".cr7");
const close8 = document.querySelector(".cr8");
const close9 = document.querySelector(".cr9");
const close10 = document.querySelector(".cr10");

result1.addEventListener("click", () => {
  ex1.style.display = "block";
});
result2.addEventListener("click", () => {
  ex2.style.display = "block";
});
result3.addEventListener("click", () => {
  ex3.style.display = "block";
});
result4.addEventListener("click", () => {
  ex4.style.display = "block";
});
result5.addEventListener("click", () => {
  ex5.style.display = "block";
});
result6.addEventListener("click", () => {
  ex6.style.display = "block";
});
result7.addEventListener("click", () => {
  ex7.style.display = "block";
});
result8.addEventListener("click", () => {
  ex8.style.display = "block";
});
result9.addEventListener("click", () => {
  ex9.style.display = "block";
});
result10.addEventListener("click", () => {
  ex10.style.display = "block";
});

//-------------------------------------------------------------------
close1.addEventListener("click", () => {
  ex1.style.display = "none";
});
close2.addEventListener("click", () => {
  ex2.style.display = "none";
});
close3.addEventListener("click", () => {
  ex3.style.display = "none";
});
close4.addEventListener("click", () => {
  ex4.style.display = "none";
});
close5.addEventListener("click", () => {
  ex5.style.display = "none";
});
close6.addEventListener("click", () => {
  ex6.style.display = "none";
});
close7.addEventListener("click", () => {
  ex7.style.display = "none";
});
close8.addEventListener("click", () => {
  ex8.style.display = "none";
});
close9.addEventListener("click", () => {
  ex9.style.display = "none";
});
close10.addEventListener("click", () => {
  ex10.style.display = "none";
});

<?php $bdd=new PDO("mysql:host=localhost;dbname=quiz;charset=utf8mb4", "root","");
$requete = "SELECT * FROM questions WHERE id_Theme=1";
$statement = $bdd -> prepare($requete);
$statement -> execute();
$infos = $statement ->fetchAll();
$i = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/968cf5c43c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Doppio+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Quiz HTML</title>
</head>
<body>

    <header>
        <img id="logo" src="images/skill.png" alt="logoskill&you"/>
        <a href="index.php"><i id ="home" class="fa-solid fa-house fa-3x"></i></a>
        <i id="profil"class="fa-solid fa-user fa-3x"></i>   
    </header>

    <div class="debut">
        <h1 class="titre quizzhtml">Quiz HTML</h1>
        <h2>10 questions pour tester ses connaissances en HTML</h2>
        <img id="logohtml" src="images/logohtml.webp" alt ="logo html"/>
        <input id="commencer" type="submit" value="Commencer">
    </div>

    <?php foreach($infos as $info){
        $tab = [$info["mauvaisereponse1"], $info["mauvaisereponse2"], $info["mauvaisereponse3"], $info["bonneréponse"]];
      shuffle($tab);
        echo'  
        <div class="questionhtml qhtml'.$i.'">
            <div class="questioncompteur">
                <p class="question">Question '.$i.'</p>
                <div class="countdown">
                    <div class="countdown-number"></div>
                    <svg>
                      <circle class="cercle" r="18" cx="20" cy="20"></circle>
                    </svg>
                  </div>
            </div>
            <div class="containerquestion">
                <p class="Q q'.$i.'">'.$info["Question"].'</p>
            </div>
            <div class="containerreponse">';
                if($tab[0] != ""){echo '<input class="reponse r1 " type="submit" value="'.$tab[0].'">';}
                if($tab[1] != ""){echo '<input class="reponse r2 " type="submit" value="'.$tab[1].'">';}
                if($tab[2] != ""){echo '<input class="reponse r3 " type="submit" value="'.$tab[2].'">';}
                if($tab[3] != ""){echo '<input class="reponse r4 " type="submit" value="'.$tab[3].'">';}
            echo '</div>
        </div>';
        $i++;
    }
    ?>


    <div class="ensembleresult">
        <div class="headresultat">
            <h3>Résultat</h3>
            <p class="themeresultat">Quiz HTML</p>
            <p class="score">8/10</p>
        </div>
        <div class="resultats">
            <div class="colonne1">
                <input class="resultat result1" type="submit" value="Question 1">
                <input class="resultat result2" type="submit" value="Question 2">
                <input class="resultat result3" type="submit" value="Question 3">
                <input class="resultat result4" type="submit" value="Question 4">
                <input class="resultat result5" type="submit" value="Question 5">
            </div>
            <div class="colonne2">
                <input class="resultat result6" type="submit" value="Question 6">
                <input class="resultat result7" type="submit" value="Question 7">
                <input class="resultat result8" type="submit" value="Question 8">
                <input class="resultat result9" type="submit" value="Question 9">
                <input class="resultat result10" type="submit" value="Question 10">
            </div>
        </div>
    </div>
<div class="explication ex1">
    <img class="croix cr1" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 1</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Que signifie l'acronyme HTML ?</p>
        <p class="t3">L'acronyme signifie HyperText Markup Language, ce qui signifie en français "langage de balisage d'hypertexte".</p>
    </div>
</div>
<div class="explication ex2">
    <img class="croix cr2" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 2</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">le code HTML suivant définissant un CSS externe est-il correct ?</p>
        <p class="t4">< link rel= stylesheet href="./style.css" ></p>
        <p class="t3">Faux ! <br>il manque les guillemets autour de “stylesheet”</p>
    </div>
</div>
<div class="explication ex3">
    <img class="croix cr3" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 3</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Sur quelle balise y a-t-il une erreur ?</p>
        <img id="photoq12" src="images/photoq11.png" alt="photo code"/>
        <p class="t3">L'erreur se trouve sur la balise "p",  il manque le slash pour la fermer. &lt;/p&gt</p>
    </div>
</div>
<div class="explication ex4">
    <img class="croix cr4" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 4</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Quelle balise est auto fermante ?</p>
        <p class="t3">Il s'agit de la balise &lt;img&gt </p>
    </div>
</div>
<div class="explication ex5">
    <img class="croix cr5" src="images/close.png" alt="croix fermer">
        <div class="placementcontainer">
            <p class="t1">Question 5</p>
            <p class="bonneoumauvaise"></p>
            <p class="t2">En HTML, la balise « alt » est une description textuelle que l’on attribue à une image. Elle signifie littéralement « texte alternatif ».</p>
            <p class="t3">Vrai !</p>
        </div>
</div>
<div class="explication ex6">
    <img class="croix cr6" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 6</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Quelle balise est nécessaire pour représenter une liste ordonnée ?</p>
        <p class="t3">Pour créer une liste ordonnée, il faut utiliser l'élément <strong>ol</strong><br>
            Pour une liste non-ordonnée, il faut utiliser l'élément <strong>ul</strong><br>
            et enfin l'élément <strong>dl</strong> est utilisé pour créer une liste de définition.
        </p>
    </div>
</div>
<div class="explication ex7">
    <img class="croix cr7" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 7</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Quel est le code HTML correct pour créer une checkbox ?</p>
        <p class="t3">Le code exact pour créer une checkbox est :<strong>&lt;input type="checkbox"&gt</strong></p>
    </div>
</div>
<div class="explication ex8">
    <img class="croix cr8" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 8</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Les commentaires HTML commencent par &lt;!-- et se terminent par !--&gt;</p>
        <p class="t3">Faux !<br>Les commentaires HTML commencent par &lt;!-- mais se terminent par <strong>--&gt;</strong></p>
    </div>
</div>
<div class="explication ex9">
    <img class="croix cr9" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 9</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Dans un champ de formulaire, quel attribut permet de renseigner un texte indicatif par défaut ?</p>
        <p class="t3">Le <strong>placeholder</strong> est un attribut permettant d'afficher du texte par défaut dans certains champs de formulaire.</p>
    </div>
</div>
<div class="explication ex10">
    <img class="croix cr10" src="images/close.png" alt="croix fermer">
    <div class="placementcontainer">
        <p class="t1">Question 10</p>
        <p class="bonneoumauvaise"></p>
        <p class="t2">Trouvez l'intrus !</p>
        <div class="intrus">
            <p>button</p>
            <p>table</p>
            <p>href</p>
            <p>h2</p>
        </div>
        <p class="t3">Button, table et h2 sont des balises <strong>href</strong> quant à lui est un attribut pour indiquer l'adresse de la page cible. </p>
    </div>
</div>
    <script src="quizhtml.js"></script>   
</body>
</html>
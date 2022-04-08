<?php $bdd=new PDO("mysql:host=localhost;dbname=quiz;charset=utf8mb4", "root","");
$requete = "SELECT * FROM questions WHERE id_Theme=1";
$statement = $bdd -> prepare($requete);
$statement -> execute();
$infos = $statement ->fetchAll();
$i = 1;
$y = 1;
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
        <a class="popupprofil"><i id="profil"class="fa-solid fa-user fa-3x"></i>   
        <span class="spanpop"></span></a>
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
        <input type=hidden class="Reponse" value="'.$info["bonneréponse"].'"/>
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
            <p class="Q q'.$i.'">'.htmlentities($info["Question"]).'</p>';
            if($i=="2"){echo'<img class="photoq1" src="'.$info["images"].'"/>';}
            echo'
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
        <p class="score"></p>
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

<?php foreach($infos as $info){
    echo '
    <div class="explication ex'.$y.'">
        <img class="croix cr'.$y.'" src="images/close.png" alt="croix fermer">
        <div class="placementcontainer">
            <p class="t1">Question '.$y.'</p>
            <p class="bonneoumauvaise"></p>
            <p class="t2">'.$info["Question"].'</p>';
            if($y=="2"){echo'<img class="photoq1" src="'.$info["images"].'"/>';}
            echo'
            <p class="t3">'.$info["réponse"].'</p>
        </div>
    </div>';

$y++;

} ?>
    <script src="quizhtml.js"></script>   
    </body>
    </html>
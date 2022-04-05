<?php $bdd=new PDO("mysql:host=localhost;dbname=quiz;charset=utf8mb4", "root","");


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
    <title>Quiz Skill&You</title>
</head>
<body>
    <div class="pseudo">
        <div class="formpseudo">
            <form method="post">
                <label for="name">Rentrez votre pseudo </label>
                <input type="text" name="name" id="name" required>
                <input id="envoyer" type="submit" value="Envoyer">
            </form>
        </div>
    </div>
<header>
    <img id="logo" src="images/skill.png" alt="logoskill&you"/>
    <i id ="home" class="fa-solid fa-house fa-3x"></i>
    <i id="profil"class="fa-solid fa-user fa-3x"></i>   
</header>

    <h1 class="titre">Thèmes</h1>

<div class="themes">
    <div class="theme html">
        <p>HTML</p>
    </div>
    <div class="theme css">
        <p>CSS</p>
    </div>
    <div class="theme cg">
        <p>Culture Général Web</p>
    </div>
</div>

<div class="description">

    <div class="des html">
        10 questions pour tester ses connaissances en HTML
    </div>
    
    <div class="des css">
        10 questions pour tester ses connaissances en CSS
    </div>
    <div class="des cg">
        10 questions pour tester ses connaissances en Culture Web
    </div>
</div>
<div class="boutons">
    <a href="quizhtml.php"><input id="lancerhtml" type="submit" value="Lancer le Quiz"></a>
    <input id="lancercss" type="submit" value="Lancer le Quiz">
    <input id="lancercg" type="submit" value="Lancer le Quiz">
</div>

<footer>
    <div class="footligne1">

        <img id="logofooter" src="images/skill.png" alt="logoskill&you"/>
            <p>FAQ</p>
            <p>Contact</p>
        <div class="reseaux">
            <div class="facebook">
                <a href="https://www.facebook.com/Skillandyou/"target="_blank"> <i class="fa-brands fa-facebook-f"></i></a>
            </div>
            <div class="twitter">
                <a href="https://twitter.com/skillandyou/"target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="linkedin">
                <a href="https://www.linkedin.com/company/skillandyou/?viewAsMember=true"target="_blank"> <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="youtube">
                <a href="https://www.youtube.com/channel/UCWiaPzpC3MCiD1rtsTaTDpw"target="_blank"> <i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <h3>Mentions légales</h3>
</footer>
<script src="index.js"></script>
</body>
</html>
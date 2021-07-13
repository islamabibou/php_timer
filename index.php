<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Php timer</title>
</head>
<body>
<p id="demo" style="font-size:30px;"></p>
    

<script type="text/javascript">
//mettre la date d'arrivée
    var countDownDate = <?= strtotime('2021-7-11T01:22') ?> * 1000;
    var now = <?= time() ?> * 1000;

//Mettre à jour toutes les secondes
var x = setInterval(function(){
    //obtenir la date d'aujourd'hui
    // 1. JavaScript
    // var now = new Date().getTime();
    // 2. PHP
    now = now + 1000;

    //calculer la durée entre les deux dates
    var distance = countDownDate - now;

    //mettre la durée est h, m et s
    var jours = Math.floor(distance / (1000 * 60 * 60 * 24));
    var heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var secondes = Math.floor((distance % (1000 * 60)) / 1000);

    //afficher les résultats
    document.getElementById("demo").innerHTML = jours + "d " + heures + "h " + minutes + "m " + secondes + "s ";

    //si le compteur s'achèvre, afficher du text
    if(distance < 0){
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Expiré";
    }
}, 1000);
</script>
</body>
</html>
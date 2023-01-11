<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
    echo date('d/m/Y');
    ?>
    <br>
    <?php
    //Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
    echo date('d-m-y');
    ?>
    <br>
    <?php
    //Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
    echo date('l j F Y');
    ?>
    <br>
    <?php
    //bonus le faire en français 
    $jour_semaine = array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
    $mois = array("", "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

    $numJourSem = date('w');
    $jourSem = $jour_semaine[$numJourSem];
    $numMois = date('n');
    $mois = $mois[$numMois];
    $numJour = date('d');
    $annee = date('Y');

    echo $jourSem . ' ' . $numJour . ' ' . $mois . ' ' . $annee;
    ?>
    <br>

    <?php
    //Afficher le timestamp du jour.
    //Afficher le timestamp du mardi 2 août 2016 à 15h00.
    echo time();
    echo "<br>";
    echo mktime(15, 0, 0, 8, 2, 2016);
    ?>
    <br>

    <?php
    //Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
    $date1 = new DateTime();
    $date2 = new DateTime('2016-05-16');
    $interval = $date1->diff($date2);
    echo $interval->format('%a days');
    ?>
    <br>
    <?php
    //Afficher la date du jour + 20 jours.
    $date = new DateTime();
    $date->add(new DateInterval('P20D'));
    echo $date->format('Y-m-d');
    ?>
    <br>
    <?php
    //Afficher la date du jour - 22 jours
    $date = new DateTime();
    $date->sub(new DateInterval('P22D'));
    echo $date->format('Y-m-d');
    ?>
    <br>

</body>

</html>
<?php
date_default_timezone_set('France/Paris');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dates</title>
</head>
<body class="bg-slate-800 text-white">
    <div align="center">
<h1 class="text-6xl  font-bold">Exercice 1 : </h1>
<h3 class="text-2xl">
<?php 
echo "Date d'aujourd'hui (jj/mm/aaaa): " . date("d/m/Y");
echo '<br>';
echo "Date d'aujourd'hui (jj/mm/aa).: " . date("d/m/y");
echo '<br>';
echo "Date d'aujourd'hui (jj/mm/aaaa hh:mm:ss): " . date("d-m-Y H:i:s");
echo '<br>';
echo "Date d'aujourd'hui (timestamp d'aujourd'hui): " . time();
echo '<br>';
echo "Date de demain (timestamp de demain): " . (time() + (24 * 3600));
 ?>
</h3>

<hr class="m-6">
<h1 class="text-6xl  font-bold">Exercice 2 : </h1>
<h3 class="text-2xl">
<?php 
switch(date('w')){
    case 0:
        $jourSemaine =  "Dimanche";
        break;
    case 1:
        $jourSemaine =  "Lundi";
        break;
    case 2:
        $jourSemaine =  "Mardi";
        break;
    case 3:
        $jourSemaine =  "Mercredi";
        break;
    case 4:
        $jourSemaine =  "Jeudi";
        break;
    case 5:
        $jourSemaine =  "Vendredi";
        break;
    case 6:
        $jourSemaine =  "Samedi";
        break;
}

switch( date('F')){
    case 'January':
        $mois = "Janvier";
        break;
    case 'February':
        $mois = "Février";
        break;
    case 'March':
        $mois = "Mars";
        break;
    case 'April':
        $mois = "Avril";
        break;
    case 'May':
        $mois = "Mai";
        break;
    case 'June':
        $mois = "Juin";
        break;
    case 'July':
        $mois = "Juillet";
        break;
    case 'August':
        $mois = "Août";
        break;
    case 'September':
        $mois = "Septembre";
        break;
    case 'October':
        $mois = "Octobre";
        break;
    case 'November':
        $mois = "Novembre";
        break;
    case 'December':
        $mois = "Décembre";
        break;
}
    echo 'date complète du jour en lettre au format français. : ' . $jourSemaine . ' ' . date('d') . ' ' . $mois . ' ' . date('Y');
    echo '<br>Nous sommes à la semaine n°' . date('W');
 ?>
</h3>

<hr class="m-6">
<h1 class="text-6xl  font-bold">Exercice 3 : </h1>
<h3 class="text-2xl">
<?php
// Afficher le nombre de jours pour chaque mois de l’année 2022.

    echo '<br>Nombre de jours pour chaque mois de l’année 2022 : <br>';
    echo 'Janvier : ' . date('t', mktime(0, 0, 0, 1, 1, 2022));
    echo '<br>Février : ' . date('t', mktime(0, 0, 0, 2, 1, 2022));
    echo '<br>Mars : ' . date('t', mktime(0, 0, 0, 3, 1, 2022));
    echo '<br>Avril : ' . date('t', mktime(0, 0, 0, 4, 1, 2022));
    echo '<br>Mai : ' . date('t', mktime(0, 0, 0, 5, 1, 2022));
    echo '<br>Juin : ' . date('t', mktime(0, 0, 0, 6, 1, 2022));
    echo '<br>Juillet : ' . date('t', mktime(0, 0, 0, 7, 1, 2022));
    echo '<br>Août : ' . date('t', mktime(0, 0, 0, 8, 1, 2022));
    echo '<br>Septembre : ' . date('t', mktime(0, 0, 0, 9, 1, 2022));
    echo '<br>Octobre : ' . date('t', mktime(0, 0, 0, 10, 1, 2022));
    echo '<br>Novembre : ' . date('t', mktime(0, 0, 0, 11, 1, 2022));
    echo '<br>Décembre : ' . date('t', mktime(0, 0, 0, 12, 1, 2022));
 
?>

<hr class="m-6">

<h1 class="text-6xl  font-bold">Exercice 4 : </h1>
<?php

$anniversaire = mktime(0, 0, 0, 03, 27, 2023);
$aujourdhui = time();
$diff = $anniversaire - $aujourdhui;
$jours = $diff / (60 * 60 * 24);
$jours = round($jours);
echo '<br><h3 class="text-2xl">Nombre de jours entre votre date d’anniversaire et la date d’aujourd’hui : ' . $jours . ' jours</h3>';
echo '<br>';

$diff = $anniversaire - $aujourdhui;
$secondes = $diff;
echo '<br><h3 class="text-2xl">Nombre de secondes entre votre date d’anniversaire et la date d’aujourd’hui : ' . $secondes . ' secondes</h3>';
?>

<hr class="m-6">
<h1 class="text-6xl  font-bold">Exercice 5 : </h1>
<h3 class="text-2xl">
<?php

$dateAujourdhui = date('d/m/Y');
$dateHier = date('d/m/Y', strtotime('-1 day'));
$dateDemain = date('d/m/Y', strtotime('+1 day'));
echo '<br>Aujourd\'hui : ' . $dateAujourdhui;
echo '<br>Hier : ' . $dateHier;
echo '<br>Demain : ' . $dateDemain;

?>
</h3>

<hr class="m-6">
<h1 class="text-6xl  font-bold">Exercice 6 : </h1>
<h3 class="text-2xl">
    <?php

$dateParis = date("d-m-Y H:i:s");
date_default_timezone_set('America/Montreal');
$dateMontreal = date("d-m-Y H:i:s");
date_default_timezone_set('America/Los_Angeles');
$dateLosAngeles = date("d-m-Y H:i:s");
date_default_timezone_set('Asia/Kuala_Lumpur');
$dateKualaLumpur = date("d-m-Y H:i:s");
date_default_timezone_set('Asia/Hong_Kong');
$dateHongKong = date("d-m-Y H:i:s");

echo '<br>Paris : ' . $dateParis;
echo '<br>Montréal : ' . $dateMontreal;
echo '<br>Los Angeles : ' . $dateLosAngeles;
echo '<br>Kuala Lumpur : ' . $dateKualaLumpur;
echo '<br>Hong Kong : ' . $dateHongKong;
   


?>
</h3>

<hr class="m-6">
<h1 class="text-6xl  font-bold">Exercice 7 : </h1>
<h3 class="text-2xl mb-64">
<?php
// Afficher le nombre d’heures de décalage entre $dateParis et $dateMontreal.
$dateParis = date("d-m-Y H:i:s");
date_default_timezone_set('America/Montreal');
$dateMontreal = date("d-m-Y H:i:s");
$dateParis = strtotime($dateParis);
$dateMontreal = strtotime($dateMontreal);
$diff = $dateParis - $dateMontreal;
$heures = $diff / (60 * 60);
$heures = round($heures);
echo '<br>Nombre d\'heures de décalage entre Paris et Montréal : ' . $heures . ' heures';
    

?>
</h3>


</div>
</body>
</html>







































































































































<?php
for ($i = 0; $i < 10000; $i++) {
    echo "Je suis un noob en PHP qui utilise copilot";
}

?>
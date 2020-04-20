<?php

$presentTime= new DateTime("now");
$presentTab=explode("-",$presentTime->format('F-d-Y-A-h-i'));

$destinationTime=new DateTime("2012-04-20 01:21:00");
$destinationTab=explode("-",$destinationTime->format('F-d-Y-A-h-i'));

$timeToTravel=$presentTime->diff($destinationTime);
$message="Il faut du carburant pour traverser ".$timeToTravel->days." jours et ".$timeToTravel->h." heures ".$timeToTravel->i." minutes et ".$timeToTravel->s." secondes";
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Convecteur Temporel</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="destination">
    <div class="dataBlock">
        <div class="data">
            <div class="label">MONTH</div>
            <div class="value"><?=strtoupper(substr($destinationTab[0],0,3))?></div>
        </div>

        <div class="data">
            <div class="label">DAY</div>
            <div class="value"><?=$destinationTab[1]?></div>
        </div>

        <div class="data">
            <div class="label">YEAR</div>
            <div class="value"><?=$destinationTab[2]?></div>
        </div>

        <div class="data">
            <div class="label">AM</div>
            <input type="checkbox" class="ckd" <?=$destinationTab[3]=='AM'?'checked':''?>>
            <div class="label">PM</div>
            <input type="checkbox" class="ckd" <?=$destinationTab[3]=='PM'?'checked':''?>>
        </div>

        <div class="data">
            <div class="label">HOUR</div>
            <div class="value"><?=$destinationTab[4]?></div>
        </div>

        <div class="data">
            <div class="label">MIN</div>
            <div class="value"><?=$destinationTab[5]?></div>
        </div>
    </div>
    <p>DESTINATION TIME</p>
</div>
<div class="present">
    <div class="dataBlock">
        <div class="data">
            <div class="label">MONTH</div>
            <div class="value"><?=strtoupper(substr($presentTab[0],0,3))?></div>
        </div>

        <div class="data">
            <div class="label">DAY</div>
            <div class="value"><?=$presentTab[1]?></div>
        </div>

        <div class="data">
            <div class="label">YEAR</div>
            <div class="value"><?=$presentTab[2]?></div>
        </div>

        <div class="data">
            <div class="label">AM</div>
            <input type="checkbox" class="ckp" <?=$presentTab[3]=='AM'?'checked':''?>>
            <div class="label">PM</div>
            <input type="checkbox" class="ckp" <?=$presentTab[3]=='PM'?'checked':''?>>
        </div>

        <div class="data">
            <div class="label">HOUR</div>
            <div class="value"><?=$presentTab[4]?></div>
        </div>

        <div class="data">
            <div class="label">MIN</div>
            <div class="value"><?=$presentTab[5]?></div>
        </div>
    </div>
    <p>PRESENT TIME</p>
</div>

<br>
<?=$message?>
</body>
</html>


<?php

$zone = filter_input(INPUT_GET, "zone", FILTER_VALIDATE_INT);

require_once('pdo.php');
$stmt = $pdo->prepare("SELECT * FROM personne p JOIN tdepartement tdep ON p.zone = :zone AND tdep.dep = p.zone");

$stmt->bindParam(":zone", $zone,PDO::PARAM_INT);
$stmt->execute();
$personnes = $stmt->fetchAll(PDO::FETCH_ASSOC);

// TODO switch case param($zone) if true else if null else = R

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <!--   <link rel="stylesheet" href="personcard.css"> -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="personcard.css">
</head>
<body>

<?php if ($personnes): ?>
    <div class="dep_affichage">
    <?= $zone ?> - 
    <br>     <br> 

</div>

<?php foreach ($personnes as $personne): ?>

<div class="card">
    <!--<img src="https://lh3.googleusercontent.com/oUUiPB9sq3ACq4bUaRmo8pgvC4FUpRRrQKcGIBSOsafawZfRpF1vruFeYt6uCfL6wGDQyvOi6Ez9Bpf1Fb7APKjIyVsft7FLGR6QqdRFTiceNQBm1In9aZyrXp33cZi9pUNqjHASdA=s170-no" alt="Person" class="card__image"> -->
   <br> <p class="card__name">
       
    
        <div class="personnes">
         
         <span><?= $personne ["poste"]  ?> :&nbsp; </span>  
         <span><?= $personne ["prenom"] ?> &nbsp;</span>
         <span> <?=$personne["nom"] ?> &nbsp;</span>
         <span>&nbsp;(<?=$personne["num"] ?>) </span>
        </div>
    </div>

        

</div>

<?php endforeach ?>
<?php else: ?>
    <p>Personne n'est affecté à cette zone </p>
<?php endif ?>


</body>
</html>
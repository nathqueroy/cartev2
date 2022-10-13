<doctype html>



<?php


include_once 'co.db.php';
if(isset($_POST['submit']))
{    
     $nom = $_POST['nom'];
     $prenom= $_POST['prenom'];
    
     $poste = $_POST['poste'];
     $num = $_POST['num'];
     $zone = $_POST['zone'];

     
     $sql = "INSERT INTO personne (nom,prenom,poste,num,zone)
     VALUES ('$nom','$prenom','$poste','$num','$zone')";
     if (mysqli_query($conn, $sql)) {
        echo "Employé ajouté  !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}


?>

<br><br><br><br>
        <input type="button" name="lien1" value="retourner à l'accueil" onclick="self.location.href='//localhost/codes/cartes.php'" style="background-color:#3cb371" style="color:white; font-weight:bold"onclick
  >
</html>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="stylesheet" href="cartes.css">
    <meta charset="UTF-8">
    <title>Create Record</title>
 
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
            
            
        }
    </style>
</head>
<body>
    <?php include_once('navbar.php') ?><br><br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Formulaire</h2>
                    </div>
                    <p>Veuillez remplir les champs ci-dessous</p>
                    <form action="formulaire3.php" method="post">
                            <div class="form-group">
                                <label>Nom</label><br>
                                <input type="text" name="nom" class="form-control"><br><br>
                            </div>
                            <div class="form-group">
                                <label>prenom</label><br>
                                <input type="text" name="prenom" class="form-control"><br><br>
                            </div>
                            
                            <div class="form-group">
                                <label>poste</label><br>
                                <input type="text" name="poste" class="form-control"><br><br>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>num</label><br>
                                <input type="mobile" name="num" class="form-control"><br><br>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>zone</label><br>
                                <input type="number" name="zone" class="form-control"><br><br>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </form>
                </div>
            </div>        
        </div>
    </div>
    <br><br><br><br>
        <input type="button" name="lien1" value="retourner à l'accueil" onclick="self.location.href='//localhost/codes/cartes.php'" style=
        
        
        "background-color:#3cb371" style="color:white; font-weight:bold"onclick
  >
</body>
</html>
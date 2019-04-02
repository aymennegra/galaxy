<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ajout d'un livraison</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP
include "C:/wamp64/www/galaxy/core/livraisonC.php";
include "C:/wamp64/www/galaxy/entites/livraison.php";

if (isset($_POST['nom']) and isset($_POST['adresse']) and isset($_POST['numtel']) and isset($_POST['liv'])){
$livraison1=new livraison($_POST['idclient'],$_POST['nom'],$_POST['adresse'],$_POST['numtel'] ,$_POST['numcommande'],$_POST['liv']);
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$lnom=strlen($_POST['nom']);
$ladresse=strlen($_POST['adresse']);
$lnumtel=strlen($_POST['numtel']);
$lnumcommande=strlen($_POST['numcommande']);
if($lnom>0 && $ladresse>0 && $lnumtel==8 && $lnumcommande>0) {
$livraison1C=new livraisonC();
$livraison1C->ajouterlivraison($livraison1);
header('Location: index2.php');
}
else
{
    echo "<script>alert(\"verifier vos données\")</script>";
}	
}else{
	echo "";
}
//*/

?>
    <form method="POST" action="ajoutlivraison.php">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Ajouter une livraison
    </div>
    <div class="panel-body">
        <form role="form">

                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le nom</label>
                        <input type="text" class="form-control" id="warning" name="nom"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le adresse</label>
                        <input type="text" class="form-control" id="error" name="adresse"/>
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du telephone</label>
                        <input type="number" class="form-control" id="success" name="numtel" placeholder="8 chiffres"/>
                    </div>
					 <div class="form-group has-warning">
                        <label class="control-label" for="warning">saisir le numero de la commande</label>
                        <input type="number" class="form-control" id="warning" name="numcommande"/>
                    </div>
					<div class="form-group">
                        <label>champ admin</label>
                        <select class="form-control" name="liv" type="text">
                            <option></option>
                            
                        </select>
                    </div>
                </form>
					<input class="btn btn-info" type="submit" name="ajouter" value="ajouter">
                </form>

        </body>
        </html>
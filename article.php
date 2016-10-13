<?php
// affiche les infos d'un article

require('database.php');

function redirect($url) {
    header ("Location: $url");
exit;  
}


$id=$_GET['id'];
if (empty($id))
    redirect('liste2.php');

$bdd=dbconnect();

$sql="select * from article where id_article=$id";
$statement = $bdd->query($sql);
$article = $statement->fetch(PDO::FETCH_ASSOC);

?>
<html>
  <head>
        <title>Détail article</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="liste.css" /> 
  </head>
  <body>
        <h1>Article</h1>

        <table>
            <thead>
                <tr>
                   <th>Champ</th>
                   <th>Valeur</th>
                </tr>                
            </thead>
            <tr>
                <td>reference</td><td> <?= $article['reference'] ?> </td>                
            </tr>
            <tr>
                <td>libelle</td><td> <?= $article['libelle'] ?> </td>                
            </tr>    
            <tr>
                <td>prix</td><td> <?= $article['prix'] ?> </td>                
            </tr>                
        </table>
  </body>
</html>
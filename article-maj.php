<?php
// mise à jour des infos d'un article

require('database.php');

function redirect($url) {
    header ("Location: $url");
exit;  
}




$bdd=dbconnect();

if ($_SERVER['REQUEST_METHOD']=='GET') {
    $id=$_GET['id'];
    if (empty($id))
        redirect('liste1.php');

    $sql="select * from article where id_article=$id";
    $statement = $bdd->query($sql);
    $article = $statement->fetch(PDO::FETCH_ASSOC);
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id=$_POST['id_article'];
    $libelle=$_POST['libelle'];
    $reference=$_POST['reference'];  
    $sql="update article set reference='$reference',libelle='$libelle' where id_article=$id";
    $count = $bdd->exec($sql);
    redirect('liste1.php');    
}

?>
<html>
  <head>
        <title>Détail article</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="liste.css" /> 
  </head>
  <body>
        <h1>Article</h1>

        <form action="article-maj.php" method="POST">
        <table>
            <thead>
                <tr>
                   <th>Champ</th>
                   <th>Valeur</th>
                </tr>                
            </thead>
            <tr>
                <td>reference</td>
                <td> <input name="reference" type="text" value="<?= $article['reference'] ?>" </td>                
            </tr>
            <tr>
                <td>libelle</td>
                <td> <input name="libelle" type="text" value="<?= $article['libelle'] ?>" </td>                   
            </tr>    
            <tr>
                <td>prix</td>
                 <td> <input name="prix" type="text" value="<?= $article['prix'] ?>" </td>                   
            </tr>                
        </table>
            <input name="id_article" type="hidden" value="<?= $article['id_article'] ?>" >
            <input type="submit" value="OK">
        </form>
  </body>
</html>
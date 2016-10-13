<?php
require('database.php');

$bdd=dbconnect();

// liste de 10 articles
 $sql="select id_article,reference,libelle,prix
        from article
        order by libelle
        limit 10; ";
 

$statement = $bdd->query($sql);

// Récupération de tous les résultats de la requête dans un tableau
$lignes = $statement->fetchAll();
?>
<html>
  <head>
        <title>Liste articles</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="liste.css" /> 
  </head>
  <body>
        <h1>Ma première liste bdd</h1>

        <table>
            <thead>
                <tr>
                   <th>ref</th>
                   <th>libelle</th>
                </tr>                
            </thead>
<?php            
// Itération sur le contenu du tableau
foreach ($lignes as $ligne) {
    // On accède à la valeur de macolonne avec $ligne['macolonne'];
    $ref=$ligne['reference'];
    $libelle=$ligne['libelle'];
    $id=$ligne['id_article'];
    echo "<tr> <td><a href='article.php?id=$id'>$ref</a></td> <td>$libelle</td>  </tr>";
}
?>
        </table>
  </body>
</html>

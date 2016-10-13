% Intro développement web
% JVA
% 13/10/2016


## exemple : visiter une page web

- url : <http://jva.lenny/page1.html>
	- http : protocole
	- jva.lenny : hôte (serveur)
		- annuaire DNS donne ip 
		- sur le serveur on peut avoir plusieurs sites
	- port : pour http 80 par défaut <http://jva.lenny:80/page1.html>
	- test.html : fichier

- Fonctionnement
	+ navigateur demande la page (http GET /test.html )
	+ serveur répond : contenu de la page ou erreur (code http 404)
	+ serveur web : simple, répond à quelques types de requêtes
	+ échanges en texte clair (http)

Le serveur web peut servir tout type de fichier, le navigateur interprète et affiche ou télécharge (démo ; img, txt, pdf, xls)


## Anatomie d’une page web

- langage html 
	- normalisé : W3C
	- plusieurs normes : html4,xhtml,html5
	- balises (idem xml)
- quelques tags 
	- html, head, body, h1, p 
	- démo : image,table
- c'est laid !
	- feuilles de style css
	- typo
	- positionnement
	- adaptation à la taille de l'écran (responsive design)
	- impression
	- démo : <http://www.w3schools.com/css/demo_default.htm> 


## php 

- 1995 par Rasmus Lerdorf "Personal Home Pages"
- dans le top 10 des langages les plus populaires <http://www.tiobe.com/tiobe-index/>
- langage de script 
	- interprété
	- pas de déclarations de $variables 
	- variables non typées (type hinting dans les params de fonction)
	- sensible à la casse 
	- orienté objet (optionnel)
	- structures de données : tableaux (associatifs) <http://php.net/manual/fr/ref.array.php>
	- E_NOTICE est votre ami
	
- page php
	- extension .php
	- peut contenir du html : sera envoyé tel quel
	- code php encadré par &lt;?php  ?&gt;

## Exécution code php

- environnement
	- web => retourne html (ou xml, csv )	
	- ligne de commandes (cli)

- traitement d'une requête
	- navigateur -> serveur web (GET /liste.php)
	- serveur web transmet la requête au moteur php
	- php interprète la page et passe le résultat au serveur web
	- le serveur web envoie le résultat au navigateur 
	- sans état : comment préserver les variables entre 2 appels ?

- plateforme de production
	- OS : GNU/Linux (CentOS)
	- Serveur web : Apache
	- php : mod_php de Apache
	- bdd : mysql (Oracle) ou MariaDB (fork, compatible, de mysql)


## Démos php

- liste depuis la base de données : liste.php 
	- ça fait peur ?
	- aller plus loin : modéle MVC
		- Model : les données (orm)
		- View : l'affichage (templates)
		- Controller : contrôleur
- formulaire de login


## Outils
- php : windows/mac/linux http://php.net/ 
- serveur web :
	- inutile si on utilise celui de php (en dev : php -S localhost:80 pb si on peut pas utiliser port 80)
	- linux : Apache (VM)
	- windows : IIS <https://www.microsoft.com/WEB/platform/phponwindows.aspx> 
- IDE : Netbeans (php edition) <https://netbeans.org/> 
- Bdd : mysql <http://dev.mysql.com/downloads/mysql/> 
	- édité par Oracle mais c'est pas Oracle !
	- pour des usages exigeants : [Postgresql](https://www.postgresql.org/) (licence permissive)
- Outils mysql : 
	- modélisation & gestion serveur : MySql Workbench <https://dev.mysql.com/downloads/workbench/>
	- équivalent TOAD : <http://www.heidisql.com/> (SQLDeveloper fonctionne aussi)
- Navigateur : Firefox (Chrome) tester sur IE <https://www.mozilla.org>
- Gestionnaire de version : [subversion](https://subversion.apache.org/) client : <https://tortoisesvn.net/> 
- Tous ces outils sont des [logiciels libres](https://fr.wikipedia.org/wiki/Logiciel_libre) et gratuits

## Organisation dev

- Frontend
	- graphisme
	- html
	- css 
	- javascript
- Backend
	- php
	- base de données
	- sécurité

- Travail à plusieurs
	- dev et base de données sur chaque poste
	- publication dans le gestionnaire de version
	- intégration sur VM de test ~ prod

## Gravir la montagne

Utiliser des outils pour ne pas partir de zéro.

- côté php
	- bibliothèques d'outils : <https://packagist.org/> 
		- envoyer des mails : [swiftmailer](https://packagist.org/packages/swiftmailer/swiftmailer)
		- lire/écrire des fichiers Excel : [PHPExcel](https://github.com/PHPOffice/PHPExcel) 
	- [frameworks](https://fr.wikipedia.org/wiki/Framework)
		- Symfony le cadriciel made in France : <http://symfony.com/>
		- Doctrine : accés aux données (ORM) : <http://www.doctrine-project.org/>
		- Twig : moteur de templates <http://twig.sensiolabs.org/>
		- Silex : micro framework basé sur des composants symfony
- côté frontend
	- html/css
		- bootstrap <http://getbootstrap.com/>
		- <https://html5up.net/>
	- javascript
		- JQuery <https://jquery.com/>
		

		




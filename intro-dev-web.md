% Intro développement web
% JVA
% 13/10/2016


## exemple : visiter une page web

- url : http://jva.lenny/page1.html
	- http : protocole
	- jva.lenny : hôte (serveur)
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
	- démo : table
- c'est laid !
	- feuilles de style css
	- typo
	- positionnement

## php 

- 1995 par Rasmus Lerdorf "Personal Home Pages"
- langage de script 
	- interprété
	- pas (peu) de déclarations de $variables
- environnement
	- web => retourne html (ou xml, csv )	
	- ligne de commandes (cli)

- page php
	- extension .php
	- peut contenir html : envoyé tel quel
	- code php encadré par <?php ?>

nav -> serveur web -> php -> serveur web -> navigateur (faire diagramme séquence)









## Outils
- php : windows/mac/linux http://php.net/ 
- serveur web :
	- inutile si on utilise celui de php (mais pb sur liens absolus)
	- linux : apache (VM)
	- windows : IIS https://www.microsoft.com/WEB/platform/phponwindows.aspx 
- IDE : Netbeans (php) https://netbeans.org/ 
- Bdd : mysql (postgresql)  http://dev.mysql.com/downloads/mysql/ 
- Outil mysql : 
	- modélisation & gestion serveur : MySql Workbench
	- équivalent TOAD : http://www.heidisql.com/ 
- Navigateur : Firefox (Chrome) tester sur IE https://www.mozilla.org
- Gestionnaire de version : subversion https://tortoisesvn.net/ 

## Organisation dev
- Frontend
	- html
	- css 
	- javascript
- Backend
	- php
	- base de données




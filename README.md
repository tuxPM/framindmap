
Ce fork inclut la possibilité de sauvegarder sur le serveur qui héberge Framindmap.
Le chemin vers le fichier php doit être spécifié dans  Storage.js (var path="/framindmap/storage.php";)
Les fichiers sont ensuite stockés dans le répertoire storage (variable $storageFolder dans storage.php).

Le fichier peut être chargé directement ou partagé en fournissant le clé du document (sans le préfix) comme paramètre d'URL : id.
Exemple: /framindmap.html?id=118a5fff-9a13-438f-9504-c4e14cdff9be.


Framindmap
==========

Framindmap permet de créer des cartes mentales (aussi appelées « cartes heuristiques »).

C'est la version traduite en français et précompilée du logiciel mindmaps de David Richard :
https://github.com/drichard/mindmaps
Le logiciel est sous licence AGPLv3

Cette version est nettoyée des éléments spécifiques à Framasoft (page d'accueil, barre de navigation et script de tracking).
La traduction s'est faite directement dans le code html du fichier framindmap.html (= index.html de la version drichard).

L'installation se fait par simple copier/coller des fichiers sur un serveur web (c'est juste du html/css/javascript).

Ce logiciel est proposé comme service en ligne par l'association Framasoft depuis 2012 sur le site :
http://framindmap.org/


Remarques générales.

Je suis parti sur la base du 2015 en incluant son css parfaitement responsive et moins alambiqué que dans la version que tu ma envoyée.

j' ai changé la dénomination du fichier de contenu en "content-home" mais il est intact. A toi de revoir son html pour qu' il corresponde au thème

Ton fichier home.php a été placé dans un dossier qui doit réunir tous les templates de page. Si j' ai bien compris ton code tu cherches à afficher  les trois derniers posts de la catégorie 'journal-nomade', pas besoin de créer une boucle dans la boucle pour cela, tu as assez de paramètres à ta disposition pour faire tous les tris que tu veux.


http://codex.wordpress.org/Class_Reference/WP_Query

Je sais que e n' est pas simple, mais cette page tu dois vraiment la connaître presque par coeur pour aller chercher le détail dont tu as besoin.
Ici je me suis servi d' une particularité qui est de définir le nombre de posts par page, mais sans la pagination, ce qui fait que tu n' affiches que ceux là.



En ce qui concerne ce repository, je te propose de le clôner sur ton ordinateur.
Je suppose que tu as téléchargé le logiciel github pour Mac. Une fois installé, tu vas en ligne et clique sur le bouton "clône in Desktop", du repositary . Le logiciel s' ouvre et te demande où tu veux écrire les fichiers. Une fois cela fait, à chaque fois que tu fera "commit and sync", sans oublier les commentaires, tu mettra en ligne une nouvelle version du thème et je pourrai voir comment tu t' en sors.
En fait Github est une version en ligne de Time Machine que tu utilises pour tes back-up.


Bonne soirée.


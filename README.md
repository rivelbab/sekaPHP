# ====== sekaPHP V 0.1 =========
[a little PHP MVC framework build from scratch]

#Pourquoi utiliser un Framework PHP ? 
------------------------------------

- Les raisons qui poussent les coders à opter pour un framework sont nombreuses et dependent souvent du projet (sa taille, sa complexité, possibilité d'évolution, travail en équipe, contrainte de temps, meilleure organisation, possibilité d'utiliser les libraries existantes pour gagner du temps,... 

- Comme vous pouvez le voir, il existe donc plusieurs raison d'utiliser un framework PHP.Le problème c'est que ces frameworks implémentent souvent des notions très avancées qui nécessitent une bonne connaissance de la Programmation Orientée Objet (POO), de l'architecture Model-Vue-Controller (MVC) et bien d'autres qu'il est souvent difficile pour un débutant de les prendres en main. 

-L'autre aspect c'est que ces frameworks viennent avec plusieurs plugins par defaut et pour un projet de petite taille, c'est pas très benefique de charger un ensemble d'éléments qui ne sera pas utilisé. 

#Pourquoi SekaPHP ?
-------------------

SekaPHP est un framework que j'ai développé from scratch, il permet donc de mieux organiser le code, de comprendre la structure et le fonctionnement du MVC, et surtout de communiquer directement avec le PHP (pas trop d'abstraction à ce niveau). Très éfficace pour des projets PHP de petite taille.

#Fonctionnalité
--------------

1/ COMPOSER : grace à l'utilitaire Composer, vous pouvez charger n'importe qu'elle librarie, package, bundle que vous vouler. le fichier composer.json présent à la racine du projet décrit toutes les dépendances

2/ AUTOLOADER : les classes sont chargé automatiquement grace à l'autoloader de composer et l'algorithme psr-4. Un vrai gain de temps

3/ MINIFY : La librarie minify se charge de minifier et compresser les templates avant de les afficher, ce qui rend l'application plus rapide

4/ HELPERS : Un ensemble d'helpers a été développer pour faciliter certaine tache, comme les requettes SQL,...

5/ ROUTAGE : Un système de routage simple et efficace basé sur les expressions regulières 

Bref ce projet étant encore en cours de dev, n'hésitez pas à me contacter pour me laisser vos avis. 

INSTALLATION
-------------

- Cloner ou télécharger l'archive en cliquant sur le bouton vert 

pour cloner, placez-vous dans la racine de votre server (le fameux www) puis tapez dans la console la cmd suivante 

>_ git clone https://github.com/rivelbab/sekaPHP.git

- une fois cloner ou télécharger et dézipper, renommer le dossier avec le nom de votre projet et placez-vous à l'intérieur de celui-ci.

Sous linux, un simple "cd nom_du_projet" suffit.

- Une fois dans le répertoire du projet, tapez(toujours dans la console) la commande suivante :

>_ composer install

cette commande va installer toutes les dépendances et la votre projet est prêt.

- Dernière chose, modifier le fichier config/config.php avec les bonnes informations (base de données, ...)

- Et hooppp; enjoy coding

- Fonctionnement : Consultez le wiki https://github.com/rivelbab/sekaPHP/wiki/Mode-de-fonctionnement

@Rivelbab Paris 2018

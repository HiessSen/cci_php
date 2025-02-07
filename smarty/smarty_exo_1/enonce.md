# Exercice Smarty
## Création des données :
Créez deux tableaux PHP :
* articles : Un tableau d'articles, chaque article étant un tableau associatif avec les clés suivantes :
  * id
  * titre
  * contenu
  * auteur
  * date  
* commentaires : Un tableau de commentaires, chaque commentaire étant un tableau associatif avec les clés suivantes :
  * id
  * article_id
  * auteur
  * contenu
  * date  
## Affichage de la liste des articles :
Créez un template Smarty (blog.tpl) qui affiche une liste d'articles.  
Utilisez une boucle {foreach} pour parcourir le tableau $articles et afficher
* le titre
* l'auteur
* la date
* un extrait du contenu de chaque article.  
## Ajoutez des liens pour accéder à la page individuelle de chaque article.  
Affichage d'une page d'article individuel :  
Créez un nouveau template Smarty (article.tpl) pour afficher un article individuel avec tous les détails.
Utilisez la balise {include} pour inclure le template de l'article dans blog.tpl lorsqu'un lien est cliqué.  
## Affichage des commentaires :
Sur la page d'article (article.tpl), utilisez une boucle {foreach} pour afficher les commentaires associés à cet article.  
Ajoutez un formulaire simple pour permettre aux utilisateurs d'ajouter des commentaires.  
Stylisation et Mise en page :  
Ajoutez du CSS pour styliser vos pages (utilisez la balise <style> dans les templates Smarty).  
Créez une mise en page agréable et réactive pour vos pages d'articles.  
 
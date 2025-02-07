## Exercice 1
Objectif : Créer une classe simple Film. 
* titre
* dateSortie
* duree
* genre

Implémentez un constructeur pour initialiser ces propriétés.  
Ajoutez une méthode afficherDetails() qui retourne ou affiche une chaîne de caractères avec les informations du film.  
Instanciez quelques objets Film pour tester votre classe.  

## Exercice 2
Créez une classe Acteur avec les propriétés privées :
* id
* nom
* prenom
* dateNaissance

Ajoutez un constructeur et des méthodes getters et setters.  
Créez une méthode afficherDetails() pour afficher les informations de l’acteur.  
Testez la classe en instanciant quelques acteurs.  

## Exercice 3
Ajoutez à la classe Film une propriété (par exemple un tableau) destinée à contenir les objets Acteur associés.  
Créez une méthode ajouterActeur(Acteur $acteur) dans la classe Film qui permet d’ajouter un acteur au film.  
Ajoutez également une méthode listerActeurs() qui affiche ou retourne la liste des acteurs jouant dans le film.  
Testez en associant quelques acteurs à un film et en affichant la liste.

## Exercice 4 
Créer la base de données.

## Exercice 5
Créez une classe Database utilisant le pattern Singleton pour gérer la connexion PDO.  
Créez une classe FilmManager qui possède des méthodes telles que :
* getAllFilms()
* getFilmById($id)
* ajouterFilm($titre, $dateSortie, $duree, $genre)
* modifierFilm(...)
* supprimerFilm($id)

Créez une classe ActeurManager avec des méthodes similaires pour gérer les acteurs :
* getAllActeurs()
* getActeurById($id)
* ajouterActeur($nom, $prenom, $dateNaissance)
* modifierFilm(...)
* supprimerFilm($id)

Ajoutez dans l’un des managers (par exemple dans FilmManager) une méthode ajouterActeurAuFilm(filmId, acteurId) qui insère une relation dans la table film_acteur.
 
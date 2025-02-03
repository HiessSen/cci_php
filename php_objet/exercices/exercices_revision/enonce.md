# Exercice 1 : Création d'une classe simple
Crée une classe Voiture avec les propriétés suivantes :
* marque (string)
* modele (string)
* annee (int)

Ajoute un constructeur pour initialiser ces propriétés et une méthode afficherDetails() qui affiche les informations de la voiture.  
Teste la classe en instanciant un objet et en affichant ses détails.

# Exercice 2 : Encapsulation et Getters/Setters
Ajoute des méthodes getter et setter pour chaque propriété de la classe Voiture.  
Modifie le code pour interdire les années supérieures à l'année actuelle.

# Exercice 3 : Héritage et Polymorphisme
Crée une classe VoitureElectrique qui hérite de Voiture et ajoute une propriété autonomie (int).  
Redéfinis la méthode afficherDetail() pour afficher aussi l’autonomie.  
Instancie une voiture électrique et affiche ses détails.

# Exercice 4 : Connexion à une base de données
Crée une connexion à une base de données MySQL avec PDO.  
La base de données garage possède une table voitures avec les colonnes :
* id
* marque
* modele
* annee.

# Exercice 5 : Lire des données avec PDO
Utilise PDO pour récupérer toutes les voitures de la table voitures et affiche-les sous forme de tableau HTML.

# Exercice 6 : Création d'une classe de gestion de la base de données
Crée un trait Database qui gère la connexion à la base de données avec PDO.
 
# Exercice 7 : Modèle de données avec POO
Crée une classe VoitureManager qui utilise PDO pour effectuer des opérations sur la table voitures.  
Ajoute des méthodes :
* getAllVoitures() : Retourne toutes les voitures.
* ajouterVoiture($marque, $modele, $annee) : Ajoute une voiture à la base de données.

Teste ces méthodes avec des objets PHP.

# Exercice 8 : Formulaire d'ajout de voiture
Crée un formulaire HTML qui permet d’ajouter une voiture à la base de données en utilisant VoitureManager.

# Exercice 9 : Affichage et suppression
Modifie VoitureManager pour ajouter une méthode supprimerVoiture($id).  
Affiche la liste des voitures avec un bouton "Supprimer" à côté de chaque voiture.  
Quand on clique sur "Supprimer", la voiture est effacée de la base.
 
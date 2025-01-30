# PHP - Objet
## Exercice 1 : Exercice objet PHP
Créer une classe personne avec les attributs suivant :
* Sexe
* Nom
* Age

Créer les getter et les setter pour chaque attribut  
Créer une méthode permettant de retourner l'ensemble des attributs  
Instancier l'objet et faire appel à l'ensemble des méthodes  
Créer une classe employé héritant de la classe personne avec les attributs suivant :
* Entreprise
* Poste
* Salaire

Créer les getter et les setter pour les attributs  
Créer une méthode permettant d'augmenter le salaire de 10%  
Sur la classe personne créer un constructeur permettant d'attribuer des valeurs à chaque attribut  
Instancier l'objet employé et faire appel à l'ensemble des méthodes

## Exercice 2: Gestion d'une bibliothèque en POO
Créer une classe PHP appelée "Livre" pour représenter un livre. Chaque livre aura les propriétés suivantes :
* titre
* auteur
* année de publication
* disponible (un booléen indiquant si le livre est disponible ou emprunté).

Ajouter un constructeur pour initialiser ces propriétés et une méthode pour afficher les détails du livre.  
créer quelques objets de la classe "Livre" et tester les méthodes d'affichage, d'emprunt et de retour.  
Créer une classe PHP appelée "Membre" pour représenter un membre de la bibliothèque. Chaque membre aura les propriétés suivantes :
* "nom"
* "numéro de membre"
* "livres empruntés" (un tableau de livres empruntés).

Ajouter un constructeur pour initialiser ces propriétés et des méthodes pour :  
afficher les détails du membre, emprunter un livre, retourner un livre et afficher les livres empruntés.  
Modifier la classe "Livre" pour inclure une méthode permettant de vérifier si un livre est actuellement emprunté par un membre.  
Modifier le code de test pour créer des membres de la bibliothèque, emprunter et retourner des livres.

## Exercice 3 : Les traits
Créez un trait Greet avec une méthode sayHello() qui affiche "Hello, world!".
Utilisez ce trait dans trois classes différentes :
* Personne
* Robot
* Animal.  
Appelez la méthode sayHello pour chaque classe.

## Exercice 4 : Exercice interface
Créez une interface Calculable avec une méthode calculer().
Implémentez deux classes :
* addition
* multiplication  
Elles doivent implementer l'interface calculable et effectuent les opérations respectives.
 
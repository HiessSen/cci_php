# Exercice POO PDO

En utilisant des classes et le trait PDO:
* Utiliser le fichier trait_pdo.php
* Créer un fichier class.utilisateur.php
* Importer la base de donnée et la table dans phpmyadmin
* Créer un fichier inscription.html avec les champs pour l'inscription
* Créer un fichier inscription.php pour enregistrer l'utilisateur dans la table (hashé le mot de passe)
* Créer un fichier login.html avec un formulaire de connection (email et mot de passe)
* Créer un fichier login.php pour traiter la connection de l'utilisateur. Si l'utilisateur est déjà connecté le rediriger vers la page index.php  
sinon vérifier que l'utilisateur existe et le rediriger vers index.php (utilisation d'une session et des cookies)
* Sur la page index.php afficher les informations sur l'utilisateur (nom, prenom, etc..) ainsi que la liste des utilisateurs enregistré dans la table
* Développer la partie permettant de modifier/supprimer un utilisateur (sauf l'utilisateur connecté)
* Implémenter un système de token sur la page login.php, index.php, editer.php et supprimer.php. Le token doit être valide durant 1h.
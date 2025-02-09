<?php
require_once 'class.film.php';
class FilmManager extends Film
{
    public function __construct(string $titre, string $dateSortie, int $duree, string $genre)
    {
        parent::__construct($titre, $dateSortie, $duree, $genre);
    }

    private static function getDbConnection()
    {
        try {
            $db = Database::getInstance();
            return $db->getConnexion();
        } catch (Exception $e) {
            error_log('Database connection error: ' . $e->getMessage());
            return null;
        }
    }

    public static function getAllFilms(): void
    {
        $sql = self::getDbConnection();
        if ($sql) {
            try {
                $requete = $sql->prepare('SELECT * FROM `films`');
                if ($requete->execute()) {
                    if ($requete->rowCount() > 0) {
                        $resultat = $requete->fetchAll();
                        include_once 'vues/tous_les_films.php';
                    } else {
                        echo 'Il n\'y a pas de film à afficher';
                    }
                }
            } catch (PDOException $e) {
                error_log('Query error: ' . $e->getMessage());
                echo 'Une erreur est survenue lors de la récupération des films.';
            }
        } else {
            echo 'Impossible de se connecter à la base de données.';
        }
    }

    public function getFilmById(int $id): void
    {
        $sql = $this->getDbConnection();
        if ($sql) {
            try {
                $requete = $sql->prepare('SELECT * FROM films WHERE id = :id');
                $requete->bindParam(':id', $id, PDO::PARAM_INT);
                if ($requete->execute()) {
                    if ($requete->rowCount() > 0) {
                        $resultat = $requete->fetch();
                        include_once 'vues/film_unique.php';
                    } else {
                        echo 'Il n\'y a pas de film à afficher';
                    }
                }
            } catch (PDOException $e) {
                error_log('Query error: ' . $e->getMessage());
                echo 'Une erreur est survenue lors de la récupération du film.';
            }
        } else {
            echo 'Impossible de se connecter à la base de données.';
        }
    }
    public function ajouterFilm(string $titre, string $dateSortie, int $duree, string $genre): void
    {
        $sql = $this->getDbConnection();
        if ($sql) {
            try {
                $requete = $sql->prepare('INSERT INTO films (titre, date_sortie, duree, genre) VALUES (:titre, :dateSortie, :duree, :genre) WHERE id = :id');
                $requete->bindParam(':id', $id, PDO::PARAM_INT);
                $requete->bindParam(':titre', $titre);
                $requete->bindParam(':dateSortie', $dateSortie);
                $requete->bindParam(':duree', $duree);
                $requete->bindParam(':genre', $genre);
                if ($requete->execute()) {
                    header('Location: traitement/afficher_films.php');
                }
            } catch (PDOException $e) {
                error_log('Query error: ' . $e->getMessage());
                echo 'Une erreur est survenue lors de l\'ajout du film.';
            }
        } else {
            echo 'Impossible de se connecter à la base de données.';
        }
    }

    public function modifierFilm($titre, $dateSortie, $duree, $genre)
    {
        $sql = $this->getDbConnection();
        if ($sql) {
            try {
                $requete = $sql->prepare('UPDATE films SET titre=:titre, date_sortie=:dateSortie, duree=:duree, genre=:genre;');
                $requete->bindParam(':titre', $titre);
                $requete->bindParam(':dateSortie', $dateSortie);
                $requete->bindParam(':duree', $duree);
                $requete->bindParam(':genre', $genre);
                if ($requete->execute()) {
                    include_once 'afficher_films.php';
                }
            } catch (PDOException $e) {
                error_log('Query error: ' . $e->getMessage());
                echo 'Une erreur est survenue lors de la modofication du film.';
            }
        } else {
            echo 'Impossible de se connecter à la base de données.';
        }
    }
}
//    supprimerFilm($id)
//    {
//
//    }

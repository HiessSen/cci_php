<?php
require_once '../class.film_manager.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupère l'ID du film à modifier
    $id = $_GET['id'] ?? 0;
    $filmManager = new FilmManager('', '', 0, '');
    $film = $filmManager->getFilmById($id); // Assure-toi que cette méthode retourne les détails du film

    if ($film):
        ?>
        <form action="modifier_film.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($film['id']); ?>">
            <div>
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" value="<?php echo htmlspecialchars($film['titre']); ?>" required>
            </div>
            <div>
                <label for="date_sortie">Date de sortie</label>
                <input type="date" name="date_sortie" id="date_sortie" value="<?php echo htmlspecialchars($film['date_sortie']); ?>" required>
            </div>
            <div>
                <label for="duree">Durée</label>
                <input type="number" name="duree" id="duree" value="<?php echo htmlspecialchars($film['duree']); ?>" required>
            </div>
            <div>
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="genre" value="<?php echo htmlspecialchars($film['genre']); ?>" required>
            </div>
            <button type="submit" name="submit">Modifier le film</button>
        </form>
    <?php else: ?>
        <p>Film non trouvé.</p>
    <?php endif;
}
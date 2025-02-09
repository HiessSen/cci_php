<form action="../ajouter_film.php" method="post">
    <div>
        <label for="titre" >Titre</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div>
        <label for="date_sortie" >Date de sortie</label>
        <input type="date" name="date_sortie" id="date_sortie">
    </div>
    <div>
        <label for="duree" >Durée</label>
        <input type="number" name="duree" id="duree">
    </div>
    <div>
        <label for="genre" >Genre</label>
        <input type="text" name="genre" id="genre">
    </div>
    <button type="submit" name="ajouter">Ajouter un film</button>
</form>
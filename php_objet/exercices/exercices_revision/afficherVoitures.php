
<div id="voitures">
    <h1>Liste des voitures</h1>
    <div id="entete">
        <p>ID Marque Modèle Année</p>
    </div>
    <div id="corps">
        <?php
        foreach($resultat as $voiture)
        {
            $content .=
                '<p>' . $voiture['id'] . ' ' . $voiture['marque'] . ' ' . $voiture['modele'] . ' ' . $voiture['annee'] . '</p><button name="supprimer">Supprimer</button> '.PHP_EOL;
        }
        echo $content;
        ?>
    </div>
</div>
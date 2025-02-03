<?php
    $dsn = 'mysql:dbname=exos_classes_voiture;host=localhost;';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $sql = 'SELECT * FROM voiture';
    echo '<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Année</th>
    </tr>
    </thead>
    <tbody>';
    foreach ($dbh->query($sql) as $ligne) {
        echo '<tr><td>' . $ligne['id'] . '</td><td>' . $ligne['marque'] . '</td><td>' . $ligne['modele'] . '</td><td>' . $ligne['annee'] . '</td></tr>';
    }
    echo '</tbody>
    </table>';
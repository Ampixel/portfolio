<?php
require '../src/connection.php';
$bdd = Connection::connect();
$requete = $bdd->query('SELECT * from experience');
while ($experience = $requete->fetch()) {
    echo '<tr>';
    echo '<td>' . $experience['title_exp'] . '</td>';
    echo '<td>' . $experience['company'] . '</td>';
    echo '<td>' . $experience['start_date_exp'] . '</td>';
    echo '<td>' . $experience['end_date_exp'] . '</td>';
    echo '<td>' . $experience['resume_exp'] . '</td>';
    echo '<td><a href="update.php?id=' . $experience['id_experience'] . '">Update</a></td>';
    echo '<td><a href="delete.php?id=' . $experience['id_experience'] . '">Delete</a></td>';
    echo '</tr>';
}
$requete->closeCursor();
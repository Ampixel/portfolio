<?php
// require '../src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM formation');
while ($formation = $requete->fetch()) {
    echo '<tr>';
    echo '<td>' . $formation['title_for'] . '</td>';
    echo '<td>' . $formation['school'] . '</td>';
    echo '<td>' . $formation['start_date_for'] . '</td>';
    echo '<td>' . $formation['end_date_for'] . '</td>';
    echo '<td>' . $formation['resume_for'] . '</td>';
    echo '<td><a href="update.php?id=' . $formation['id_formation'] . '">Update</a></td>';
    echo '<td><a href="delete.php?id=' . $formation['id_formation'] . '">Delete</a></td>';
    echo '</tr>';
}


$requete->closeCursor();
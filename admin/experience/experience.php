<?php
require '../src/connection.php';
$bdd = Connection::connect();
$requete = $bdd->query('SELECT * from experience');
while ($item = $requete->fetch()) {
    echo '<tr>';
    echo '<td>' . $item['title_exp'] . '</td>';
    echo '<td>' . $item['company'] . '</td>';
    echo '<td>' . $item['start_date_exp'] . '</td>';
    echo '<td>' . $item['end_date_exp'] . '</td>';
    echo '<td>' . $item['resume_exp'] . '</td>';
    echo '<td><a href="experience/view.php?id=' . $item['id_experience'] . '">view</a></td>';
    echo '<td><a href="experience/update.php?id=' . $item['id_experience'] . '">Update</a></td>';
    echo '<td><a href="experience/delete.php?id=' . $item['id_experience'] . '">Delete</a></td>';
    echo '</tr>';
}
$requete->closeCursor();
Connection::disconnect();
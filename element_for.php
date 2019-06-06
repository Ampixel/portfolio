<?php
// require 'src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM formation');
$item = $requete->fetch();

while ($item = $requete->fetch()) {

    if ($item['id_formation'] % 2) {
        echo '<table class="element_rigth element_post">';
        echo '<tr>';
        echo '<td>' . htmlspecialchars($item['title_for']) . '</td>';
        echo '<td>' . htmlspecialchars($item['school']) . '</td>';
        echo '<td>' . substr($item['start_date_for'], 0, 10) . '</td>';
        echo '<td>' . substr($item['end_date_for'], 0, 10) . '</td>';
        echo '<td>' . htmlspecialchars($item['resume_for']) . '</td>';
        echo '</tr>';
        echo '</table><br/>';
    } else {
        while ($item = $requete->fetch()) {
            echo '<table  class="element_left element_post">';
            echo '<tr>';
            echo '<td>' . htmlspecialchars($item['title_for']) . '</td>';
            echo '<td>' . htmlspecialchars($item['school']) . '</td>';
            echo '<td>' . substr($item['start_date_for'], 0, 10) . '</td>';
            echo '<td>' . substr($item['end_date_for'], 0, 10) . '</td>';
            echo '<td>' . htmlspecialchars($item['resume_for']) . '</td>';
            echo '</tr>';
            echo '</table><br/>';
        }
    }
}

$requete->closeCursor();
Connection::disconnect();

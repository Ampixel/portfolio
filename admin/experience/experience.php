<?php
require '../src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM experience');
while ($item = $requete->fetch()) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($item['title_exp']) . '</td>';
    echo '<td>' . htmlspecialchars($item['company']) . '</td>';
    echo '<td>' . substr($item['start_date_exp'], 0, 10) . '</td>';
    echo '<td>' . substr($item['end_date_exp'], 0, 10) . '</td>';
    echo '<td>' . htmlspecialchars($item['resume_exp']) . '</td>';
    echo '<td><a href="experience/view.php?id=' . $item['id_experience'] . '">view</a></td>';
    echo '<td><a href="experience/update.php?id=' . $item['id_experience'] . '">Update</a></td>';
    echo '<td><a href="experience/delete.php?id=' . $item['id_experience'] . '">Delete</a></td>';
    echo '</tr>';
}
$requete->closeCursor();
Connection::disconnect();
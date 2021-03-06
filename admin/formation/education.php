<?php
// require '../src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM formation ORDER BY id_formation DESC');
while ($item = $requete->fetch()) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($item['title_for']) . '</td>';
    echo '<td>' . htmlspecialchars($item['school']) . '</td>';
    echo '<td>' . substr($item['start_date_for'], 0, 10) . '</td>';
    echo '<td>' . substr($item['end_date_for'], 0, 10) . '</td>';
    echo '<td>' . htmlspecialchars($item['resume_for']) . '</td>';
    echo '<td>' . $item['derniere_for'].'</td>';
    echo '<td><a id="btn-view" href="formation/view.php?id=' . $item['id_formation'] . '">view</a></td>';
    echo '<td><a id="btn-update" href="formation/update.php?id=' . $item['id_formation'] . '">Update</a></td>';
    echo '<td><a id="btn-delete" href="formation/delete.php?id=' . $item['id_formation'] . '">Delete</a></td>';
    echo '</tr>';
}
$requete->closeCursor();
Connection::disconnect();

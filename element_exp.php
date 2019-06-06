<?php
require 'src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM experience');
$item = $requete->fetch();

while ($item = $requete->fetch()) {

    if ($item['id_experience'] % 2) {
        echo '<div class="element_right element_post">';
        echo '<div class="contener"><div class="element_post_icon"></div>';
        echo '<div>' . htmlspecialchars($item['title_exp']) . '</div>';
        echo '<div>' . htmlspecialchars($item['company']) . '</div>';
        echo '<div>' . substr($item['start_date_exp'], 0, 10) . '</div>';
        echo '<div>' . substr($item['end_date_exp'], 0, 10) . '</div>';
        echo '<div>' . htmlspecialchars($item['resume_exp']) . '</div>';
        echo '</div>';
        echo '</div><br/>';
    } else {
            echo '<div class="element_left  element_post ">';
            echo '<div class="contener"><div class="element_post_icon_left"></div>';
            echo '<div>' . htmlspecialchars($item['title_exp']) . '</div>';
            echo '<div>' . htmlspecialchars($item['company']) . '</div>';
            echo '<div>' . substr($item['start_date_exp'], 0, 10) . '</div>';
            echo '<div>' . substr($item['end_date_exp'], 0, 10) . '</div>';
            echo '<div>' . htmlspecialchars($item['resume_exp']) . '</div>';
            echo '</div>';
            echo '</div><br/>';
    }
}

$requete->closeCursor();
Connection::disconnect();

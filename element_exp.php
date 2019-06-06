<?php
require 'src/connection.php';
$db = Connection::connect();
$requete = $db->query('SELECT * FROM experience');
$item = $requete->fetch();

while ($item = $requete->fetch()) {

    if ($item['id_experience'] % 2) {
        echo '<div class="element_right element_post">';
        echo '<div class="contener">
                <div class="element_post_icon"></div>';
        echo '<h4>' . htmlspecialchars($item['title_exp']) . '</h4>';
        echo '<div class="sous-titre">
            <p>
                <span>' . htmlspecialchars($item['company']) . '</span>
                <span>' . substr($item['start_date_exp'], 0, 10) . ' 
                au ' . substr($item['end_date_exp'], 0, 10) . '</span>
            </p></div>';
            echo '<div class="paragraphe"><p>' . htmlspecialchars($item['resume_exp']) . '</p></div>';
        echo '</div>';
        echo '</div><br/>';
    } else {
        echo '<div class="element_left  element_post ">';
        echo '<div class="contener"><div class="element_post_icon_left"></div>';
        echo '<h4>' . htmlspecialchars($item['title_exp']) . '</h4>';
        echo '<div class="sous-titre">
                <p>
                    <span>' . htmlspecialchars($item['company']) . '</span>
                    <span>' . substr($item['start_date_exp'], 0, 10) . ' 
                au ' . substr($item['end_date_exp'], 0, 10) . '</span>
                </p></div>';
        echo '<div class="paragraphe"><p>' . htmlspecialchars($item['resume_exp']) . '</p></div>';
        echo '</div>';
        echo '</div><br/>';
    }
}

$requete->closeCursor();
Connection::disconnect();

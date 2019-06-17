<?php
// require 'src/connection.php';
$db = Connection::connect();
date_default_timezone_set('UTC');
$requete = $db->query("SELECT *, DATE_FORMAT(start_date_for, '%d/%m/%Y') as dateStart, DATE_FORMAT(end_date_for, '%d/%m/%Y') as dateEnd FROM formation ORDER BY id_formation DESC");
$item = $requete->fetch();

while ($item = $requete->fetch()) {

    if ($item['id_formation'] % 2) {
        echo '<div class="element_right element_post">';
        echo '<div class="contener">
                <div class="element_post_icon"></div>';
        echo '<h4>' . htmlspecialchars($item['title_for']) . '</h4>';
        echo '<div class="sous-titre">
            <p>
                <span>' . htmlspecialchars($item['school']) . ' - </span>
                <span>' . $item['dateStart'] . ' 
                au ' . $item['dateEnd'] . '</span>
            </p></div>';
            echo '<div class="paragraphe"><p>' . htmlspecialchars($item['resume_for']) . '</p></div>';
        echo '</div>';
        echo '</div><br/>';
    } else {
        echo '<div class="element_left  element_post ">';
        echo '<div class="contener"><div class="element_post_icon_left"></div>';
        echo '<h4>' . htmlspecialchars($item['title_for']) . '</h4>';
        echo '<div class="sous-titre">
                <p>
                    <span>' . htmlspecialchars($item['school']) . ' - </span>
                    <span>' . $item['dateStart'] . ' 
                au ' . $item['dateEnd'] . '</span>
                </p></div>';
        echo '<div class="paragraphe"><p>' . htmlspecialchars($item['resume_for']) . '</p></div>';
        echo '</div>';
        echo '</div><br/>';
    }
}

$requete->closeCursor();
Connection::disconnect();

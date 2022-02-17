<?php
include "database/albums.php";

foreach ($albums as $album) {
    echo '<div class="card">' .
            '<img src="' . $album["poster"] . '">' .
            '<div class="title">' .
                $album["title"] .
            '</div>' .
            '<div class="details">' .
            '<div>' . $album["author"] . '</div>' .
            '<div>' . $album["year"] . '</div>' .
            '</div>' .
        '</div>';

}

?>
<?php
include "database/albums.php";

foreach ($albums as $album) {
    echo '<div class="card">' .
            '<div>' .
                '<div class="picture">' .
                    '<img src="' . $album["poster"] . '">' .
                '</div>' .
                '<div class="title">' .
                    $album["title"] .
                '</div>' .
            '</div>' .
            '<div>' .
                '<div class="details">' .
                    '<div>' . $album["author"] . '</div>' .
                    '<div>' . $album["year"] . '</div>' .
                '</div>' .
            '</div>' .
        '</div>';

}

?>
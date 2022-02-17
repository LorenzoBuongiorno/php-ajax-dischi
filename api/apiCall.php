<?php
    include "../database/albums.php";

    header("Content-Type: application/json");

    echo json_encode($albums);

<?php

// la lista di album viene letta da un file esterno
$albumContent = file_get_contents('./dischi.json');
$albumList = json_decode($albumContent);

header("Content-Type: application/json");
echo json_encode($albumList);



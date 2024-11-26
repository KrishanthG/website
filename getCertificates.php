<?php
// file: getCertificates.php

header('Content-Type: application/json');

// Define the path to the certificates folder
$folder = "certificates/";

// Fetch all image files from the certificates folder
$images = glob($folder . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);

// Convert image paths into a JSON array
$imageList = array_map(function($image) {
    return [
        "url" => $image,
        "name" => pathinfo($image, PATHINFO_FILENAME)
    ];
}, $images);

// Output as JSON
echo json_encode($imageList);

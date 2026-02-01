<?php
// Shan Ali SMM Panel API Handler
header('Content-Type: application/json');

$api_key = "6800c815522f9b020c9b3ab0efeb8e20"; // آپ کی اصلی کی
$api_url = "https://smmglobe.com/api/v2";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_data = [
        'key' => $api_key,
        'action' => 'add',
        'service' => $_POST['service'],
        'link' => $_POST['link'],
        'quantity' => $_POST['quantity']
    ];

    $ch = curl_init($api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    
    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}
?>

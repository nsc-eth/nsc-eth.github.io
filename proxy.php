<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = "nsc-eth.github.io/process_form.php"; // Update with your local server URL
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
} else {
    http_response_code(400);
    echo "Bad Request";
}
?>

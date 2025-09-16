<?php
// sendmail.php
header("Content-Type: application/json");

// Lire le corps JSON envoyé depuis JS
$payload = json_decode(file_get_contents("php://input"), true);

// Vérifier que toutes les infos sont présentes
if (!$payload || !isset($payload['service_id'], $payload['template_id'], $payload['user_id'], $payload['template_params'])) {
    http_response_code(400);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
    exit;
}

// Préparer la requête vers EmailJS
$ch = curl_init("https://api.emailjs.com/api/v1.0/email/send");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));

// Envoyer la requête
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Retourner la réponse à ton JS
http_response_code($http_code);
echo $response;
?>

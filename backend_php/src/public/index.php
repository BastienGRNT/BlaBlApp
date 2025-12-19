<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\App;

header("Content-Type: application/json; charset=UTF-8");

$app = new App();

echo json_encode([
    "message" => $app->getWelcomeMessage(),
]);
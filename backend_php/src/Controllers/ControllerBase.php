<?php

namespace App\Controllers;

use JetBrains\PhpStorm\NoReturn;

class ControllerBase
{
    #[NoReturn]
    public function succes(string $message) : void
    {
        header("Content-Type: application/json; charset=UTF-8");
        http_response_code(200);

        echo json_encode([
            "status" => "success",
            "message" => $message
        ]);
        exit;
    }

    #[NoReturn]
    public function error(string $message, int $code) : void
    {
        header("Content-Type: application/json; charset=UTF-8");
        http_response_code($code);

        echo json_encode([
            "status" => "error",
            "message" => $message
        ]);
        exit;
    }

    protected function getBodyData(): array
    {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        return $data ?? [];
    }
}
<?php

namespace app\Traits;

trait ApiResponseFormatter {
    public function apiResponse($code = 200, $message = "success", $data = [])
    {
        header('Content-Type: application/json');
        
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data,
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

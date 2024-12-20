<?php

namespace App\Http\Controllers;

abstract class Controller
{

    /**
     * sendResponse - отправка ответа для пользователя
     * 
     * @param string $message
     * @param int $code
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function sendResponse(string $message, int $code = 200)
    {
        $response = [
            'success' => false,
            'data' => [
                'message' => '',
            ]

        ];

        match ($message) {
            empty($message) => $response = [
                'success' => false,
                'data' => [
                    'message' => 'Ошибка'
                ]
            ],
            default => $response = [
                'success' => true,
                'data' => [
                    'message' => $message
                ]
            ]
        };

        return response()->json($response, $code);
    }
}

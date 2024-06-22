<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function success($result, $message)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        $data = array_merge($result, $response);


        return response()->json($data, 200);
    }
    public function error($error = [], $message = 'Something went wrong')
    {
        return response()->json([
            'error' => $error,
            'status' => false,
            'message' => $message
        ], 400);
    }
}

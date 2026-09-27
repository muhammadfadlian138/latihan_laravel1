<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OllamaController
{
    public function ask(Request $request)
    {
        $prompt = $request->query('prompt');

        $data = [
            "prompt" => $prompt
            ,"model" => "smollm2:135m"
            , "stream"=> false
        ];

        $ch = curl_init("http://localhost:11434/api/generate");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);

        $ollama = json_decode($response, true);
        // echo $response;

        return response()->json([
            'response' => $ollama['response']
        ]);
    }
}
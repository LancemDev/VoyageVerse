<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Client;

class EmailController extends Controller
{
    
    public function ValidateEmail(Request $request){
        // $validatedData = $request->validate([
        //     'email-address' => 'required|email',
        //     // Other validation rules
        // ]);
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        $url = 'https://emailvalidation.abstractapi.com/v1/?api_key=32b329c60f72467280c315963bf81de8&email='.$validatedData['email'];

        $client = new Client();

        try {
            $response = $client->get($url);
            $apiData = $response->getBody();

            // Process the $apiData as needed

            return response()->json($apiData);
        } catch (\Exception $e) {
            // Handle exceptions and errors
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

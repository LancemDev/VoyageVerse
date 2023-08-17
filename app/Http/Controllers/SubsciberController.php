<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubsciberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);

        $api_key = env('EMAIL_VALIDATION_API_KEY');
        $email = $request->email;
        $url = "https://emailvalidation.abstractapi.com/v1/?api_key=$api_key&email=$email";
        $response = json_decode(file_get_contents($url));

        // check if email is valid using the is_valid_format property
        // $response->json()

        if (!$response->is_valid_format) {
            return response()->json([
                'message' => 'Invalid email format',
            ], 422);
        }

        return view('test', compact('response'));

        // dd($response);

        // Subscriber::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        //
    }
}

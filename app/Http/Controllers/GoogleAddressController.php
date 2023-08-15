<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $api_key = env('GOOGLE_PLACES_API_KEY');
        $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query=Tourist+Destinations+in+Philippines&key=' . $api_key;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);

        dd($data);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

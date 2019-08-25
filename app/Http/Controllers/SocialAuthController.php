<?php

namespace App\Http\Controllers;

use http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Psy\Util\Json;

class SocialAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Sends the user to the service provider to gain access
     *
     * @param $service
     * @return mixed
     */
    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    /**
     * Receives the user from the service provider with the details including the token
     *
     * @param $service
     * @return mixed
     */
    public function callback($service){
        return Socialite::with($service)->user();
    }

    /**
     * Get the required scopes from the specific social provider
     * @param $service
     * @param array $scopes
     * @return mixed
     */
    public function redirectWithScopes( $service, $scopes = [])
    {
        return Socialite::driver($service)
            ->setScopes($scopes)
            ->redirect();

    }

    /**
     * Deletes the providers data from our database
     *
     * @param $user
     * @return mixed
     */
    public function dataDeletion($user)
    {
        return response()->json(['message' => 'deleted!']);

    }

    /**
     * De-authorizing the application from the service provider
     *
     * @param $user
     * @return mixed
     */
    public function deAuthorize($user)
    {
        return response()->json(['message' => 'deauthorized!']);

    }
}

<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }

    // public function logout()
    // {
    //     $accessToken = Auth::user()->token();
    //         \DB::table('oauth_refresh_token')
    //             ->where('access_token_id', $accessToken->id)
    //             ->update([
    //                 'revoked' => true
    //             ]);
    //             $accessToken->revoke();
    // }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class AuthentificationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška prilikom registracije!', $validator->errors()]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('Marija_Registracija_Token')->plainTextToken;

        $json_odgovor = [
            'Korisnik: ' => $user,
            'Token za registraciju: ' => $token,
        ];

        return response()->json($json_odgovor);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška prilikom logina!', $validator->errors()]);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['Info: ' => 'Pogresan email ili lozinka']);
        } else {
            $token = $user->createToken('Marija_Login_token')->plainTextToken;
            $json_odgovor = [
                'Korisnik: ' => $user,
                'Login token: ' => $token
            ];

            return response()->json($json_odgovor);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json('Korisnik je uspešno izvršio logout.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $response = Http::get('https://dummyjson.com/users?limit=100');
        $users = $response->json()['users'] ?? [];

        $usersByState = [];
        foreach ($users as $user) {
            $state = $user['address']['state'] ?? 'Unknown';
            $fullName = trim(($user['firstName'] ?? '') . ' ' . ($user['lastName'] ?? ''));
            $usersByState[$state][] = [
                'fullName' => $fullName,
                'username' => $user['username'] ?? 'Unknown'
            ];
        }

        ksort($usersByState);

        foreach ($usersByState as &$stateUsers) {
            usort($stateUsers, function($a, $b) {
                return strcmp($a['fullName'], $b['fullName']);
            });
        }
        return view('users.index', ['usersByState' => $usersByState]);
    }
}

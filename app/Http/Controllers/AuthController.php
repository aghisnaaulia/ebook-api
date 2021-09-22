<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return ['NIS' => 3103119005,
            'name' => 'Aghisna Aulia Rahma',
            'gender' => 'female',
            'phone' => '081226045782',
            'class' => 'XII RPL 1'];
    }
}

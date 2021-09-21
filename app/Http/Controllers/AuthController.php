<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return ['NIS' => 3103119062,
            'name' => 'Ezar Satria P',
            'gender' => 'male',
            'phone' => '08157684062',
            'class' => 'XII RPL 2'];
      }
    }
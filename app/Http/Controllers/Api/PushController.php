<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PushController extends Controller
{
    public function getKey()
    {
        return [
            'key' => config('webpush.vapid.public_key')
        ];
    }
}

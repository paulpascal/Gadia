<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CdiController extends Controller
{
    public function show()
    {
        return view('direction.settings.cdi.cdi');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Laravel\Lumen\Routing\Controller as BaseController;
use Random\Hash\HashController;

class apiController extends BaseController
{
    public function get ()
    {
        # get
        return HashController::generateHash();

    }
}

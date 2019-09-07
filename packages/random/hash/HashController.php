<?php

namespace Random\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class HashController extends Controller
{
    public function __construct() {
        //
    }

    /**
     * Requests Instagram pics.
     *
     * @return Response
     */
    public static function generateHash()
    {
        $hashCode =  response()->json([
            'hash' =>HashController::randomstr(),
        ]);
        Log::info($hashCode);

        return $hashCode;
    }

    /**
     * @param BaseClosure $errorFormatter
     */
    public static function randomstr()
    {

            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ12345689';
            $my_string = '';
            for ($i = 0; $i < 255; $i++) {
                $pos = mt_rand(0, strlen($chars) -1);
                $my_string .= substr($chars, $pos, 1);
            }
            return $my_string;

    }

}

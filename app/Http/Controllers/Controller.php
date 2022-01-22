<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    // returnWithSuccess is created for better success response 
    /**
     * @param string $message
     * @param array $data
     * @param mixed $code=200
     * 
     * @return [type]
     */
    public function returnWithSuccess($message = '',$data = [],$code=200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data
        ],$code);
    }

     // returnWithError is created for better error response
    /**
     * @param string $message
     * @param array $data
     * @param mixed $code=400
     * 
     * @return [type]
     */
    public function returnWithError($message = '', $data = [], $code=400)
    {
        return response()->json([
            'error' => true,
            'message' => $message,
            'data'    => $data
        ],$code);
    }
}

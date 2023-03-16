<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\CommonFunctionTrait;
use App\Http\Controllers\Controller;
use Auth;

class TaskController extends Controller
{
    use CommonFunctionTrait , ApiResponseTrait;
    public function index(){

        $data=array(
            'success' => 'Success',
			'result'  => Auth::id(),
        );
        return $this->apiResponse($data);
    }
}
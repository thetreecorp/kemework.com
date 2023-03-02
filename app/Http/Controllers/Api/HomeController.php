<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return 'hello';
    }
}

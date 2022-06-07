<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Animal;

class HomeController extends Controller
{


        public function __invoke(){
            return view('home');
        }

       
    }


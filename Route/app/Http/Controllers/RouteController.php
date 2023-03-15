<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller{

        public function greeting0(){
            return "greeting0";
        }
        public function greeting1(){
            return "greeting1";
        }
        public function greeting2(){
            return "greeting2";
        }
        public function greeting3($id,$class){
            return $id.': '.$class;
        }
    
}

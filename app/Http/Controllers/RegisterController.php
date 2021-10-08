<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class RegisterController extends Controller
{
    protected function index(Request $request)
    {

        $data = new stdClass();
        $data->name = explode(" ", $request["fullname"])[0];
        $data->email = $request["email"];
        $data->category = $request["category"];
        return $request["category"]=="student" ? view("home")->with("data",$data) : view("admin")->with("data",$data);
    }
}

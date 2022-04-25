<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function list(){
        echo json_encode(array("success" => true, "data" => Comment::all()));
    }
}

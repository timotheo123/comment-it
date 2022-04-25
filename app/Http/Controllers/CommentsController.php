<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function list(){
        $comments = DB::table("comments")
                    ->selectRaw("name, comment, DATE_FORMAT(CONVERT_TZ(created_at,'+00:00','+8:00'), '%Y-%m-%d %h:%i %p') as created_at")
                    ->orderByDesc("created_at")
                    ->get();

        echo json_encode(array("success" => true, "data" => $comments));
    }

    public function store(Request $request){

        $this->validate($request, [
            "name" => "required",
            "comment" => "required"
        ]);

        $comment = new Comment;
        $comment->name = $request->input("name");
        $comment->comment = $request->input("comment");

        if($comment->save()){
            echo json_encode(array("success" => true, "message" => "Comment has been saved!"));
        }
        else{
            echo json_encode(array("success" => false, "message" => "Saving comment failed!"));
        }
    }
}

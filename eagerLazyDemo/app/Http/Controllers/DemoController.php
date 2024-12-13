<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DemoController extends Controller
{
    public function lazyLoading()
    {
        $users = User::all()->take(5000);

        foreach($users as $user){
            echo "User: " . $user->name ."<br>";
            foreach($user->posts as $post)
            {
                echo "Post: " . $post->title . "<br>";
            }
            echo "<br>";
        }
    }

    public function eagerLoading(){

        $users = User::with('posts')->take(5000)->get();

        foreach($users as $user){
            echo "User: " . $user->name ."<br>";
            foreach($user->posts as $post)
            {
                echo "Post: " . $post->title . "<br>";
            }
            echo "<br>";
        }
    }




}

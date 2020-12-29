<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use \App\Post;



class TweetController extends Controller
{
    
    public function showtweet(){
        $posts = Post::latest()->get();
        $posts->load('user');
        return view('home',[
            'posts' => $posts
        ]);
    }

    public function posttweet(Request $request){
        $validator = $request->validate([
            'body'  => ['required','string','max:255']
        ]);
        Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->body,
        ]);
        return back();
    }
  
    public function postdelete(Request $request)
  {
      $posts = Post::find($request->id);
      $posts->delete();
      return redirect('/home');
  }

   

}



  


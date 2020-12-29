@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              <div class="wrapper">
            <form action="/home" method="post">
            {{ csrf_field() }}
                <div class="text-right">
                    <input class="form-control" type="text" name="body" placeholder="いまどうしてる"><br>
                    <button  class="btn btn-default" type="submit" >つぶやく</button>
                </div>
                @if($errors->first('body')) 
                    <p>※{{$errors->first('body')}}</p>
                @endif
            </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card py-3">
            <div class="tweet-wrapper"> 
                @foreach($posts as $post)
                <div>
                    <a class="px-5">{{ $post->user->name }}</a>
                    <p class="text-right px-5">{{ $post->created_at }}</p>
                    <p class="text-left px-5">{{ $post->body }}</p>
                    @if(Auth::id() == $post->user->id)
                    <div class="text-right px-5">
                        <a href="{{ action('Auth\TweetController@postdelete', ['id' => $post->id]) }}">削除</a>
                    </div>
                    @endif
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>
            
@endsection

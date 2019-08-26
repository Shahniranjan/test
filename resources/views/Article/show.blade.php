@extends('layouts.Alayout')

@section('content')
    <div>
        <h1 class="display-3">{{$article->title}}</h1>
        <h3 >BY {{$article->user['name']}}</h3>
        <h3>Created : {{$article->created_at->diffForHumans()}}</h3>
        <h3>Views: {{$article->view}}</h3>
    </div>
    <div class="content">

        <p class="lead">{!! $article->body !!}</p>
    </div>



    @endsection
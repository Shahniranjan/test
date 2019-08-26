@extends('layouts.Alayout')

@section('content')
    <h1>index page</h1>

    @if(Session::has('deleted_article'))
        <div class="alert alert-danger">
            <p>{{session('deleted_article')}}</p>
        </div>
    @elseif(Session::has('updated_article'))
        <div class="alert alert-success ">
            <p>{{session('updated_article')}}</p>
        </div>
    @elseif (Session::has('created_article'))
        <div class="alert alert-info ">
            <p>{{session('created_article')}}</p>
        </div>
    @endif


    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">AUTHOR</th>
            <th scope="col">TITLE</th>
            <th scope="col">BODY</th>
            <th scope="col">CREATED_AT</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->user['name']}}</td>
            <td><a href="{{route('article.edit',[$article->id])}}"> {{$article->title}}</a></td>
            <td>{!!  $article->body!!}</td>
            <td>{{$article->created_at->diffForHumans()}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    @endsection
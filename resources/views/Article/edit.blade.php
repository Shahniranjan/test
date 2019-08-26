@extends('layouts.Alayout')
@section('content')
    <h1>Edit Aritcle</h1>

    <div class="row">

    {!! Form::model($article,['method'=>'PATCH','action'=>[ 'ArticleController@update',$article->id]]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:')!!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group ">
        {!! Form::label('body', 'Description:')!!}
        {!! Form::textarea('body',null,['class'=>'form-control ']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Article',['class' =>'btn btn-primary col-sm-6']) !!}
    </div>
    {!! Form::close() !!}
    </div>

    <div class="row ">

    {!! Form::open(['method'=>'DELETE','action'=>['ArticleController@destroy',$article->id]]) !!}

    <div class="form-group">
        {!! Form::submit('Delete Article',['class' =>'btn btn-danger row-sm-9']) !!}
    </div>

    {!! Form::close() !!}
    </div>
    <div class="row">
        @include('include.formerror');
    </div>
    @endsection
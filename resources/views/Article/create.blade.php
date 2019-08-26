@extends('layouts.Alayout')
@section('content')
    <h1>Create Article</h1>

    <div class="row">

        {!! Form::open(['action'=>'ArticleController@store']) !!}
        @csrf
        <div class="form-group">
            {!! Form::label('title', 'Title:')!!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('body', 'Description:')!!}
            {!! Form::textarea('body',null,['class'=>'form-control ']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Article',['class' =>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="row">
        @include('include.formerror')
    </div>
    @endsection
@extends('layouts.Alayout')

@section('content')
    @if($articles)
        @foreach($articles as $article)


            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <hr>

                    <hr>

                    <hr>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#">{{$article->title}}</a>
                    </h2>
                    <p class="lead">
                        by <a href="#">
                            {{$article->user->name}}
                            </a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span>{{$article->created_at->diffForHumans()}}
                    <br>
                        views : {{$article->view}}
                    </p>
                    {!! $article->body !!}
                    <a class="btn btn-primary" href="{{route('article.show',[$article->id])}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>
                </div>
            </div>

        @endforeach
    @endif
@endsection

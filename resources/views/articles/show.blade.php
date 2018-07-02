@extends('app')
@section('content')
    <h1>Articles</h1>
    <hr>

        <article>
            <div class="body">
                {{$article->content}}

            </div>
        </article>

@stop
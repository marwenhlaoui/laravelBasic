

@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home page </div>

                <div class="panel-body">
                    <ul>
                        @foreach($posts as $post)
                            <li><a href="{{ route('post_path',$post->slug) }}">{{ $post->title }}</a></li>
                         @endforeach
                     </ul> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
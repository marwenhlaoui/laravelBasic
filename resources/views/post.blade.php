
@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }} </div>

                <div class="panel-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
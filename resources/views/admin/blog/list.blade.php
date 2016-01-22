@extends('layouts.admin')
<?php $menu = 'blog';?>
@section('title')
    - Blog
@endsection
@section('pg')
    <i class="fa fa-blog"></i> Blog
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="" class="btn btn-info btn-fill pull-right">Add New Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">List of Posts</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th></th>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
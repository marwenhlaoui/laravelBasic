
@extends('layouts.admin')
<?php $menu = 'users';?>
@section('title')
    - Users
@endsection
@section('pg')
    <i class="fa fa-users"></i> Users
@endsection
@section('content')
   <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="header">
                   <h4 class="title">List of Users</h4>
                   <p class="category">Here is a subtitle for this table</p>
               </div>
               <div class="content table-responsive table-full-width">
                   <table class="table table-hover table-striped">
                       <thead>
                       <th>ID</th>
                       <th>Name</th>
                       <th>E-mail</th>
                       </thead>
                       <tbody>
                       @foreach ($users as $user)
                           <tr>
                               <td>{{ $user->id }}</td>
                               <td>{{ $user->name }}</td>
                               <td>{{ $user->email }}</td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>

               </div>
           </div>
       </div>
   </div>
@endsection
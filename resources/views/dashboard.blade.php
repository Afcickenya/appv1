@extends('layouts.admin')
@section('content')
     <!-- Latest Users -->
     <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Staff Members</h3>
            @if (session()->has('message'))
                <div class=" alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif
        </div>
        <div class="panel-body">
           <h4><a href="/addstaff" class="btn btn-primary">Add Staff</a></h4> 
            <table class="table table-striped table-hover">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th >Action</th>
                    
                </tr>
               
                @foreach ($users as $user)
                 <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="" class="btn btn-danger">Delete Staff</a></td>
                </tr>
                @endforeach
                
              
                
            </table>
        </div>
    </div>
@endsection

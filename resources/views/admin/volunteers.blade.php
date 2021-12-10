@extends('layouts.admin')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Volunteer Requests</h3>
        @if (session()->has('message'))
            <div class=" alert alert-success">
                {{session()->get('message')}}
            </div>
        @endif
    </div>
    <div class="panel-body">
     
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Sent:On</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th class="text-center" >body</th>
                
            </tr>
           
            @foreach ($volunteers as $volunteer)
             <tr>
              <td>{{$volunteer->id}}</td>
              <td>{{date('jS M Y',strtotime($volunteer->created_at))}}</td>
              <td>{{$volunteer->name}}</td>
              <td>{{$volunteer->email}}</td>
              <td>{{$volunteer->phone}}<td>
              <td>{{$volunteer->body}}<td>
            </tr>
            @endforeach            
        </table>
    </div>
</div>
@endsection
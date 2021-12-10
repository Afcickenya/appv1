@extends('layouts.admin')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">contact Requests</h3>
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
               
                <th class="text-center" >body</th>
                
            </tr>
           
            @foreach ($contacts as $contact)
             <tr>
              <td>{{$contact->id}}</td>
              <td>{{date('jS M Y',strtotime($contact->created_at))}}</td>
              <td>{{$contact->name}}</td>
              <td>{{$contact->email}}</td>
             
              <td>{{$contact->body}}<td>
            </tr>
            @endforeach            
        </table>
    </div>
</div>
@endsection
@extends('layouts.app')
 @section('content')
  <div class="container">
    <h1 class="text-center text-muted">Notice Board</h1>

    
        <div class='card m-5 p-5'>
        <ul class='list-group'>
         @if (count($notices)>0)
          @foreach ($notices as $notice)
          <li class='list-group-item'>    
            <h4><a href="{{ route('Show',$notice->id) }}">{{  $notice->title }}<a></h4>
            <small>Post Time:{{ $notice->created_at }}</small>
        </li>
        
          @endforeach
          
    
         @endif
               
        </ul>

        <div class="container"><button class="btn btn-link">{{$notices->links('pagination::bootstrap-4')}}</button></div>
        
        </div>
  </div>
     
 @endsection


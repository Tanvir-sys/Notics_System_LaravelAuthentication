@extends('layouts.app')
 @section('content')
  <div class="container">
    <h1 class="text-center text-muted">Notice Board</h1>

    
        <div class='card m-5 p-5'>
        <ul class='list-group'>
        
         
          <li class='list-group-item'>    
            <h4><a href="">{{  $notices->title }}<a></h4>
                <p>{{ $notices->description }}</p>

            <small>Post Time:{{ $notices->created_at }}</small>
        </li>
        
       
               
        </ul>

        
        
        </div>
  </div>
     
 @endsection


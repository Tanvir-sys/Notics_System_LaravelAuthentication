@extends('layouts.dashboard')
@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4"></h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Notice </li>
            </ol>

        <form action="{{ route('Notice.create') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="container">

                <div class="form-gorup col-md-4 mt-3">
                    
                    <div class="mb-5" >
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    <div class="mb-5" >
                        <label for="description"><h4>Description</h4></label>
                        <textarea type="text" class="form-control" id="description" name="description" ></textarea>
                    </div>

                </div>

            </div>
            <div class="container"><input type="Submit" name="submit" class="btn btn-success mt-5"></div>
        </div>
    </form>
    </main>

@endsection
@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <h1 class="mt-4">Covid-19 Information</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Covid-19 Information</a></li>
                <li class="breadcrumb-item active">covid-19 Information List</li>
            </ol>
            <table class="table">
                <thead>
                  <tr>
                    {{-- <th scope="col">Serial</th> --}}
                    <th class="" scope="col">Country</th>
                    <th scope="col">Today Cases</th>
                    <th scope="col">Total Cases</th>
                    <th scope="col">Total Deaths</th>
                    <th scope="col">Today Deaths</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @if (count($notices)>0) --}}
                    @foreach ($data as $iteam)
                        <tr>
                        <th scope="row">{{$iteam['country']}}</th>
                            
                            <td>{{$iteam['todayCases']}}</td>
                            
                            <td> {{$iteam['cases']}}  </td>
                            <td> {{$iteam['deaths']}}  </td>
                            <td> {{$iteam['todayDeaths']}}  </td>
                        </tr>
                    @endforeach
                    {{-- @endif --}}


                </tbody>
              </table>
    </main>

@endsection
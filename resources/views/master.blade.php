<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    @yield('title')
    </title>
</head>
<body>

    @yield('content')


    @section('js')
        <script src="js/1.js" />
    @show
    <p>js結束</p>
</body>
</html>

//resources/views/index.blade.php
@extends('layouts.master')


@section('js')
    <script src="2.js" />
    @parent
@stop

@section('title','首頁')

@section('content')
<div class="container clearfix">
    我的內容
</div>

 @foreach ($data as $tmp)
     <h2>{{ $tmp }}</h2>
     <h3>{{ $loop->index }} </h3>
 @endforeach
@stop


//routes/web.php
Route::get('/index','HomeController@index');

//app/Http/Controllers/HomeController.php
public function index()
{
    return view('index');
}

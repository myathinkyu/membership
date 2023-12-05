@extends('layout.master')

@section('title', 'home')

@section('content')

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
    </div>  
@endif

<style>
    .fullscreen{
        background: gray;
        height: calc(100vh - 50vh);
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="fullscreen">
    <h2>PHP with Laravel</h2>
</div>

@endsection
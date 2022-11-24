@extends('layouts.app')
@section('content')
<div class="text-center container">
    <h1>This is Dashboard !</h1>
    <h3>Welcome to Article App</h3>
    <form action="{{route('logout')}}" method="GET">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection
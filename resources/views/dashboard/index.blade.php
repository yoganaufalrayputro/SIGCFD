@extends('layout.main')

@section('container')

<h1>Welcome</h1>

<a href="/logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
<form action="/logout" id="logout-form" method="post">
@csrf
</form>

@endsection



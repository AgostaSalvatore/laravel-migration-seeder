@extends('layouts.master')

@section('title', 'Welcome')

@section('content')
    
<div class="container-fluid">
    <h1>
        Lista Treni
    </h1>
</div>

<ul>
    @foreach ($trains as $train)
        <li>
            
        </li>
    @endforeach
</ul>

@endsection

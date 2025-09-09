@extends('layouts.app')

@section('content')
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 60vh; text-align: center;">
    <h2 style="font-size: 2rem; color: #2d3748; margin-bottom: 0.5rem;">
        Welcome, {{ Auth::user()->name }}
    </h2>
    <p style="font-size: 1.2rem; color: #4a5568;">
        You are logged in!
    </p>
</div>
@endsection

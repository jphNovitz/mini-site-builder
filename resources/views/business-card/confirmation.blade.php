@extends('layout.base')
@section('content')
    @if(session('success'))
        <div class="bg-green-600 text-white p-4">
            {{ session('success') }}
        </div>
    @endif

@endsection

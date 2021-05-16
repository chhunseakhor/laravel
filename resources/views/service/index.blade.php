@extends ('app')
@section('title','Service page')
    <!-- @section('content')
    @endsection -->

    <h1>Welcome to laravel 8 from Services</h1>

<form action="/service" method="post">
    <input type="text" name="name" autocomplete="off" >
    @csrf
    <button>Add service</button>
</form>
        <ul>
            <h1>Services Page</h1>
        @forelse($service as $item)
            <li>{{ $item->name }}</li>
        @empty
            <li>server is empty</li>
        @endforelse
        </ul>



@extends ('app')
@section('title','Service page')
    @section('content')


        <ul>
            <h1>Services Page</h1>
        @forelse($service as $item)
            <li>{{ $item }}</li>
        @empty
            <li>server is empty</li>
        @endforelse
        </ul>
    @endsection


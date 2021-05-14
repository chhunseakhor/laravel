@extends ('app')
@section('title','Service page')
@section('content')
<h1>Services Page</h1>
<ul>
    @foreach( $services as $services)
        <li>{{$services}}</li>
    @endforeach
</ul>
@endsection

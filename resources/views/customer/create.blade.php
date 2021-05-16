<h1>Add new Cutomer</h1>
<form action="/laravel/public/customer" method="post">
    <div>
        <label for="name">name</label>
        <input type="text" name="name" autocomplete="off" value="{{old('name')}}">
    </div>

    @error('name') <p>{{$message}}</p>@enderror
    <div>
        <label for="email">email</label>
        <input type="text" name="email" autocomplete="off" value="{{old('email')}}">
    </div>
    @error('email')<p>{{$message}}</p>@enderror
    @csrf
    <button>add New Cutomer</button>
</form>

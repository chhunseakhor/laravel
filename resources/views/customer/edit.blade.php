<h1>edit Customer</h1>

<form action="/laravel/public/customer/{{$customer->id}}" method="post">



    @method('PATCH')

    <div>
        <label for="name">name</label>
        <input type="text" name="name" autocomplete="off" value="{{$customer->name}}">
    </div>

    @error('name') <p>{{$message}}</p>@enderror
    <div>
        <label for="email">email</label>
        <input type="text" name="email" autocomplete="off" value="{{$customer->email}}">
    </div>
    @error('email')<p>{{$message}}</p>@enderror
    @csrf
    <button>Save Cutomer</button>
    
</form>

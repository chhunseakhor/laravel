<h1>Customer Details</h1>

<a href="/laravel/public/customer">back</a>

<div>
    <strong>Name</strong>
    <p>{{$customer->name}}</p>
</div>

<div>
    <strong>email</strong>
    <p>{{$customer->email}}</p>
</div>

<div>

<a href="/laravel/public/customer/{{$customer->id}}/edit">edit</a>
</div>



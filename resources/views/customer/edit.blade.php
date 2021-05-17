<h1>edit Customer</h1>

<form action="/laravel/public/customer/{{$customer->id}}" method="post">
    @method('PATCH')
    @include('customer.form')
    <button>Save Cutomer</button>

</form>

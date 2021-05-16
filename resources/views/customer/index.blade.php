<h1>Customer Page</h1>
<a href="/laravel/public/customer/create" >Add New Customer</a>
@forelse($customer as $person)
    <a href="/laravel/public/customer{{$customer->id}}">{{$customer->name}}</a>
    <p><strong>{{$person->name}}</strong> {{$person->email}}</p>
@empty
<li>Customer is empty</li>
@endforelse

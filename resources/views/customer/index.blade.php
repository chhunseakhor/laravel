<h1>Customer Page</h1>

<a href="/laravel/public/customer/create" >Add New Customer</a>

@forelse($customer as $person)

    <p><strong><a href="/laravel/public/customer/{{$person->id}}">{{$person->name}}</a>
    </strong> {{$person->email}}</p>
@empty
    <li>Customer is empty</li>
@endforelse

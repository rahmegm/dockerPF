

@section('content')

<h2>Create</h2>

@if (session()->has('message'))
{{ session()->get('message') }}

@endif

<form action="{{ route('users.store')}}" method="post">
    @csrf
    <input type="text" name="firstname" placeholder="Your firtName">
    <input type="text" name="lastname" placeholder="Your lastname">

    <input type="text" name="email" placeholder="Your email">
    <input type="text" name="password" placeholder="Your password">

    <button type="submit">create</button>
</form>


@endsection
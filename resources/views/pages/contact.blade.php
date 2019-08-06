@extends('layouts.default')

@section('content')


    <h1>Anthony's Contacts Page</h1>
    <p class="lead">Use this document as a way to reach out.<br> All you have to do is leave me a message.</p>

    <form>
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="email" class="form-control" id="Email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name= "body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Post message</button>
    </form>


@endsection

@extends('layouts.default')

@section('content')


    <h1>Anthony's Contacts Page</h1>
    <p class="lead">Use this document as a way to reach out.<br> All you have to do is leave me a message.</p>

    <form action="/contact" method="post">
        @csrf
        <div class="form-group">
            <label for="user">Name</label>
            <input name="user" class="form-control" id="user" placeholder="name">

        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Post message</button>
    </form>


@endsection

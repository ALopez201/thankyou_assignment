@extends('layouts.default')

@section('content')


    <h1>Anthony's Contacts Page</h1>
    <p class="lead">Use this document as a way to reach out.<br> All you have to do is leave me a message.</p>

    <form role="form" id="name" class="contact-form" method="POST" action="{{route("contact.Store")}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Message"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn main-btn pull-right">Send a message</button>
            </div>
        </div>
    </form>
    </div>
    </div>
@endsection

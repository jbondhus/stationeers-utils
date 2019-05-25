@extends('base')

@section('content')
    <form id="login-form" onsubmit="event.preventDefault();">
        <div class="form-group">
            <label for="email-input">Email address</label>
            <input type="email" class="form-control" id="email-input" autocomplete="username email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password-input">Password</label>
            <input type="password" class="form-control" id="password-input" autocomplete="current-password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

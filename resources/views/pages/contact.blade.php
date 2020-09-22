@extends('layouts.app')

@section('contant')

    <h1>Contact Us</h1>
    <he  />
    <form action="">
        
        <div class="form group">
            <label for="name">Name </label>
            <input type="text" class="form-control" name="name">

        </div>

        <div class="form group">
            <label for="name">Email </label>
            <input type="text" class="form-control" name="email">

        </div>
        
        <div class="foum group pull-right">
            <button type="button" class="btn btn-info">Send</button>
        </div>
    </form>

@endsection

@extends('layout.layout')

@section('content')
<div>
    <h1>New User</h1>
    <form action="/index" method="POST">
        @csrf
        <label for="username">Enter username: </label>
        <input type="text" id="username" name="username">
        <label for="password">Enter password: </label>
        <input type="text" id="password" name="password">
        <fieldset>
            <label for="">Game Platform</label>
            <br />
            <input type="checkbox" name="gamePlatform[]" value="steam"> Steam<br />
            <input type="checkbox" name="gamePlatform[]" value="garena"> Garena<br />
            <input type="checkbox" name="gamePlatform[]" value="blizzard"> Blizzard<br />
            <input type="checkbox" name="gamePlatform[]" value="epic"> Epic<br />
            
        </fieldset>
        <input type="submit" name="" id="" value="Add user">
    </form>
</div>
@endsection
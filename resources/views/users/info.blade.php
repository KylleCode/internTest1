@extends('layout.layout')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="content">
            <div class="mt-16">
                <div style="color: white;">
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">USERS - {{ $user->ID }}</h2>
                    <p class="username">username - {{ $user->username }}</p>
                    <p class="password">username - {{ $user->password }}</p>
                    <p class="gamePlatform">Game Platforms: </p>
                    <ul>
                        @foreach($user->gamePlatform as $gamePlatform)
                            <li>{{ $gamePlatform}}</li>
                        @endforeach
                    </ul>
                    <form action="/index/{{ $user->ID }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete User</button>
                        <!--input type="submit" value="delete"-->
                    </form>
                </div>
                <a href="/index" class="back"><- back to index</a>
            </div>
        </div>
    </div>
</div>
@endsection
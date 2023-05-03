@extends('layout.layout')

@section('content')
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="content">
            <div class="mt-16">
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">USERS</h2>
                    @foreach($users as $user)
                        <div style="color:white">
                            {{ $user->username }} - {{ $user->password }}
                        </div>
                    @endforeach
                </div>
                <a href="/" class="back" style="color: white;"><- back to main</a>
            </div>
        </div>
    </div>
</div>
@endsection
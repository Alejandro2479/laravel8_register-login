@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border boder-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Register</h1>

    <form class="mt-4" method="POST" action="">
        <input class="border boder-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" type="text" placeholder="Name" id="name" name="name">
        
        <input class="border boder-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" type="email" placeholder="Email" id="email" name="email">

        <input class="border boder-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" type="password" placeholder="Password" id="password" name="password">

        <input class="border boder-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-500 p-2 my-2 focus:bg-white" type="password" placeholder="Password Confirmation" id="password_confirmation" name="password_confirmation">
            
        <button class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600" type="submit">
            Send
        </button>
    </form>
</div>
@endsection
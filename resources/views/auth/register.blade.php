@extends('layouts.app')

@section('title')
    Create an account in DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/register.jpg') }}" alt="">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter your name"
                        class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="name" type="text" placeholder="Enter your username"
                        class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="email" name="email" type="email" placeholder="Enter your email"
                        class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter a secure password"
                        class="border p-3 w-full rounded-lg" />
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password_confirmation" name="password" type="password" placeholder="Repet password"
                        class="border p-3 w-full rounded-lg" />
                </div>

                <input type="submit" value="Create account"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg" />
            </form>
        </div>
    </div>
@endsection

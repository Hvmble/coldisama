@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-screen-md">
    <div class="flex flex-wrap justify-center">
        <div class="md:w-1/2 order-2 md:order-1">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white  border-2 shadow-md mt-10">
                        <div class="bg-blue-600 text-gray-200 rounded-t-lg uppercase text-center py-3 px-6 mb-0">
                            {{ __('Register') }}
                        </div>
                        <form class="pb-3 pt-3 px-5" method="POST" action="{{ route('register') }}" novalidate>
                            @csrf
    
                            <div class="flex flex-wrap mb-6">
                                <label for="name" class="block text-gray-700 text-sm mb-2">{{ __('Name') }}</label>
                                <input id="name" type="text" class="p-3 bg-gray-200 rounded form-input w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="email" class="block text-gray-700 text-sm mb-2">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="p-3 bg-gray-200 rounded form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>
                                <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="flex flex-wrap mb-6">
                                <label for="password-confirm" class="block text-gray-700 text-sm mb-2">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="p-3 bg-gray-200 rounded form-input w-full" name="password_confirmation"  autocomplete="new-password">
                            </div>
    
                            <div class="flex justify-center flex-wrap">
                                    <button type="submit" class="bg-blue-600 w-40 rounded hover:bg-blue-500 text-gray-100 
                                    p-3 focus:outline-none focus:shadow-outline uppercase font-bold">
                                        {{ __('Register') }}
                                    </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <div class="flex flex-wrap justify-center">
        <div class="w-full max-w-sm">
            <div class="flex flex-col break-words bg-white rounded-lg    borde-2  shadow-md mt-10">
                    <div class="bg-blue-600 text-gray-200 rounded-t-lg uppercase text-center py-3 px-6 mb-0">
                        {{ __('Inicio de Sesión') }}
                    </div>

                    <form class="py-10 px-5" method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        <div class="flex flex-wrap  mb-6">
                            <label for="email" class="block text-gray-700  text-sm mb-2">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="p-3 bg-gray-200 rounded  form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                            @error('email')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block text-gray-700 text-sm mb-2">{{ __('Password') }}</label>

                            <input id="password" type="password" class="p-3 bg-gray-200 rounded form-input w-full  @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                            @error('password')
                                <span class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 w-full mt-5 text-sm" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                                <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="block text-gray-700 text-sm mb-2" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                        </div>

                        <div class="flex justify-center flex-wrap">
                                <button 
                                    type="submit" 
                                    class="bg-blue-600 w-40 hover:bg-blue-500  rounded-lg text-gray-100 
                                    p-3 focus:outline-none focus:shadow-outline  font-bold"
                                >
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-sm text-gray-700  mt-5 text-center w-full" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection

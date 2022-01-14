@extends ('layouts.app')

@section('navegacion')

    @include('ui.categoriasnav')
@endsection

@section('content')

    <div class="flex flex-col lg:flex-row shadow bg-white">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:pb-16">
            <h1 class="mt-2 sm:mt-4 text-3xl font-bold text-center  text-gray-700 leading-tight">
                Busca una vacante para ti
                <span class="text-blue-600 block mt-4 mb-8">Docentes / Administrativos</span>
            </h1>

            @include('ui.buscar')


        </div>

        <div class="block lg:w-1/2">
            <img class="inset-0 h-full w-full object-cover object-center" src="{{ asset('img/home.jpg')}}" alt="coldisama">
        </div>
    </div>


    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-blue-600 m-0">
            Nuevas
            <span class="font-bold">Vacantes</span>
        </h1>

        @include('ui.listadovacantes')
    </div>


@endsection

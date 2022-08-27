@extends('adminlte::page')

@section('title', 'Registros')


@section('content')

    <x-app-layout>

        <br>
        <div  class="card card-custom bg-white border-white border-0">
            <div class="card-header">
                <label  style="color: #5e80b7"> <i class="far fa-folder-open"></i> </label><strong>Registro de datos</strong>

                <div class="card-tools">
                    <span> <img width="170px" src="{{ asset('img/logo9.png') }}" alt=""></span>
                </div>
            </div>
            <div class="card-body">
                @livewire('menu.index-content')
            </div>
        </div>

    </x-app-layout>

@stop

@section('css')

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
@stop


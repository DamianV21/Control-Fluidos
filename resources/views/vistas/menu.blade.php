@extends('adminlte::page')

@section('title', 'Registros')


@section('content')

    <x-app-layout>


        <div  class="card card-outline card-primary">
            <div class="card-header">
                <label style="color: #5e80b7"> <i class="far fa-folder-open"></i> </label><strong>Registro de datos</strong>
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


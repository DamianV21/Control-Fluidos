
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Maquinas') }}
        </h2>
    </x-slot>
    <br>
    <br>
    @livewire('vistas.index-maquinas')

</x-app-layout>


@stop



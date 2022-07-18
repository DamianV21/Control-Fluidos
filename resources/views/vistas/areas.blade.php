
@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Areas') }}
        </h2>
    </x-slot>
    <br>
    <br>
    @livewire('vistas.index-areas')


</x-app-layout>


@stop

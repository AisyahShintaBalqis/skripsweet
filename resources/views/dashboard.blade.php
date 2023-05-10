{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('backend.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-coffee fa-3x text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Kopi</p>
                    <h6 class="mb-0">{{$jumlahkopi}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-history fa-3x text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Pengujian</p>
                    <h6 class="mb-0">{{$pengujian}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-user-circle fa-3x text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">User</p>
                    <h6 class="mb-0">{{$user}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
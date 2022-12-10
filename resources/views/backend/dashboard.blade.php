@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        @lang('Welcome :Name', ['name' => $logged_in_user->name])
    </x-slot>

    <x-slot name="body">
        @lang('Welcome t the Dashboard')
        <x-forms.post>
            <input name="amien" type="password" />
        </x-forms.post>
    </x-slot>

</x-backend.card>
@endsection
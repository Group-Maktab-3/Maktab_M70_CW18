@extends('layouts.main')

@section('content')
    <div class="m-5">
        <x-login-form >

            <x-slot name="inputs">

                @foreach($form as $field)

                    <x-input-lable>

                        <x-slot name="name">
                            {{ $field['name'] }}
                        </x-slot>

                        <x-slot name="type">
                            {{ $field['type'] }}
                        </x-slot>

                        <x-slot name="id">
                            {{ $loop->index }}
                        </x-slot>

                    </x-input-lable>

                @endforeach

            </x-slot>

        </x-login-form>
    </div>
@endsection
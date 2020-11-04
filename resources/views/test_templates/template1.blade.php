@extends('test_templates.main-template')

@section('styles')
    <style>
        .fillable {
            display: inline-block;
            margin: 0 20px;
            width: 200px;
            height: 200px;
            border: 1px solid black;
        }

        form {
            margin: 30px 0;
        }
    </style>
@endsection

@section('template-name') 1 @endsection

@section('template')
    <div id="div1" class="fillable">
        @if (!is_null($data))
            {{ $data->input1 }}
        @endif
    </div>
    <div id="div2" class="fillable">
        @if (!is_null($data))
            {{ $data->input2 }}
        @endif
    </div>
@endsection

<div class="input">@yield('input')</div>
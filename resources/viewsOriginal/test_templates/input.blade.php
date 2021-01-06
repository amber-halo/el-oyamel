@extends('test_templates.template1')

@section('input')

    <form action="{{ route('post.submit', ['id' => 1]) }}" method="post">
        @csrf

        <label for="input1">Div 1 data</label>
        <input type="text" id="input1" name="input[input1]" required>
    
        <br><br>

        <label for="input2">Div 2 data</label>
        <input type="text" id="input2" name="input[input2]" required>

        <button type="submit">Enviar</button>
    </form>
@endsection
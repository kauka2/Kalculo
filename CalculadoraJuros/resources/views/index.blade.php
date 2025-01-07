@extends('layout')
@section('content')
<div class="jumbotron">
    <form action="{{route('calcular')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="capital">Valor do Empréstimo:</label>
            <input type="text" class="form-control" id="capital" name="capital">
        </div>
        <div class="form-group">
            <label for="parcelas">Número de Parcelas:</label>
            <input type="text" class="form-control" id="parcelas" name="parcelas">
        </div>
        <div class="form-group">
            <label for="taxa">Taxa de Juros(%):</label>
            <input type="text" class="form-control" id="taxa" name="taxa">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
        <button type="restart" class="btn btn-danger">Cancelar</button>
    </form>
</div>
@endsection
@extends('layout')
@section('content')
<div class='text'>
    <h2>Cálculo efetuado</h2>
    <h3>Total pago <strong>{{$nome}}: R$ {{$total}}</strong></h3>
</div>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Número da Parcela</th>
            <th scope="col">Valor Devedor</th>
            <th scope="col">Valor com Juros</th>
            <th scope="col">Valor da Parcela</th>
        </tr>
    </thead>    
    <tbody>
    @foreach($dados as $item)
        <tr>
            <th>{{$item["num"]}}</th>
            <td>R$ {{$item["capital"]}}</td>
            <td>R$ {{$item["montante"]}}</td>
            <td>R$ {{$item["parcela"]}}</td>
        </tr>
    @endforeach
    </table>
<button onclick="window.location.href='/';" type="button"
class="btn btn-lg btn-primary btn-block">Voltar</button>
@endsection
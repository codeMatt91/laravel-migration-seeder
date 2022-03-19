@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
<main class="bg-dark text-white">
            <table class="m-auto py-5"> 
                <tr class="text-center border-bottom border-warning">
                    <th class="p-3"><strong>id</strong></th>
                    <th class="p-3"><strong>azienda</strong></th>
                    <th class="p-3"><strong>stazione_di_partenza</strong></th>
                    <th class="p-3"><strong>stazione_di_arrivo</strong></th>
                    <th class="p-3"><strong>orario_di_partenza</strong></th>
                    <th class="p-3"><strong>orario_di_arrivo</strong></th>
                    <th class="p-3"><strong>carrozze</strong></th>
                    <th class="p-3"><strong>in_orario</strong></th>
                    <th class="p-3"><strong>numero_treno</strong></th>
                    <th class="p-3"><strong>cancellato</strong></th>
                </tr>
                @foreach ($trains as $train)
                <tr class="p-4 text-center border-bottom border-warning">
                    <td class="p-3">{{ $train['id'] }}</td>
                    <td class="p-3">{{ $train['azienda'] }}</td>
                    <td class="p-3">{{ $train['stazione_di_partenza'] }}</td>
                    <td class="p-3">{{ $train['stazione_di_arrivo'] }}</td>
                    <td class="p-3">{{ $train['orario_di_partenza'] }}</td>
                    <td class="p-3">{{ $train['orario_di_arrivo'] }}</td>
                    <td class="p-3">{{ $train['numero_treno'] }}</td>
                    <td class="p-3">{{ $train['carrozze'] }}</td>
                    <td class="p-3">{{ $train['in_orario'] }}</td>
                    <td class="p-3">{{ $train['cancellato'] }}</td>
                </tr>
                @endforeach
                
              </table>
</main>
@endsection
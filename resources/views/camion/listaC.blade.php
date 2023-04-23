<h1>Lista de Camiones</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Placa Camion</td>
        <td>Marca</td>
        <td>Color</td>
        <td>Modelo</td>
        <td>Capacidad Toneladas</td>
        <td>Transporte ID</td>
    </tr>
    @foreach($camions as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->placa_camion}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->color}}</td>
            <td>{{$item->modelo}}</td>
            <td>{{$item->capacidad_toneladas}}</td>
            <td>{{$item->transporte_id}}</td>
        </tr>
    @endforeach
</table>


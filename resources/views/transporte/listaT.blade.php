<h1>Lista de Transportes</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Razon Social</td>
    </tr>
    @foreach($transportes as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->razon_social}}</td>
        </tr>
    @endforeach
</table>

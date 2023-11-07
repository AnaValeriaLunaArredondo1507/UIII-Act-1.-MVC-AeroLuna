<h1 class="page-header">Vuelos</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=vuelos&a=Crud">Agregar vuelos</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >ID</th>
            <th>No. Vuelo</th>
            <th>Hora salida</th>
            <th >Fecha salida</th>
            <th >Hora llegada</th>
            <th >Cantidad pasajeros</th>
            <th >Horas de vuelo</th>
            <th >Lugar salida</th>
            <th >Destino</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->ID; ?></td>
            <td><?php echo $r->num_vuelo; ?></td>
            <td><?php echo $r->hora_salida; ?></td>
            <td><?php echo $r->fecha_salida; ?></td>
            <td><?php echo $r->hora_llegada; ?></td>
            <td><?php echo $r->cant_pasajeros; ?></td>
            <td><?php echo $r->horas_de_vuelo; ?></td>
            <td><?php echo $r->lugar_salida; ?></td>
            <td><?php echo $r->destino; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=vuelos&a=Crud&ID=<?php echo $r->ID; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=vuelos&a=Eliminar&ID=<?php echo $r->ID; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

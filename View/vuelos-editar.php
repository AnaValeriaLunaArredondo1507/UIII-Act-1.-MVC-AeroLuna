<h1 class="page-header">
    <?php echo $alm->ID != null ? $alm->num_vuelo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=vuelos">Vuelos</a></li>
  <li class="active"><?php echo $alm->ID != null ? $alm->num_vuelo : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=vuelos&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?php echo $alm->ID; ?>" />
    
    <div class="form-group">
        <label>Número de vuelo</label>
        <input type="text" name="num_vuelo" value="<?php echo $alm->num_vuelo; ?>" class="form-control" placeholder="Ingrese su número de vuelo" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>hora_salida</label>
        <input type="time" name="hora_salida" value="<?php echo $alm->hora_salida; ?>" class="form-control" placeholder="Ingrese su hora de salida" />
    </div>
    
    <div class="form-group">
        <label>Fecha de salida</label>
        <input type="date" name="fecha_salida" value="<?php echo $alm->fecha_salida; ?>" class="form-control" placeholder="Ingrese su fecha de salida" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Hora de llegada</label>
        <input type="time" name="hora_llegada" value="<?php echo $alm->hora_llegada; ?>" class="form-control" placeholder="Ingrese su hora de llegada" />
    </div>
    
    <div class="form-group">
        <label>Cantidad de pasajeros</label>
        <input type="number" name="cant_pasajeros" value="<?php echo $alm->cant_pasajeros; ?>" class="form-control" placeholder="Ingrese la cantidad de pasajeros de su vuelo" data-validacion-tipo="requerido|min:1" />
    </div>

    <div class="form-group">
        <label>Horas de vuelo</label>
        <input type="text" name="horas_de_vuelo" value="<?php echo $alm->horas_de_vuelo; ?>" class="form-control" placeholder="Ingrese las horas de vuelo" />
    </div>
    
    <div class="form-group">
        <label>Lugar de salida</label>
        <input type="text" name="lugar_salida" value="<?php echo $alm->lugar_salida; ?>" class="form-control" placeholder="Ingrese su lugar de salida" />
    </div>
    
    <div class="form-group">
        <label>Destino</label>
        <input type="text" name="destino" value="<?php echo $alm->destino; ?>" class="form-control" placeholder="Ingrese su destino" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>

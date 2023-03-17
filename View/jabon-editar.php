<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Jabones</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control"  data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="decimal" name="precio" value="<?php echo $alm->precio; ?>" class="form-control" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="marca" value="<?php echo $alm->marca; ?>" class="form-control"  data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Color</label>
        <input type="text" name="color" value="<?php echo $alm->color; ?>" class="form-control" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Aroma</label>
        <input type="text" name="aroma" value="<?php echo $alm->aroma; ?>" class="form-control"  data-validacion-tipo="requerido|email" />
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

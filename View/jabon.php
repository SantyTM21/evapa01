<h1 class="page-header">Jabones</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=jabon&a=Crud">Agregar jabon</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombre</th>
            <th>Precio</th>
            <th>Marca</th>
            <th >Color</th>
            <th >Aroma</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->marca; ?></td>
            <td><?php echo $r->color; ?></td>
            <td><?php echo $r->aroma; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=jabon&a=Crud&idjabon=<?php echo $r->idjabon; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=jabon&a=Eliminar&idjabon=<?php echo $r->idjabon; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

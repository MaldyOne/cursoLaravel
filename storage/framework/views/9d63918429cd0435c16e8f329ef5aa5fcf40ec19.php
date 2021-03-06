<?php $__env->startSection('content'); ?>
<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

<section class="content-header">
      <h1 style="font-size: 28px;">        
        Gestión de usuarios Laravel      
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
		 <div class="panel panel-default">
		 	<div class="panel-heading" >Actualizar usuario</div>
		 <div class="panel-body">
<!--FORM PARA edicion de usuarios -->
              <form class="form-horizontal" method="post" action="<?php echo e(route('usuario.actualizar' , $usuario->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                <label class="control-label col-sm-2" for="name">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="username"  value="<?php echo e($usuario->username); ?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="name">Nombre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="nombre" value="<?php echo e($usuario->nombre); ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="email">E-mail</label>
                <div class="col-sm-10">          
                  <input type="text" class="form-control" name="email" value="<?php echo e($usuario->email); ?>">
                </div>
              </div>
              
              <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn- success">Actualizar</button>
                </div>
              </div>
           </form>
            </div> 
            <div class="panel-footer" style="background-color: #ecf0f5;">
              <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancelar</button>
            </div>

      </div>
    </section>
      <!-- /.content -->
      </div>
    </section>
  </div>
</div>
</div>

<?php echo $__env->make('bienvenida.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
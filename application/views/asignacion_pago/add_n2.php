  <div class="right_col" role="main">
	 <div class="x_panel">
    <div class="animated bounceInDown" align="left">
  <?= validation_errors('<div class="alert alert-danger">','</div> ')?>
    </div> 
  		<div class="animated fadeIn" align="left">
             <label><h3><strong>Agregar Monto a Taxista</strong></h3></label>
             <hr>
        <form  role="form" action="<?php echo $this->config->base_url();?>asignacion_pago/guardar_asignacion_pago" method="POST"  enctype="multipart/form-data">
      <div class="form-group">
        <label>Usuario</label>
         <select class="selectpicker form-control" name="id_usuario" id="id_usuario" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione Usuario</option>
           <?php if ($usuario): ?>
             <?php foreach ($usuario as $key): ?>
                <option data-tokens="<?= $key->id_usuario.", ".$key->nombre?>" value="<?= $key->id_usuario?>"><?= $key->nombre?></option>
             <?php endforeach ?>
           <?php else: echo "no hay Resultados" ?>
           <?php endif ?>
        </select>
      </div>
      <div class="form-group">
      <label>Descripcion</label>
        <textarea name="txt_descripcion" class="form-control" value="<?= set_value("txt_descripcion")?>" placeholder="Ingrese Descripcion" required="true"></textarea>
      </div>
       <div class="form-group">
        <label>Monto</label>
        <input type="number" class="form-control" name="txt_monto" value="<?= set_value("txt_monto")?>" placeholder="Ingrese Monto"> 
      </div>
      <div class="form-group">
      <label>Fecha de Pago</label>
        <?  $fecha=date('Y-m-d');?>
        <input type="date" class="form-control" name="txt_fecha" value="<?=$fecha?>">
      </div>
           <hr>
            <div class="form-group" align="center">
              <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i>&nbsp;Guardar</button>
              <a href="<?=$this->config->base_url()?>asignacion_pago/grilla" title="" class="btn btn-warning btn-lg"><i class="fa fa-exclamation-triangle"></i>&nbsp;Volver</a>
            </div>
          </form>  
  				</div>
	    	</div>
		  </div>
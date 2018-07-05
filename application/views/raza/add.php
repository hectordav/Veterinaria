  <div class="right_col" role="main">
	 <div class="x_panel">
    <div class="animated bounceInDown" align="left">
  <?= validation_errors('<div class="alert alert-danger">','</div> ')?>
    </div> 
  		<div class="animated fadeIn" align="left">
             <label><h3><strong>Crear Raza</strong></h3></label>
             <hr>
        <form  role="form" action="<?php echo $this->config->base_url();?>raza/guardar_raza" method="POST"  enctype="multipart/form-data">
      <div class="form-group">
        <label>Especie</label>
         <select class="selectpicker form-control" name="id_especie" id="id_especie" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione especie</option>
           <?php if ($especie): ?>
             <?php foreach ($especie as $key): ?>
                <option data-tokens="<?= $key->id.", ".$key->descripcion?>" value="<?= $key->id?>"><?= $key->descripcion?></option>
             <?php endforeach ?>
           <?php else: echo "no hay Resultados" ?>
           <?php endif ?>
        </select>
      </div>
      <div class="form-group">
      <label>Raza</label>
        <input type="text" class="form-control" name="txt_raza" value="<?= set_value("txt_descripcion")?>">
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
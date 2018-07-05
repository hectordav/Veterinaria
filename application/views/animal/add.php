  <div class="right_col" role="main">
	 <div class="x_panel">
    <div class="animated bounceInDown" align="left">
  <?= validation_errors('<div class="alert alert-danger">','</div> ')?>
    </div> 
  		<div class="animated fadeIn" align="left">
             <label><h3><strong>Crear Animal</strong></h3></label>
             <hr>
        <form  role="form" action="<?php echo $this->config->base_url();?>animal/guardar_animal" method="POST"  enctype="multipart/form-data">
      <div class="form-group">
        <label>Propietario</label>
         <select class="selectpicker form-control" name="id_usuario" id="id_usuario" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione propietario</option>
           <?php if ($usuario): ?>
             <?php foreach ($usuario as $key): ?>
                <option data-tokens="<?= $key->id.", ".$key->nombre?>" value="<?= $key->id?>"><?= $key->nombre?></option>
             <?php endforeach ?>
           <?php else: echo "no hay Resultados" ?>
           <?php endif ?>
        </select>
      </div>
      <div class="form-group">
        <label>Especie</label>
         <select class="selectpicker form-control" name="id_especie" id="id_especie" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione Especie</option>
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
        <select class="form-control" name="id_raza" id="id_raza" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione raza</option> 
        </select>
      </div>
     <div class="form-group">
        <label>Sexo</label>
         <select class="selectpicker form-control" name="id_sexo" id="id_sexo" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione sexo</option>
          <option data-tokens="Masculino" value="1">Masculino</option>
          <option data-tokens="Femenino" value="2">Femenino</option>
        </select>
      </div>
      <div class="form-group">
        <label>Color</label>
         <select class="selectpicker form-control" name="id_color" id="id_color" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione Color</option>
           <?php if ($color): ?>
             <?php foreach ($color as $key): ?>
                <option data-tokens="<?= $key->id.", ".$key->descripcion?>" value="<?= $key->id?>"><?= $key->descripcion?></option>
             <?php endforeach ?>
           <?php else: echo "no hay Resultados" ?>
           <?php endif ?>
        </select>
      </div>
      <div class="form-group">
        <label>Esterilizado</label>
         <select class="selectpicker form-control" name="id_esterilizado" id="id_esterilizado" data-show-subtext="true" data-live-search="true"  required="required">
          <option data-tokens="" value="">Seleccione sexo</option>
          <option data-tokens="Si" value="1">Si</option>
          <option data-tokens="No" value="2">No</option>
        </select>
      </div>
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= set_value("txt_codigo")?>">
      </div>
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="txt_nombre" value="<?= set_value("txt_nombre")?>">
      </div>
      <div class="form-group">
        <label>Peso</label>
        <input type="text" class="form-control" name="txt_peso" value="<?= set_value("txt_peso")?>">
      </div>
      <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="txt_fecha_nac" value="<?= set_value("txt_fecha_nac")?>">
      </div>
      <div class="form-group">
        <label>Nacionalidad</label>
        <input type="text" class="form-control" name="txt_nacionalidad" value="<?= set_value("txt_nacionalidad")?>">
      </div>
      <div class="form-group">
        <label>Observaciones</label>
        <textarea name="txt_observacion" id="input" class="form-control" rows="3" required="required"><?= set_value("txt_observacion")?></textarea>
      </div>
       <div class="form-group">
          <label>Imagen</label>
          <input type="file" name="mi_imagen"> 
       </div>
           <hr>
            <div class="form-group" align="center">
              <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-save"></i>&nbsp;Guardar</button>
              <a href="<?=$this->config->base_url()?>animal/grilla" title="" class="btn btn-warning btn-lg"><i class="fa fa-exclamation-triangle"></i>&nbsp;Volver</a>
            </div>
          </form>  
  				</div>
	    	</div>
		  </div>
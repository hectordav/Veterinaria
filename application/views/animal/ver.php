  <div class="right_col" role="main">
	 <div class="x_panel">
    <div class="animated bounceInDown" align="left">
  <?= validation_errors('<div class="alert alert-danger">','</div> ')?>
    </div> 
  		<div class="animated fadeIn" align="left">
             <label><h3><strong>Ver</strong></h3></label>
             <hr>
      <?php if ($animal): ?>
       <?php foreach ($animal as $key): ?>

   <div>     
      <div class="form-group">
        <label>Propietario</label>
          <input type="text" class="form-control" name="txt_codigo" value="<?= $key->nombre_usuario?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Especie</label>
          <input type="text" class="form-control" name="txt_codigo" value="<?= $key->especie?>" readonly="true">
      </div>
       <div class="form-group">
        <label>Raza</label>
          <input type="text" class="form-control" name="txt_codigo" value="<?= $key->raza?>" readonly="true">
      </div>
     <div class="form-group">
        <label>Sexo</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $key->sexo?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Color</label>
          <input type="text" class="form-control" name="txt_codigo" value="<?= $key->color?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Esterilizado</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $key->esterilizado?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" class="form-control" name="txt_codigo" value="<?= $key->codigo?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="txt_nombre" value="<?= $key->nombre ?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Peso</label>
        <input type="text" class="form-control" name="txt_peso" value="<?= $key->peso ?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Fecha de Nacimiento</label>
        <input type="date" class="form-control" name="txt_fecha_nac" value="<?= $key->fecha_nac ?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Nacionalidad</label>
        <input type="text" class="form-control" name="txt_nacionalidad" value="<?= $key->nacionalidad ?>" readonly="true">
      </div>
      <div class="form-group">
        <label>Observaciones</label>
        <textarea name="txt_observacion" id="input" class="form-control" rows="3" required="required" readonly="true"><?= $key->observaciones ?></textarea>
      </div>
  </div>
  <br>
    <?php endforeach ?> 
      <?php endif ?>
      <div align="center">
       <?php if ($animal): ?>
      <?php foreach ($animal as $key): ?>
  <div>
       <a data-toggle="modal" href="#<?=$key->id_animal?>">
      <img src="<?=$this->config->base_url()?>assets/img/<?=$key->imagen?>" width="20%">
    </a>
  </div>
    <div class="modal fade "id="<?=$key->id_animal?>">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
      <div class="container">
        <div class="row">

<div class="col-md-12 col-sm-12 col-xs-12" align="center">
  <img class="img-responsive"src="<?=$this->config->base_url()?>assets/img/<?=$key->imagen?>">
</div>
              </div><!-- termina el content -->
            </div> <!-- termina el modal dialog -->
        </div> <!-- termina la ventana modal -->
       </div>
   <?php endforeach ?> 
  <?php endif ?> 
</div>

</div>

     <!--******************** la modal ************************ -->
   
   </div>
           <hr>
            <div class="form-group" align="center">
              <a href="<?=$this->config->base_url()?>animal/grilla" title="" class="btn btn-warning btn-lg"><i class="fa fa-exclamation-triangle"></i>&nbsp;Volver</a>
            </div>
          </form>  
  				</div>
       
	    
      <!-- page content -->
      <div class="right_col" role="main">

<!-- la ubicacion de los conductores -->
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel tile">

              <div class="row x_title">
                
                <div class="col-md-12" align="center">
<h3>Ultima Ubicacion de Conductores</h3>

             
                </div>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12" align="center">
               <?php if ($ubicacion==''): ?>
 <img src="https://maps.googleapis.com/maps/api/staticmap?center=25.686614,-100.316113&scale=1&zoom=15&size=800x600&key=AIzaSyAkk307RSWm1Uzb0Oarsc3fqsTbe3u6-f4" width="800" height="600" >
<?php else:?>
  <img src=" https://maps.googleapis.com/maps/api/staticmap?size=1000x800&scale=1&zoom=15&markers=
icon:https://goo.gl/5XdjjN
<?php if ($ubicacion): ?>
  <?php foreach ($ubicacion as $key): ?>
    <? $lat_lng = explode(",",$key->lat_lng);
    $lat=$lat_lng[0];/*latitud*/
    $lng=$lat_lng[1];/*longitud*/
    ?>
    %7C<?=$lat;?>
    <?=$lng;?>
  <?php endforeach ?>
<?php endif ?>
&key=AIzaSyAkk307RSWm1Uzb0Oarsc3fqsTbe3u6-f4
"  width="800" height="800">
<?php endif ?>
              </div>

              <div class="clearfix"></div>
            </div>
          </div>

        </div>
        <br />
<!-- / -->

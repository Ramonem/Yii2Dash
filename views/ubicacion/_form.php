<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Empresa;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Ubicacion */
/* @var $form yii\widgets\ActiveForm */
?>

<style media="screen">
#map {
  width: 100%;
  height: 400px;
}
.controls {
  margin-top: 10px;
  border: 1px solid transparent;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  height: 32px;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#searchInput {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 50%;
}
#searchInput:focus {
  border-color: #4d90fe;
}
</style>

<div class="ubicacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_empresa')->dropDownList(ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre_empresa'),
             ['prompt'=>'- Elige una empresa -']) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true, 'style' => 'width:50%; margin-top:8px']) ?>

    <div id="map"></div>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lon')->textInput() ?>

    <br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <script>
    function initMap() {
      $('#ubicacion-lat').attr('readonly', true);
      $('#ubicacion-lon').attr('readonly', true);
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.4488897, lng: -70.6692655},
        zoom: 13
      });
      var input = document.getElementById('ubicacion-direccion');
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo('bounds', map);

      var infowindow = new google.maps.InfoWindow();
      var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
      });

      autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
              window.alert("No se encontro la direccion :c");
              return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
              map.fitBounds(place.geometry.viewport);
          } else {
              map.setCenter(place.geometry.location);
              map.setZoom(17);
          }
          marker.setIcon(({
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
              address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
              ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);

          //Location details
          for (var i = 0; i < place.address_components.length; i++) {
              if(place.address_components[i].types[0] == 'postal_code'){
                  //document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
              }
              if(place.address_components[i].types[0] == 'country'){
                  //document.getElementById('country').innerHTML = place.address_components[i].long_name;
              }
          }
          //document.getElementById('location').innerHTML = place.formatted_address;
          document.getElementById('ubicacion-lat').value = place.geometry.location.lat();
          document.getElementById('ubicacion-lon').value = place.geometry.location.lng();
          //document.getElementById('ubicacion-lon').value = "place.geometry.location.lng()";
          //console.log("funca");
      });
    }
    </script>

</div>

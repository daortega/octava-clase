<?php include('header.php');?>
<div class="container">
  <div class="col-sm-12 col-lg-10 col-lg-offset-1">
  <header>
    <h1>Smart Citizen Kit<br><small>Sensores ciudadanos</small></h1>
    <p><strong>El Smart Citizen Kit es una placa</strong> electrónica basada en Arduino que está <strong>equipada con sensores de calidad de aire, temperatura, sonido, humedad e iluminación</strong>. Esta placa electrónica contiene un cargador solar que permite conectarla paneles fotovoltaicos para poder instalarla en cualquier lugar. La placa viene equipada con una antena WiFi que permite subir los datos de los sensores en tiempo real a plataformas online.</p>
    <p>En lo que sigue consultaremos datos subidos recientemente por algunos Smart Citizen Kit.</p>
    <p>Fuente: <a href="http://developer.smartcitizen.me/#devices">http://developer.smartcitizen.me/#devices</a></p>
  </header>
</div>
<div class="col-sm-12 col-lg-10 col-lg-offset-1">
  <hr>
    <div class="col-sm-2">
  <section>
    <?php
    $la_url = $_GET['url'];
    $json = file_get_contents($la_url);
    $json_data = json_decode($json,true);
    ?>
      <img src ="<?php echo $json_data['owner']['avatar'];?>"
    </div></div>
    <div class="col-sm-10">
    <h3> Usuario: <?php echo $json_data['owner']['username'];?> </h3>
  </div>
    <div class="col-sm-3">
    <h4> Origen: <?php echo $json_data['data']['location']['city'];?> , <?php echo $json_data['data']['location']['country'];?></h4>
  </div>
  <div class="col-sm-4">
  <h4> Temperatura: <?php echo round($json_data['data']['sensors'][3]['value'],1);?> °C</h4>
</div>
<div class="col-sm-3">
<h4> Ruido: <?php echo round($json_data['data']['sensors'][7]['value'],1);?> dB</h4>
</div>
</div>
  <div class="col-sm-12 col-lg-10 col-lg-offset-1">
    <hr>


    <p>Lo que hagas acá depende de lo que puedas aprovechar entre los siguientes datos:</p>
<pre><code><?php print_r($json_data);?></code></pre>
  </section>
  <aside>
    <div class="alert alert-danger">¡Buena suerte!</div>
</aside>
</div>
<?php include('footer.php');?>

@extends('layouts.app')

@section('content')

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="styleeshet" href="{{ asset('css/style.css') }}"/>

    <h1 align="center">CALCULAR RUTA.</h1>
    <section class="row">
        <div class="col-lg-4">
        <h2 align="center" style="margin-top: 30px; margin-left: 80px;">A donde vas?<br>	</h2>
        <table align="center" width="100%" style="line-height: 3; font-size: 1rem  ">
            <form action=""  method="POST" id="formulario">
                @csrf
                <tr>
                    <td align="right"><lavel style="font-size: 20px;" >NombreCompleto:</lavel></td>
                    <td><input type="text" class="form-control col-md-10" name="nombre" id="nombre" pattern="[a-zA-Z]{4,50}" 
                        placeholder="Ingresa tu nombre" required autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="right"><lavel style="font-size: 20px;">Email:</lavel></td>
                    <td><input type="email" class="form-control col-md-10" name="mail" id="mail" placeholder="Ingresa tu Email" required autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="right"><lavel style="font-size: 20px;">Telefono:</lavel></td>
                    <td><input type="tel" class="form-control col-md-10" name="telefono" id="telefono" pattern="[0-9]{10}"  placeholder="Ingresa tu telefono" required autocomplete="off"></td>
                </tr>

                <tr>
                    <td align="right"><lavel style="font-size: 20px;">Origen:</lavel></td>
                    <td><input type="text" class="form-control col-md-10" name="origen" id="origen" placeholder="Ingresa un origen" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td align="right"><lavel style="font-size: 20px;">Destino:</lavel></td>
                    <td><select type="text" class="form-control col-md-10" name="destino" id="destino" required>

                        <option value="16.8963573,-92.0686792">Universidad Tecnologica de la Selva</option>
                    </select></td>
                </tr>
                <tr>
                    <td align="right"><lavel style="font-size: 20px;">Forma de viajar:</lavel></td>
                    <td><select type="text" class="form-control col-md-10" name="viajar" id="viajar" required>
                        <option value="driving">Vehiculo</option>
                        <option value="walking">A pie</option>
                        <option value="bicycling">En bici</option>
                    </select></td>
                </tr>
                    <tr>
                    <td align="center" colspan="2"><input type="submit" class="btn btn-primary btn-lg" value="calcular"  title="Enviar" name="consultar"></td>
                    </tr>
            </form>
        </table>
        </div>
        <div class="col-lg-7 espacio">
            <?php if(isset($_POST['consultar'])){?>
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 600px">
                    <iframe height="600" width="900" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyAl2RjhW-SX9GOKSrfBToNaT5Ij_vpqeuc&origin=<?php echo $_POST['origen'] ?>&destination=<?php echo $_POST['destino'] ?>&mode=<?php echo $_POST['viajar'] ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <?php

                $respuesta = file_get_contents("https://maps.googleapis.com/maps/api/directions/json?key=AIzaSyAl2RjhW-SX9GOKSrfBToNaT5Ij_vpqeuc&origin=".$_POST['origen']."&destination=".$_POST['destino']);
                $json = json_decode($respuesta);

                $distancia = $json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"text"};
                $duracion = $json->{"routes"}[0]->{"legs"}[0]->{"duration"}->{"text"};

                //para hacer las comparaciones de distancia y calcular costo
                //para hacer las comparaciones de distancia y calcular costo
					$valorDistancia=intval($json->{"routes"}[0]->{"legs"}[0]->{"distance"}->{"value"});

					if($valorDistancia<=100000){
		        	$costoEnvio = "$100";
				    }
				    else if($valorDistancia<=200000){
				        $costoEnvio = "$130";
				    }else if($valorDistancia<=400000){
				        $costoEnvio = "$170";
				    }else if($valorDistancia<=700000){
				        $costoEnvio = "$210";
				    }else if($valorDistancia<=1000000){
				        $costoEnvio = "$250";
				    }else{
				        $costoEnvio = "$350";
				    }

                    $resumen = $json->{"routes"}[0]->{"summary"};

					echo "<br><center><b>" . $resumen . "</b><br><b>Distancia:</b> " . $distancia . " <b>Duracion:</b> " . $duracion . " <b>Costo de envío:</b> " . $costoEnvio . "</center>";

					?>


            <?php } ?>
        </div>
    </section>
@endsection
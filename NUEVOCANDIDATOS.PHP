<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de Captura de datos</title>
  </head>
  <body>
    <form id="form1" name="form1" method="post" action="recibir.php" enctype="multipart/form-data" ><p align="center"/>
      <h1>CANDIDATOS</h1>
        <table>
             <img src="BANNERS.jpg"><br><br>
              <tr>
                  <td>
                      NOMBRE DEL CANDIDATO:
                  </td>
                  <td>
                      <input type="text" name="nombre" id="nombre" />
                  </td>
              </tr>
              <tr>
                  <td>
                      APELLIDO DEL CANDIDATO:
                  </td>
                  <td>
                      <input type="text" name="apellido" id="apellido"/>
                  </td>
              </tr>
              <tr>
                  <td>
                    DUI:
                  </td>
                  <td>
                     <input type="text" name="dui" id="dui"/>
                  </td>
              </tr>
              <tr>
                <td>
                    TIPO DE CANDIDATURA:
                </td>
                <td>
                  <select name='seccion1'>
                    <option value=""></option>
                    <option value="FMLN">FMLN</option>
                    <option value="ARENA">ARENA</option>
                    <option value="GANA">GANA</option>
                    <option value="PCN">PCN</option>
                    <option value="CD">CD</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  CARGO:
                </td>
                <td>
                  <select name='seccion2'>
                    <option value=""></option>
                    <option value="ALCALDE">ALCALDE</option>
                    <option value="DIPUTADO">DIPUTADO</option>
                    <option value="PRESIDENTE">PRESIDENTE</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  DEPARTAMENTO:
                </td>
                <td>
                  <select name='seccion3'>
                    <option value=""></option>
                    <option value="AHUACHAPAN">AHUACHAPAN</option>
                    <option value="CABAÑAS">CABAÑAS</option>
                    <option value="CHALATENANGO">CHALATENANGO</option>
                    <option value="CUSCATLAN">CUSCATLAN</option>
                    <option value="LA LIBERTAD">LA LIBERTAD</option>
                    <option value="LA PAZ">LA PAZ</option>
                    <option value="LA UNION">LA UNION</option>
                    <option value="MORAZAN">MORAZAN</option>
                    <option value="SAN MIGUEL">SAN MIGUEL</option>
                    <option value="SAN SALVADOR">SAN SALVADOR</option>
                    <option value="SAN VICENTE">SAN VICENTE</option>
                    <option value="SANTA ANA">SANTA ANA</option>
                    <option value="SONSONATE">SONSONATE</option>
                    <option value="USULUTAN">USULUTAN</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>
                  MUNICIPIO:
                </td>
                <td>
                  <select name='seccion3'>
                     <option value="ALCALDE"> Ahuachapán</option>
 <option value="ALCALDE"> Jujutla</option>
 <option value="ALCALDE"> Atiquizaya</option>
 <option value="ALCALDE"> Concepción de Ataco</option>
 <option value="ALCALDE"> El Refugio</option>
 <option value="ALCALDE"> Guaymango</option>
 <option value="ALCALDE"> Apaneca</option>
 <option value="ALCALDE"> San Francisco Menéndez</option>
 <option value="ALCALDE"> San Lorenzo</option>
 <option value="ALCALDE"> San Pedro Puxtla</option>
 <option value="ALCALDE"> Tacuba</option>
 <option value="ALCALDE"> Turín</option>
 <option value="ALCALDE"> Cinquera</option>
 <option value="ALCALDE"> Villa Dolores</option>
 <option value="ALCALDE"> Guacotecti</option>
 <option value="ALCALDE"> Ilobasco</option>
 <option value="ALCALDE"> Jutiapa</option>
 <option value="ALCALDE"> San Isidro</option>
 <option value="ALCALDE"> Sensuntepeque</option>
 <option value="ALCALDE"> Ciudad de Tejutepeque</option>
 <option value="ALCALDE"> Victoria</option>
 <option value="ALCALDE"> Agua Caliente</option>
 <option value="ALCALDE"> Arcatao'</option>
 <option value="ALCALDE"> Azacualpa</option>
 <option value="ALCALDE"> Chalatenango</option>
 <option value="ALCALDE"> Citalá</option>
 <option value="ALCALDE"> Comalapa</option>
 <option value="ALCALDE"> Concepción Quezaltepeque</option>
 <option value="ALCALDE"> Dulce Nombre de María</option>
 <option value="ALCALDE"> El Carrizal</option>
 <option value="ALCALDE"> El Paraíso</option>
 <option value="ALCALDE"> La Laguna</option>
 <option value="ALCALDE"> La Palma</option>
 <option value="ALCALDE"> La Reina</option>
 <option value="ALCALDE"> Las Vueltas</option>
 <option value="ALCALDE"> Nombre de Jesús'</option>
 <option value="ALCALDE"> Nueva Concepción</option>
 <option value="ALCALDE"> Nueva Trinidad</option>
 <option value="ALCALDE"> Ojos de Agua</option>
 <option value="ALCALDE"> Potonico</option>
 <option value="ALCALDE"> San Antonio de la Cruz</option>
 <option value="ALCALDE"> San Antonio Los Ranchos</option>
 <option value="ALCALDE"> San Fernando</option>
 <option value="ALCALDE"> San Francisco Lempa</option>
 <option value="ALCALDE"> San Francisco Morazán</option>
 <option value="ALCALDE"> San Ignacio</option>
 <option value="ALCALDE"> San Isidro Labrador</option>
 <option value="ALCALDE"> San José Cancasque</option>
 <option value="ALCALDE"> San José Las Flores</option>
 <option value="ALCALDE"> San Luis del Carmen</option>
 <option value="ALCALDE"> San Miguel de Mercedes</option>
 <option value="ALCALDE"> San Rafael</option>
 <option value="ALCALDE"> Santa Rita</option>
 <option value="ALCALDE"> Tejutla</option>
 <option value="ALCALDE"> Candelaria</option>
 <option value="ALCALDE"> Cojutepeque</option>
 <option value="ALCALDE"> El Carmen</option>
 <option value="ALCALDE"> El Rosaro</option>
 <option value="ALCALDE"> Monte San Juan</option>
 <option value="ALCALDE"> Oratorio de Concepción</option>
 <option value="ALCALDE"> San Bartolomé Perulapía</option>
 <option value="ALCALDE"> San Cristóbal</option>
 <option value="ALCALDE"> San José Guayabal</option>
 <option value="ALCALDE"> San Pedro Perulapán</option>
 <option value="ALCALDE"> San Rafael Cedros</option>
 <option value="ALCALDE"> San Ramón</option>
 <option value="ALCALDE"> Santa Cruz Analquito</option>
 <option value="ALCALDE"> Santa Cruz Michapa</option>
 <option value="ALCALDE"> Suchitoto</option>
 <option value="ALCALDE"> Tenancingo</option>
 <option value="ALCALDE"> Antiguo Cuscatlán</option>
 <option value="ALCALDE"> Chiltiupán</option>
 <option value="ALCALDE"> Ciudad Arce</option>
 <option value="ALCALDE"> Colón</option>
 <option value="ALCALDE"> Comasagua</option>
 <option value="ALCALDE"> Huizúcar</option>
 <option value="ALCALDE"> Jayaque</option>
 <option value="ALCALDE"> Jicalapa</option>
 <option value="ALCALDE"> La Libertad</option>
 <option value="ALCALDE"> Nueva San Salvador</option>
 <option value="ALCALDE"> Nuevo Cuscatlán</option>
 <option value="ALCALDE"> Opico</option>
 <option value="ALCALDE"> Quezaltepeque</option>
 <option value="ALCALDE"> Sacacoyo</option>
 <option value="ALCALDE"> San José Villanueva</option>
 <option value="ALCALDE"> San Matías</option>
 <option value="ALCALDE"> San Pablo Tacachico</option>
 <option value="ALCALDE"> Talnique</option>
 <option value="ALCALDE"> Tamanique</option>
 <option value="ALCALDE">Teotepeque</option>
 <option value="ALCALDE"> Tepecoyo</option>
 <option value="ALCALDE"> Zaragoza</option>
 <option value="ALCALDE"> Cuyultitán</option>
 <option value="ALCALDE"> El Rosario</option>
 <option value="ALCALDE"> Jerusalén</option>
 <option value="ALCALDE"> Mercedes La Ceiba</option>
 <option value="ALCALDE"> Olocuilta</option>
 <option value="ALCALDE"> Paraíso de Osorio</option>
 <option value="ALCALDE"> San Antonio Masahuat</option>
 <option value="ALCALDE"> San Emigdio</option>
 <option value="ALCALDE"> San Francisco Chinameca</option>
 <option value="ALCALDE"> San Juan Nonualco</option>
 <option value="ALCALDE"> San Juan Talpa</option>
 <option value="ALCALDE"> San Juan Tepezontes</option>
 <option value="ALCALDE"> San Luis La Herradura</option>
 <option value="ALCALDE"> San Luis Talpa</option>
 <option value="ALCALDE"> San Miguel Tepezontes</option>
 <option value="ALCALDE"> San Pedro Masahuat</option>
 <option value="ALCALDE"> San Pedro Nonualco</option>
 <option value="ALCALDE"> San Rafael Obrajuelo</option>
 <option value="ALCALDE"> Santa María Ostuma</option>
 <option value="ALCALDE"> Santiago Nonualco</option>
 <option value="ALCALDE"> Tapalhuaca</option>
 <option value="ALCALDE"> Zacatecoluca</option>
 <option value="ALCALDE"> Anamorós</option>
 <option value="ALCALDE"> Bolívar</option>
 <option value="ALCALDE"> Concepción de Oriente</option>
 <option value="ALCALDE"> Conchagua</option>
 <option value="ALCALDE"> El Carmen</option>
 <option value="ALCALDE"> El Sauce</option>
 <option value="ALCALDE"> Intipucá</option>
 <option value="ALCALDE"> La Unión</option>
 <option value="ALCALDE"> Lislique</option>
 <option value="ALCALDE"> Meanguera del Golfo</option>
 <option value="ALCALDE"> Nueva Esparta</option>
 <option value="ALCALDE"> Pasaquina</option>
 <option value="ALCALDE"> Polorós</option>
 <option value="ALCALDE"> San Alejo</option>
 <option value="ALCALDE"> San José</option>
 <option value="ALCALDE"> Santa Rosa de Lima</option>
 <option value="ALCALDE"> Yayantique</option>
 <option value="ALCALDE"> Yucuayquín</option>
 <option value="ALCALDE"> Arambala</option>
 <option value="ALCALDE"> Cacaopera</option>
 <option value="ALCALDE"> Chilanga</option>
 <option value="ALCALDE"> Corinto</option>
 <option value="ALCALDE"> Delicias de Concepción</option>
 <option value="ALCALDE"> El Divisadero</option>
 <option value="ALCALDE"> El Rosario</option>
 <option value="ALCALDE"> Gualococti</option>
 <option value="ALCALDE"> Guatajiagua</option>
 <option value="ALCALDE"> Joateca</option>
 <option value="ALCALDE"> Jocoaitique</option>
 <option value="ALCALDE"> Jocoro</option>
 <option value="ALCALDE"> Lolotiquillo</option>
 <option value="ALCALDE"> Meanguera</option>
 <option value="ALCALDE"> Osicala</option>
 <option value="ALCALDE"> Perquín</option>
 <option value="ALCALDE"> San Carlos</option>
 <option value="ALCALDE"> San Fernando</option>
 <option value="ALCALDE"> San Francisco Gotera</option>
 <option value="ALCALDE"> San Isidro</option>
 <option value="ALCALDE"> San Simón</option>
 <option value="ALCALDE"> Sensembra</option>
 <option value="ALCALDE"> Sociedad</option>
 <option value="ALCALDE"> Torola</option>
 <option value="ALCALDE"> Yamabal</option>
 <option value="ALCALDE"> Yoloaiquín</option>
 <option value="ALCALDE"> Carolina</option>
 <option value="ALCALDE"> Chapeltique</option>
 <option value="ALCALDE"> Chinameca</option>
 <option value="ALCALDE"> Chirilagua</option>
 <option value="ALCALDE"> Ciudad Barrios</option>
 <option value="ALCALDE"> Comacarán</option>
 <option value="ALCALDE"> El Tránsito</option>
 <option value="ALCALDE"> Lolotique</option>
 <option value="ALCALDE"> Moncagua</option>
 <option value="ALCALDE"> Nueva Guadalupe</option>
 <option value="ALCALDE"> Nuevo Edén de San Juan</option>
 <option value="ALCALDE"> Quelepa</option>
 <option value="ALCALDE"> San Antonio</option>
 <option value="ALCALDE"> San Gerardo</option>
 <option value="ALCALDE"> San Jorge</option>
 <option value="ALCALDE"> San Luis de la Reina</option>
 <option value="ALCALDE"> San Miguel</option>
 <option value="ALCALDE"> San Rafael</option>
 <option value="ALCALDE"> Sesori</option>
 <option value="ALCALDE"> Uluazapa</option>
 <option value="ALCALDE"> Aguilares</option>
 <option value="ALCALDE"> Apopa</option>
 <option value="ALCALDE"> Ayutuxtepeque</option>
 <option value="ALCALDE"> Cuscatancingo</option>
 <option value="ALCALDE"> Delgado</option>
 <option value="ALCALDE"> El Paisnal</option>
 <option value="ALCALDE"> Guazapa</option>
 <option value="ALCALDE"> Ilopango</option>
 <option value="ALCALDE"> Mejicanos</option>
 <option value="ALCALDE"> Nejapa</option>
 <option value="ALCALDE"> Panchimalco</option>
 <option value="ALCALDE"> Rosario de Mora</option>
 <option value="ALCALDE"> San Marcos</option>
 <option value="ALCALDE"> San Martín</option>
 <option value="ALCALDE"> San Salvador</option>
 <option value="ALCALDE"> Santiago Texacuangos</option>
 <option value="ALCALDE"> Santo Tomás</option>
 <option value="ALCALDE"> Soyapango</option>
 <option value="ALCALDE"> Tonacatepeque</option>
 <option value="ALCALDE"> Apastepeque</option>
 <option value="ALCALDE"> Guadalupe</option>
 <option value="ALCALDE"> San Cayetano Istepeque</option>
 <option value="ALCALDE"> San Esteban Catarina</option>
 <option value="ALCALDE"> San Ildefonso</option>
 <option value="ALCALDE"> San Lorenzo</option>
 <option value="ALCALDE"> San Sebastián</option>
 <option value="ALCALDE"> Santa Clara</option>
 <option value="ALCALDE"> Santo Domingo</option>
 <option value="ALCALDE"> San Vicente</option>
 <option value="ALCALDE"> Tecoluca</option>
 <option value="ALCALDE"> Tepetitán</option>
 <option value="ALCALDE"> Verapaz</option>
 <option value="ALCALDE"> Candelaria de la Frontera</option>
 <option value="ALCALDE"> Chalchuapa</option>
 <option value="ALCALDE"> Coatepeque</option>
 <option value="ALCALDE"> El Congo</option>
 <option value="ALCALDE"> El Porvenir</option>
 <option value="ALCALDE"> Masahuat</option>
 <option value="ALCALDE"> Metapán</option>
 <option value="ALCALDE"> San Antonio Pajonal</option>
 <option value="ALCALDE"> San Sebastián Salitrillo</option>
 <option value="ALCALDE"> Santa Ana</option>
 <option value="ALCALDE"> Santa Rosa Guachipilín</option>
 <option value="ALCALDE"> Santiago de la Frontera</option>
 <option value="ALCALDE"> Texistepeque</option>
 <option value="ALCALDE"> Acajutla</option>
 <option value="ALCALDE"> Armenia</option>
 <option value="ALCALDE"> Caluco</option>
 <option value="ALCALDE"> Cuisnahuat</option>
 <option value="ALCALDE"> Izalco</option>
 <option value="ALCALDE"> Juayúa</option>
 <option value="ALCALDE"> Nahuizalco</option>
 <option value="ALCALDE"> Nahulingo</option>
 <option value="ALCALDE"> Salcoatitán</option>
 <option value="ALCALDE"> San Antonio del Monte</option>
 <option value="ALCALDE"> San Julián</option>
 <option value="ALCALDE"> Santa Catarina Masahuat</option>
 <option value="ALCALDE"> Santa Isabel Ishuatán</option>
 <option value="ALCALDE"> Santo Domingo</option>
 <option value="ALCALDE"> Sonsonate</option>
 <option value="ALCALDE"> Sonzacate</option>
 <option value="ALCALDE"> Alegría</option>
 <option value="ALCALDE"> Berlín</option>
 <option value="ALCALDE"> California</option>
 <option value="ALCALDE"> Concepción Batres</option>
 <option value="ALCALDE"> El Triunfo</option>
 <option value="ALCALDE"> Ereguayquín</option>
 <option value="ALCALDE"> Estanzuelas</option>
 <option value="ALCALDE"> Jiquilisco</option>
 <option value="ALCALDE"> Jucuapa</option>
 <option value="ALCALDE"> Jucuarán</option>
 <option value="ALCALDE"> Mercedes Umaña</option>
 <option value="ALCALDE"> Nueva Granada</option>
 <option value="ALCALDE"> Ozatlán</option>
 <option value="ALCALDE"> Puerto El Triunfo</option>
 <option value="ALCALDE"> San Agustín</option>
 <option value="ALCALDE"> San Buenaventura</option>
 <option value="ALCALDE"> San Dionisio</option>
 <option value="ALCALDE"> San Francisco Javier</option>
 <option value="ALCALDE"> Santa Elena</option>
 <option value="ALCALDE"> Santa María</option>
 <option value="ALCALDE"> Santiago de María</option>
 <option value="ALCALDE"> Tecapán</option>
 <option value="ALCALDE"> Usulután</option>
                  </select>
                </td>
              </tr>
              <tr>
                 <td colspan="2">
                     <input type="submit" name='Aceptar' id="Aceptar" value='Enviar Datos'>
                 </td>
              </tr>
          </table>
        </form>
 MUNICIPIOS:
 <select name="seccion1">
 <option value=""></option>

 </select>
 </p>
  <p>
  <p align="center">
  <input type="submit" name='bot' value='Enviar Datos'>
  <br><br>
  </p>
  </p>
  </p>
  </p>
  </p>
  </p>
  </p>
  </td>
  </tr>
  </table>
  </form>
  </p>
  </body>
  </font>
  </font>
  </body>
  </body>
</html> 
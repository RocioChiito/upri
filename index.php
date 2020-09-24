<!doctype html>
<html>
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170221874-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-170221874-1');
  </script>
  <meta charset="utf-8">
  <title> UPRI </title>
  <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <div id="container">

    <nav class="head_menu">
      <ul>
        <li><a href="#section0" class="menu"> Oferta Académica 2020 </a></li>
    		<!-- <li><a href="#section1" class="menu"> Cursos de Alto Nivel </a></li> -->
    		<li><a href="#transparencia" class="menu"> Inscripciones </a></li>
    	</ul>
    </nav>

    <div id="slider">
      <div id="transparencia">
        <div id="titulo" class="box1">
          <img id="logos" src="images/lj.png">
          <p id="ppp">Universidad Mayor de San Andrés</p>
          <p id="pp">Facultad de Derecho y<br>Ciencias Políticas</p>
          <h1 id="lob">Unidad de<br>Postgrado y<br>Relaciones<br>Internacionales</h1>
        </div>
        <div class="box1">
          <div>
            <input id="boton" type="button" style="width:250px;" value="Ingresar Plataforma Virtual" onClick="location.href='http://200.7.168.202/moodle'"/>
          </div>
          <div id="formulario2">
            <p id="pppp">Inscripción</p>
            <div class="formulario1" id="nom1">
        		    <form action="registro.php" method="post" name="form1" id="form1">

                  <label for="name"></label>
                  <select id="course"  name="course" onchange="setPaymentPlan()" />
                    <!-- <option>Redacción de Demandas de Amparos Constitucionales 2da version</option> -->
                    <!-- <option>Impugnación Administrativa y Jurisdiccional en Materia Tributaria</option> -->
                    <!-- <option>Derecho de Tecnologías de Información y Comunicación (TIC)</option> -->
                    <option selected>Doctorado: Derecho Penal y Política Criminal</option>
                    <option>Doctorado: Derecho Constitucional y Administrativo</option>
                    <option>Doctorado: Ciencia Política y Relaciones Internacionales</option>
                    <!-- <option>Maestría: Derecho Constitucional y Derecho Procesal Constitucional</option> -->
                    <!-- <option>Maestría: Derecho Civil y Derecho Procesal Civil</option> -->
                    <option>Maestría: Ciencias Penales y Criminológicas</option>
                    <option>Maestría: Derecho Comercial y Derecho Corporativo</option>
                    <option>Maestría: Argumentación e Interpretación Jurídica</option>
                    <option>Maestría: Gestion De Gobierno Y Politicas Públicas</option>
                    <!-- <option>Diplomado: Ciencias Penales y Criminológicas</option> -->
                    <!-- <option>Diplomado: Código Procesal Civil y en el Código de las Familias y del proceso familiar</option> -->
                    <!-- <option>Diplomado: Derecho Administrativo y Gestión Pública</option> -->
                    <!-- <option>Diplomado: Educacion Superior e Interculturalidad</option> -->
                    <!-- <option>Diplomado: Derecho Notarial</option> -->
                    <!-- <option>Diplomado: Derecho Tributario y Aduanero</option> -->
                    <option>Diplomado: Metodologia De La Investigacion</option>
                  </select>

                  <label for="name"></label>
                  <input id="name" type="text" name="name" placeholder="Apellido Paterno/Materno/Nombres" />

                  <label for="ci"></label>
                	<input id="ci" type="text" name="ci" placeholder="C.I." />

                  <div id="sectionPlanDiplo" style="display: none">
                    <label for="paymentPlan"></label>
                    <select id="paymentPlanDiplo"  name="paymentPlan" />
                      <option value="A">Forma de pagos A Cuotas</option>
                      <option value="CC">Forma de pagos Al Contado</option>
                    </select>
                  </div>

                  <div id="sectionPlanMaster" style="display: none">
                    <label for="paymentPlan"></label>
                    <select id="paymentPlanMaster"  name="paymentPlan" />
                      <option value="A">Forma de pagos A (descuento 5%)</option>
                      <option value="B">Forma de pagos B </option>
                      <option value="CC">Forma de pagos Al Contado (descuento 10%)</option>
                      <option value="I">Institucional al Crédito (3 ó más Pers) (descuento 10%)</option>
                      <option value="B50">Excelencia Académica o Docente Titular</option>
                    </select>
                  </div>

                  <div id="sectionPlanDoctorado" style="display: ''">
                    <label for="paymentPlan"></label>
                    <select id="paymentPlanDoctorado"  name="paymentPlan" />
                      <option value="A">Forma de pagos A (descuento 5%)</option>
                      <option value="B">Forma de pagos B </option>
                      <option value="CC">Forma de pagos Al Contado (descuento 10%)</option>
                      <option value="I">Institucional al Crédito (3 ó más Pers) (descuento 10%)</option>
                      <option value="B50">Excelencia Académica o Docente Titular</option>
                    </select>
                  </div>

               	 	<label for="date"> </label>
                  <input id="date" type="date" name="date" placeholder="Fecha de nacimiento" />

               	 	<label for="address"> </label>
               	 	<input id="address" type="text" name="address"/ placeholder="Dirección" />

                  <label for="mobile"> </label>
               	 	<input id="mobile" type="text" name="mobile"/ placeholder="Celular" />

                  <label for="email"> </label>
               	 	<input id="email" type="email" name="email"/ placeholder="Correo" />
                  <div class="formulario1" id="cent1">
                    <input id="botonEnvio" type="button"   value="Enviar"/>
                  </div>
        		    </form>
              </div>
            </div>
          </div>
          <!--
          <div id="bloc">
            <p>Unidad de:</p>
            <h1>Postgrado y<br>Relaciones<br>Internacionales</h1>
            <p id="pp">Facultad de Derecho y<br>Ciencias Políticas</p>
          </div>
          -->
        </div>
      </div>

      <div id="section0">
          <div id="encabezado">
            <img id="dip" src="images/diplomados.png">
            <p class="encabezados">Oferta Académica 2020</p>
            <p class="encabezados" style="font-size: large;">Modalidad a Distancia</p>
            <img src="images/lidip.png">
          </div>
          <div id="section0-1">
            <center>
              <table border="0">
                <tbody>
                  <tr>
                    <td class="encabezados" style="font-size: 30px; padding:10px 5px;" align="center">Doctorados<br></td>
                    <td style="padding: 10px 10px;">
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Penal y Política Criminal</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>(Inicio: 27 de septiembre)</em> <a href="docs/DOC-DPyPC-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Constitucional y Administrativo</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 27 de septiembre)</em> <a href="docs/DOC-DCyA-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Ciencia Política y Relaciones Internacionales</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 4 de septiembre)</em> <a href="docs/DOC-CPRI-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                    </td>
                  </tr>
                  <tr>
                    <td class="encabezados" style="font-size: 30px; padding:10px 5px;" align="center">Maestrías<br></td>
                    <td style="padding: 10px 10px;" class="content-1">
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Constitucional y Derecho Procesal Constitucional</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 28 de agosto)</em> <a href="docs/MAE-DConsyDPCons-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Civil y Derecho Procesal Civil</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 4 de septiembre)</em> <a href="docs/MAE-DCyDPC-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Ciencias Penales y Criminológicas</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 11 de septiembre)</em> <a href="docs/MAE-CPyC-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Comercial y Derecho Corporativo</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 18 de septiembre)</em> <a href="docs/MAE-DCyDC-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Argumentación e Interpretación Jurídica – Semi-Presencial</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 18 de septiembre)</em> <a href="docs/MAE-IyAJ-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Gestión de Gobierno y Políticas Públicas</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>(Inicio: 11 de septiembre)</em> <a href="docs/MAE-GGPP-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                    </td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="encabezados" style="font-size: 30px; padding:10px 5px;" align="center">Diplomados<br></td>
                    <td style="padding: 10px 10px;">
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Ciencias Penales y Criminológicas</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 6 de Julio)</em> <a href="docs/DIP-CP-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Notarial</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 13 de Julio)</em> <a href="docs/DIP-DN-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Código Procesal Civil y en el Código de las Familias y del proceso familiar</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 6 de julio)</em> <a href="docs/DIP-CPCyCFPF-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Administrativo y Gestión Pública</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 6 de Julio)</em> <a href="docs/DIP-DAyGP-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Derecho Tributario y Aduanero</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 13 de Julio)</em> <a href="docs/DIP-DTyA-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Educación Superior e Interculturalidad</strong> <p style="font-size: 15px; padding-bottom: 10px;  padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 6 de Julio)</em> <a href="docs/DIP-ESI-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                      <li><strong style="color: #9b6c48; font-family: Cambria; font-size: 18px;">Metodología de la Investigación</strong> <p style="font-size: 15px; padding-bottom: 10px; padding-top: 3px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <em>(Inicio: 13 de Julio)</em> <a href="docs/DIP-MI-2020.pdf" target="_blank">Mas Información: <img src="images/pdf.png" alt="Descargar" width="2%" height="11%"></a></p></li>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
          </center>
        </div>
      </div>
      <!--
      <div id="encabezado">
        <img id="dip" src="images/diplomados.png">
        <p class="encabezados">Cursos de Alto Nivel</p>
        <img src="images/lidip.png">
      </div>
      -- >
      <div id="section1">
        <div class="box">
          <h2>Curso de Alto Nivel:</h2>
          <p>Redacción de Demandas de Amparos Constitucionales 2da version</p>
          <div class="subtitle">
            Duración: 1 mes<br>
            Costo: 1200 Bs.
          </div>
          <center><img class="aumentar" src="images/curso1.png" >
            <p>Modalidad virtual<br><a id="color" href="docs/redaccion2.pdf">Información</a></p>
          </center>
        </div>
        <div class="box">
          <h2>Curso de Alto Nivel:</h2>
          <p>Impugnación Administrativa y Jurisdiccional en Materia Tributaria</p>
          <div class="subtitle">
            Duración: 1 mes<br>
            Costo: 1200 Bs.
          </div>
          <center><img class="aumentar" src="images/curso2.png" >
            <p>Modalidad virtual<br><a id="color" href="docs/tributario.pdf">Información</a></p>
          </center>
        </div>
        <div class="box">
          <h2>Curso de Alto Nivel:</h2>
          <p>Derecho de Tecnologías de Información y Comunicación (TIC)</p>
          <div class="subtitle">
            Duración: 1 mes<br>
            Costo: 1200 Bs.
          </div>
          <center><img class="aumentar" src="images/curso3.png" >
            <p>Modalidad virtual<br><a id="color" href="docs/tecnologias.pdf">Información</a></p>
          </center>
        </div>
      </div>
      <!--
      <div id="contacto">
        <p>¿Quieres Preinscribirte a un curso <br> virtual de alto nivel corto?</p>
        <div class="formulario">
          <div class="formulario" id="nom">
            <form action="contacto.php" method="post">
              <label for="nombre"></label>
              <input id="name" type="text" name="nombre" placeholder="Curso" required/>
              <label for="nombre"></label>
              <input id="name" type="text" name="nombre" placeholder="Nombre" required/>
              <label for="email"> </label>
              <input id="email" type="email" name="email"/ placeholder="Correo" required/>
              <label for="email"> </label>
              <input id="email" type="email" name="email"/ placeholder="Celular" required/>
            </form>
          </div>
          <div class="formulario" id="cent">
            <input id="submit" type="submit" name="submit" value="Enviar"/>
          </div>
        </div>
      </div>
      -->
      <div id="section2">
        <div id="back" class="box2">
          <h2>Informaciones y consultas</h2>
          <p>Calle Loayza, N°332<br>
            WhatsApp / Celulares: 72084220 - 75291700<br>
            Email: postgradoumsavirtual@gmail.com<br>
            Pagina web: www.postgradoderecho.com.bo<br>
            Bolivia
          </p>
        </div>
      </div>

    </div>

    <script src="assets/jquery-3.5.1.min.js"></script>
    <script src="assets/fontawesome/js/fontawesome.min.js"></script>

    <script>

      $('#botonEnvio').click(function(event){

        <?php $folder = explode("index.php", $_SERVER['PHP_SELF']); ?>
        var url = "http://<?php echo $_SERVER['SERVER_NAME'].$folder[0];?>registro.php";
        var data = $('#form1').serialize();

        $.post(url, data, function(result, textStatus, xhr) {
          //console.log();
          if(result.length == 1000){
            alert("Tus datos fueron enviados correctamente, recibira un email con la confirmacion de sus isncripcion");
            $('#form1').trigger("reset");
          }else{
             alert('Error al registrar')
          }
        }).fail(function(esp){
          alert('Fallo el registro')
        });

      });

       function setPaymentPlan() {
         var course = document.getElementById("course").value;
         document.getElementById('sectionPlanDoctorado').style.display = 'none';
         document.getElementById('sectionPlanMaster').style.display = 'none';
         document.getElementById('sectionPlanDiplo').style.display = 'none';
         if (course.indexOf('Doctorado') !== -1) {
           document.getElementById('sectionPlanDoctorado').style.display = '';
         }
         if (course.indexOf('Maestría') !== -1) {
           document.getElementById('sectionPlanMaster').style.display = '';
         }
         if (course.indexOf('Diplomado') !== -1) {
         document.getElementById('sectionPlanDiplo').style.display = '';
         }
       }

     	function register(){
             var course = document.getElementById("course").value;
             var paymentPlan = '';
             if (course.indexOf('Doctorado') !== -1) {
                 paymentPlan = document.getElementById("paymentPlanDoctorado").value;
             }
             if (course.indexOf('Maestría') !== -1) {
                 paymentPlan = document.getElementById("paymentPlanMaster").value;
             }
             if (course.indexOf('Diplomado') !== -1) {
                 paymentPlan = document.getElementById("paymentPlanDiplo").value;
             }

             var xhr = new XMLHttpRequest();
             xhr.open('POST', 'http://virtual.postgradoderecho.com.bo/api/users/register', true);
             xhr.setRequestHeader('Content-Type', 'application/json');
             xhr.send(JSON.stringify({
                 course: document.getElementById("course").value,
                 name: document.getElementById("name").value,
                 ci: document.getElementById("ci").value,
                 date: document.getElementById("date").value,
                 address: document.getElementById("address").value,
                 mobile: document.getElementById("mobile").value,
                 email: document.getElementById("email").value,
                 paymentPlan: paymentPlan
             }));
     		alert("Tus datos fueron enviados correctamente, recibira un email con la confirmacion de sus isncripcion");
     	}
   </script>

</body>
</html>

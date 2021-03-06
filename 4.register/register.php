<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="../2.view/css/registro/bootstrap4/css/bootstrap.min.css">	         
    <link rel="stylesheet" href="../2.view/css/registro/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">
	  <style>
        @import url("https://fonts.googleapis.com/css?family=Lato");
        html,
        body {
          background-color: rgb(253, 253, 253);
          height: 100%;
          margin: 0;
          font-family: Lato, sans-serif;
        }
        header{
        background: #f12711;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        #cuerpo{
          width: 100%;
          margin: auto;
          margin-top: 15vh;
        }

        #titulo_registro{
          text-align: center;
          margin-bottom: 3vh;
          font-family: Verdana, Geneva, Tahoma, sans-serif;
          font-size: 35px;
          margin-bottom: 5vh;
        }

        .caja{
          position: relative;
          left: 4%;
          width: 92%;
          margin-bottom: 2vh;
          height: 5vh;
        }

        #contain_caja{
          border: black 1px solid;
          border-radius: 10px;
          margin: auto;
          background-color: rgb(255, 255, 255);
          width: 30%;
        }

        #boton_register{
          position: relative;
          left: 5%;
          width: 90%;
          margin-bottom: 2vh;
          margin-top: 2vh;
          height: 10vh;
          border-radius: 10px;
          background-color: black;
          color: white;
        }

        .info{
          margin-top: 3vh;
          text-align: center;
          font-size: 15px;
        }
    </style>
</head>
<body>
    <section id="cuerpo">
        <div id="contain_caja">
            <h1 id="titulo_registro">Registrarse</h1>
            <form action="recibir_registrarse.php" method="post">
                <input required name="nombre" class="caja" placeholder="Nombre Completo" type="text">
                <input required name="usuario" class="caja" placeholder="Correo Electronico" type="text">
                <input required name="pass" class="caja" placeholder="Contrase??a" type="password">
                <input required name="Submit" id="boton_register" class="boton" type="submit" value="Registrate">
            </form>
            <p class="info">
                <span id="btn3">Al registrarse Acepta los Terminos Y Condiciones de privacidad</span>
            </p>
            <p class="info" id="final">??Ya tienes una cuenta? <a href="../3.login/login.php">Iniciar Sesion</a></p>
        </div>
    </section>

    <div id="modal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal3Title">Terminos Y Condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Informacion General</h3>
        <p>Este sitio web es operado por CoolStyle . En todo el sitio, los t??rminos ???nosotros???, ???nos??? y ???nuestro??? se refieren a CoolStyle con nombre comercial ofrece este sitio web, incluyendo toda la informaci??n, herramientas y servicios disponibles para ti en este sitio, el usuario, est?? condicionado a la aceptaci??n de todos los t??rminos, condiciones, pol??ticas y notificaciones aqu?? establecidos.</p>
        <p>Al visitar nuestro sitio y/o comprar algo de nosotros, participas en nuestro ???Servicio??? y aceptas los siguientes t??rminos y condiciones (???T??rminos de Servicio???, ???T??rminos???), incluidos todos los t??rminos y condiciones adicionales y las pol??ticas a las que se hace referencia en el presente documento y/o disponible a trav??s de hiperv??nculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo sin limitaci??n a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.</p>
        <p>Por favor, lee estos T??rminos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, est??s aceptando los T??rminos de Servicio. Si no est??s de acuerdo con todos los t??rminos y condiciones de este acuerdo, entonces no deber??as acceder a la p??gina web o usar cualquiera de los servicios. Si las T??rminos de Servicio son considerados una oferta, la aceptaci??n est?? expresamente limitada a estos T??rminos de Servicio.</p>
        <p>Cualquier funci??n nueva o herramienta que se a??adan a la tienda actual, tambi??n estar??n sujetas a los T??rminos de Servicio. Puedes revisar la versi??n actualizada de los T??rminos de Servicio, en cualquier momento en esta p??gina. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los T??rminos de Servicio mediante la publicaci??n de actualizaciones y/o cambios en nuestro sitio web. Es tu responsabilidad chequear esta p??gina peri??dicamente para verificar cambios. Tu uso continuo o el acceso al sitio web despu??s de la publicaci??n de cualquier cambio constituye la aceptaci??n de dichos cambios.</p>
        <h3>Secci??n 1 ??? T??rminos de la tienda en l??nea</h3>
        <p>Al utilizar este sitio, declaras que tienes al menos la mayor??a de edad en tu estado o provincia de residencia, o que tienes la mayor??a de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de tus dependientes menores use este sitio.</p>
        <p>No puedes usar nuestros productos con ning??n prop??sito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicci??n (incluyendo pero no limitado a las leyes de derecho de autor).</p>
        <p>No debes transmitir gusanos, virus o cualquier c??digo de naturaleza destructiva.</p>
        <p>El incumplimiento o violaci??n de cualquiera de estos T??rminos dar??n lugar al cese inmediato de tus Servicios.</p>
        <h3>Secci??n 2 ??? Condiciones generales</h3>
        <p>Nos reservamos el derecho de rechazar la prestaci??n de servicio a cualquier persona, por cualquier motivo y en cualquier momento.</p>
        <p>Entiendes que tu contenido (sin incluir la informaci??n de tu tarjeta de cr??dito), puede ser transferida sin encriptar e involucrar (a) transmisiones a trav??s de varias redes; y (b) cambios para ajustarse o adaptarse a los requisitos t??cnicos de conexi??n de redes o dispositivos. La informaci??n de tarjetas de cr??dito est?? siempre encriptada durante la transferencia a trav??s de las redes.</p>
        <p>Est??s de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, uso del Servicio, o acceso al Servicio o cualquier contacto en el sitio web a trav??s del cual se presta el servicio, sin el expreso permiso por escrito de nuestra parte.</p>
        <p>Los t??tulos utilizados en este acuerdo se incluyen solo por conveniencia y no limita o afecta a estos T??rminos.</p>
        <h3>Secci??n 3 ??? Exactitud, exhaustividad y actualidad de la informaci??n</h3>
        <p>No nos hacemos responsables si la informaci??n disponible en este sitio no es exacta, completa o actual. El material en este sitio es provisto s??lo para informaci??n general y no debe confiarse en ella o utilizarse como la ??nica base para la toma de decisiones sin consultar primeramente, informaci??n m??s precisa, completa u oportuna. Cualquier dependencia en el materia de este sitio es bajo su propio riesgo.</p>
        <p>Este sitio puede contener cierta informaci??n hist??rica. La informaci??n hist??rica, no es necesariamente actual y es provista ??nicamente para tu referencia. Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, pero no tenemos obligaci??n de actualizar cualquier informaci??n en nuestro sitio. Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
        <h3>Secci??n 4 ??? Modificaciones al servicio y precios</h3>
        <p>Los precios de nuestros productos est??n sujetos a cambio sin aviso.</p>
        <p>Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte del contenido) en cualquier momento sin aviso previo.</p>
        <p>No seremos responsables ante ti o alguna tercera parte por cualquier modificaci??n, cambio de precio, suspensi??n o discontinuidad del Servicio.</p>
        <h3>Secci??n 5 ??? Productos o servicios</h3>
        <p>Ciertos productos o servicios pueden estar disponibles exclusivamente en l??nea a trav??s del sitio web. Estos productos o servicios pueden tener cantidades limitadas y estar sujetas a devoluci??n o cambio de acuerdo a nuestra pol??tica de devoluci??n solamente.</p>
        <p>Hemos hecho el esfuerzo de mostrar los colores y las im??genes de nuestros productos, en la tienda, con la mayor precisi??n de colores posible. No podemos garantizar que el monitor de tu computadora muestre los colores de manera exacta.</p>
        <p>Todos los productos son sujetos a disponibilidad. Las im??genes de los banners son ilustrativas. Estos legales cubren todas las publicaciones hechas en todos los medios.</p>
        <p>Todas las promociones no son acumulable con otras promociones. Aplican hasta agotar existencias y est??n restringidas a una por persona.</p>
        <p>El uso de cupones es personal, solo un cup??n por usuario. Cup??n por orden. Cada cup??n puede tener restricciones particulares que ser??n comunicadas en el banner.</p>
        <p>Nos reservamos el derecho, pero no estamos obligados, para limitar las ventas de nuestros productos o servicios a cualquier persona, regi??n geogr??fica o jurisdicci??n. Podemos ejercer este derecho basados en cada caso. Nos reservamos el derecho de limitar las cantidades de los productos o servicios que ofrecemos. Todas las descripciones de productos o precios de los productos est??n sujetos a cambios en cualquier momento sin previo aviso, a nuestra sola discreci??n. Nos reservamos el derecho de discontinuar cualquier producto en cualquier momento. Cualquier oferta de producto o servicio hecho en este sitio es nulo donde est?? prohibido.</p>
        <p>No garantizamos que la calidad de los productos, servicios, informaci??n u otro material comprado u obtenido por ti cumpla con tus expectativas, o que cualquier error en el Servicio ser?? corregido.</p>
        <p>CoolStyle se compromete a proporcionar los mejores productos que cumpla con nuestros est??ndares de aseo de la moda, as?? como cumplir con la m??s alta seguridad de la salud y los requisitos reglamentarios aplicables relacionados. En el caso de que alguno de nuestros productos no cumpla con los m??s altos est??ndares, no nos hacemos responsables de los da??os resultantes de la falta de uso o defecto de los productos, y se retirar?? el producto de nuestro mercado de inmediato.</p>
        <h3>Secci??n 6 ??? Exactitud de facturaci??n e informaci??n de cuenta</h3>
        <p>Nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestra discreci??n, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden incluir pedidos realizados por o bajo la misma cuenta de cliente, la misma tarjeta de cr??dito, y/o pedidos que utilizan la misma facturaci??n y/o direcci??n de env??o.</p>
        <p>Precios pueden variar sin previo aviso debido a factores externos: devaluaciones monetarias, alteraciones dr??sticas en el tipo de cambio, entre otras.</p>
        <p>En el caso de que hagamos un cambio o cancelemos una orden, podemos intentar notificarle poni??ndonos en contacto v??a correo electr??nico y/o direcci??n de facturaci??n / n??mero de tel??fono proporcionado en el momento que se hizo pedido. Nos reservamos el derecho de limitar o prohibir las ??rdenes que, a nuestro juicio, parecen ser colocado por los concesionarios, revendedores o distribuidores.</p>
        <p>Te comprometes a proporcionar informaci??n actual, completa y precisa de la compra y cuenta utilizada para todas las compras realizadas en nuestra tienda. Te comprometes a actualizar r??pidamente tu cuenta y otra informaci??n, incluyendo tu direcci??n de correo electr??nico y n??meros de tarjetas de cr??dito y fechas de vencimiento, para que podamos completar tus transacciones y contactarte cuando sea necesario.</p>
        <p>Para m??s detalles, por favor revisa nuestra Pol??tica de Devoluciones, en la secci??n 18 de este documento.</p>
        <h3>Secci??n 7 ??? Herramientas opcionales</h3>
        <p>Es posible que te proporcionamos acceso a herramientas de terceros a los cuales no monitoreamos y sobre los que no tenemos control ni entrada.</p>
        <p>Reconoces y aceptas que proporcionamos acceso a este tipo de herramientas ??tal cual?? y ??seg??n disponibilidad?? sin garant??as, representaciones o condiciones de ning??n tipo y sin ning??n respaldo. No tendremos responsabilidad alguna derivada de o relacionada con tu uso de herramientas proporcionadas por terceras partes.</p>
        <p>Cualquier uso que hagas de las herramientas opcionales que se ofrecen a trav??s del sitio bajo tu propio riesgo y discreci??n y debes asegurarte de estar familiarizado y aprobar los t??rminos bajo los cuales estas herramientas son proporcionadas por el o los proveedores de terceros.</p>
        <p>Tambi??n es posible que, en el futuro, te ofrezcamos nuevos servicios y/o caracter??sticas a trav??s del sitio web (incluyendo el lanzamiento de nuevas herramientas y recursos). Estas nuevas caracter??sticas y/o servicios tambi??n estar??n sujetos a estos T??rminos de Servicio.</p>
        <h3>Secci??n 8 ??? Enlaces de terceras partes</h3>
        <p>Cierto contenido, productos y servicios disponibles v??a nuestro Servicio puede incluir material de terceras partes.</p>
        <p>Enlaces de terceras partes en este sitio pueden redireccionarse a sitios web de terceras partes que no est??n afiliadas con nosotros. No nos responsabilizamos de examinar o evaluar el contenido o exactitud y no garantizamos ni tendremos ninguna obligaci??n o responsabilidad por cualquier material de terceros o sitios web, o de cualquier material, productos o servicios de terceros.</p>
        <p>No nos hacemos responsables de cualquier da??o o da??os relacionados con la adquisici??n o utilizaci??n de bienes, servicios, recursos, contenidos, o cualquier otra transacci??n realizadas en conexi??n con sitios web de terceros. Por favor revisa cuidadosamente las pol??ticas y pr??cticas de terceros y aseg??rate de entenderlas antes de participar en cualquier transacci??n. Quejas, reclamos, inquietudes o preguntas con respecto a productos de terceros deben ser dirigidas a la tercera parte.</p>
        <h3>Secci??n 9 ??? Comentarios de usuarios, captaci??n y otros env??os</h3>
        <p>Si, a pedido nuestro, env??as ciertas presentaciones espec??ficas (por ejemplo la participaci??n en concursos) o sin un pedido de nuestra parte env??as ideas creativas, sugerencias, proposiciones, planes, u otros materiales, ya sea en l??nea, por email, por correo postal, o de otra manera (colectivamente, ???comentarios???), aceptas que podamos, en cualquier momento, sin restricci??n, editar, copiar, publicar, distribuir, traducir o utilizar por cualquier medio comentarios que nos hayas enviado. No tenemos ni tendremos ninguna obligaci??n (1) de mantener ning??n comentario confidencialmente; (2) de pagar compensaci??n por comentarios; o (3) de responder a comentarios.</p>
        <p>Nosotros podemos, pero no tenemos obligaci??n de, monitorear, editar o remover contenido que consideremos sea ileg??timo, ofensivo, amenazante, calumnioso, difamatorio, pornogr??fico, obsceno u objetable o viole la propiedad intelectual de cualquiera de las partes o los T??rminos de Servicio.</p>
        <p>Aceptas que tus comentarios no violar?? los derechos de terceras partes, incluyendo derechos de autor, marca, privacidad, personalidad u otro derechos personal o de propiedad. Asimismo, aceptas que tus comentarios no contienen material difamatorio o ilegal, abusivo u obsceno, o contienen virus inform??ticos u otro malware que pudiera, de alguna manera, afectar el funcionamiento del Servicio o de cualquier sitio web relacionado. No puedes utilizar una direcci??n de correo electr??nico falsa, usar otra identidad que no sea leg??tima, o enga??ar a terceras partes o a nosotros en cuanto al origen de tus comentarios. Tu eres el ??nico responsable por los comentarios que haces y su precisi??n. No nos hacemos responsables y no asumimos ninguna obligaci??n con respecto a los comentarios publicados por ti o cualquier tercer parte.</p>
        <h3>Secci??n 10 ??? Informaci??n personal</h3>
        <p>Tu presentaci??n de informaci??n personal a trav??s del sitio se rige por nuestra Pol??tica de Privacidad. Para ver nuestro Aviso de Privacidad.</p>
        <h3>Secci??n 11 ??? Errores, inexactitudes y omisiones</h3>
        <p>De vez en cuando puede haber informaci??n en nuestro sitio o en el Servicio que contiene errores tipogr??ficos, inexactitudes u omisiones que puedan estar relacionadas con las descripciones de productos, precios, promociones, ofertas, gastos de env??o del producto, el tiempo de tr??nsito y la disponibilidad. Nos reservamos el derecho de corregir los errores, inexactitudes u omisiones y de cambiar o actualizar la informaci??n o cancelar pedidos si alguna informaci??n en el Servicio o en cualquier sitio web relacionado es inexacta en cualquier momento sin previo aviso (incluso despu??s de que hayas enviado tu orden) .</p>
        <p>No asumimos ninguna obligaci??n de actualizar, corregir o aclarar la informaci??n en el Servicio o en cualquier sitio web relacionado, incluyendo, sin limitaci??n, la informaci??n de precios, excepto cuando sea requerido por la ley. Ninguna especificaci??n actualizada o fecha de actualizaci??n aplicada en el Servicio o en cualquier sitio web relacionado, debe ser tomada para indicar que toda la informaci??n en el Servicio o en cualquier sitio web relacionado ha sido modificado o actualizado.</p>
        <h3>Secci??n 12 ??? Usos prohibidos</h3>
        <p>En adici??n a otras prohibiciones como se establece en los T??rminos de Servicio, se proh??be el uso del sitio o su contenido: (a) para ning??n prop??sito ilegal; (b) para pedirle a otros que realicen o participen en actos il??citos; (c) para violar cualquier regulaci??n, reglas, leyes internacionales, federales, provinciales o estatales, u ordenanzas locales; (d) para infringir o violar el derecho de propiedad intelectual nuestro o de terceras partes; (e) para acosar, abusar, insultar, da??ar, difamar, calumniar, desprestigiar, intimidar o discriminar por razones de g??nero, orientaci??n sexual, religi??n, etnia, raza, edad, nacionalidad o discapacidad; (f) para presentar informaci??n falsa o enga??osa; (g) para cargar o transmitir virus o cualquier otro tipo de c??digo malicioso que sea o pueda ser utilizado en cualquier forma que pueda comprometer la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, otros sitios o Internet; (h) para recopilar o rastrear informaci??n personal de otros; (i) para generar spam, phish, pharm, pretext, spider, crawl, or scrape; (j) para cualquier prop??sito obsceno o inmoral; o (k) para interferir con o burlar los elementos de seguridad del Servicio o cualquier sitio web relacionado?? otros sitios o Internet. Nos reservamos el derecho de suspender el uso del Servicio o de cualquier sitio web relacionado por violar cualquiera de los ??tems de los usos prohibidos.</p>
        <h3>Secci??n 13 ??? Exclusi??n de garant??as; limitaci??n de responsabilidad</h3>
        <p>No garantizamos ni aseguramos que el uso de nuestro servicio ser?? ininterrumpido, puntual, seguro o libre de errores.</p>
        <p>No garantizamos que los resultados que se puedan obtener del uso del servicio ser??n exactos o confiables.</p>
        <p>Aceptas que de vez en cuando podemos quitar el servicio por per??odos de tiempo indefinidos o cancelar el servicio en cualquier momento sin previo aviso.</p>
        <p>Aceptas expresamente que el uso de, o la posibilidad de utilizar, el servicio es bajo tu propio riesgo. El servicio y todos los productos y servicios proporcionados a trav??s del servicio son (salvo lo expresamente manifestado por nosotros) proporcionados ??tal cual?? y ??seg??n est?? disponible?? para su uso, sin ning??n tipo de representaci??n, garant??as o condiciones de ning??n tipo, ya sea expresa o impl??cita, incluidas todas las garant??as o condiciones impl??citas de comercializaci??n, calidad comercializable, la aptitud para un prop??sito particular, durabilidad, t??tulo y no infracci??n.</p>
        <p>En ning??n caso CoolStyle, nuestros directores, funcionarios, empleados, afiliados, agentes, contratistas, internos, proveedores, prestadores de servicios o licenciantes ser??n responsables por cualquier da??o, p??rdida, reclamo, o da??os directos, indirectos, incidentales, punitivos, especiales o consecuentes de cualquier tipo, incluyendo, sin limitaci??n, p??rdida de beneficios, p??rdida de ingresos, p??rdida de ahorros, p??rdida de datos, costos de reemplazo, o cualquier da??o similar, ya sea basado en contrato, agravio (incluyendo negligencia), responsabilidad estricta o de otra manera, como consecuencia del uso de cualquiera de los servicios o productos adquiridos mediante el servicio, o por cualquier otro reclamo relacionado de alguna manera con el uso del servicio o cualquier producto, incluyendo pero no limitado, a cualquier error u omisi??n en cualquier contenido, o cualquier p??rdida o da??o de cualquier tipo incurridos como resultados de la utilizaci??n del servicio o cualquier contenido (o producto) publicado, transmitido, o que se pongan a disposici??n a trav??s del servicio, incluso si se avisa de su posibilidad. Debido a que algunos estados o jurisdicciones no permiten la exclusi??n o la limitaci??n de responsabilidad por da??os consecuenciales o incidentales, en tales estados o jurisdicciones, nuestra responsabilidad se limitar?? en la medida m??xima permitida por la ley.</p>
        <h3>Secci??n 14 ??? Indemnizaci??n</h3>
        <p>Aceptas indemnizar, defender y mantener indemne CoolStyle y nuestras matrices, subsidiarias, afiliados, socios, funcionarios, directores, agentes, contratistas, concesionarios, proveedores de servicios, subcontratistas, proveedores, internos y empleados, de cualquier reclamo o demanda, incluyendo honorarios razonables de abogados, hechos por cualquier tercero a causa o como resultado de tu incumplimiento de las Condiciones de Servicio o de los documentos que incorporan como referencia, o la violaci??n de cualquier ley o de los derechos de un tercero.</p>
        <h3>Secci??n 15 ??? Divisibilidad</h3>
        <p>En el caso de que se determine que cualquier disposici??n de estas Condiciones de Servicio sea ilegal, nula o inejecutable, dicha disposici??n ser??, no obstante, efectiva a obtener la m??xima medida permitida por la ley aplicable, y la parte no exigible se considerar?? separada de estos T??rminos de Servicio, dicha determinaci??n no afectar?? la validez de aplicabilidad de las dem??s disposiciones restantes.</p>
        <h3>Secci??n 16 ??? Rescisi??n</h3>
        <p>Las obligaciones y responsabilidades de las partes que hayan incurrido con anterioridad a la fecha de terminaci??n sobrevivir??n a la terminaci??n de este acuerdo a todos los efectos.</p>
        <p>Estas Condiciones de servicio son efectivos a menos que y hasta que sea terminado por ti o nosotros. Puedes terminar estos T??rminos de Servicio en cualquier momento por avisarnos que ya no deseas utilizar nuestros servicios, o cuando dejes de usar nuestro sitio.</p>
        <p>Si a nuestro juicio, fallas, o se sospecha que haz fallado, en el cumplimiento de cualquier t??rmino o disposici??n de estas Condiciones de Servicio, tambi??n podemos terminar este acuerdo en cualquier momento sin previo aviso, y seguir??s siendo responsable de todos los montos adeudados hasta incluida la fecha de terminaci??n; y/o en consecuencia podemos negar el acceso a nuestros servicios (o cualquier parte del mismo).</p>
        <h3>Secci??n 17 ??? Acuerdo completo</h3>
        <p>Nuestra falla para ejercer o hacer valer cualquier derecho o disposici??n de estas Condiciones de Servicio no constituir?? una renuncia a tal derecho o disposici??n.</p>
        <p>Estas Condiciones del servicio y las pol??ticas o reglas de operaci??n publicadas por nosotros en este sitio o con respecto al servicio constituyen el acuerdo completo y el entendimiento entre t?? y nosotros y rigen el uso del Servicio y reemplaza cualquier acuerdo, comunicaciones y propuestas anteriores o contempor??neas, ya sea oral o escrita, entre tu y nosotros (incluyendo, pero no limitado a, cualquier versi??n previa de los T??rminos de Servicio).</p>
        <p>Cualquier ambig??edad en la interpretaci??n de estas Condiciones del servicio no se interpretar??n en contra del grupo de redacci??n.</p>
        <h3>Secci??n 18 ??? Pol??tica de devoluciones</h3>
        <h4>Plazo</h4>
        <p>Disponemos de un plazo para devoluciones de  a partir de la fecha en que la paqueter??a entreg?? tu pedido en el domicilio indicado al realizar la compra. Debes notificar acerca de la devoluci??n antes de que se cumplan los  a trav??s de alguno de nuestros canales de atenci??n:</p>
        <p>- En cualquiera de nuestras tiendas del pa??s, presentando tu factura o ticket, uno de nuestros asesores de venta te ayudar?? en el proceso. - Solicitar la devoluci??n dentro del plazo de devoluci??n por correo electr??nico.</p>
        <h4>Condiciones</h4>
        <p>Para ser elegible para una devoluci??n, el art??culo debe:</p>
        <p>- Estar sin usar y en las mismas condiciones en que lo recibiste. Tambi??n debe estar en su embalaje original. - Existen varios tipos de bienes que est??n exentos de ser devueltos. Productos perecederos tales como alimentos, flores, peri??dicos o revistas no pueden ser devueltos. Tampoco aceptamos productos que son bienes ??ntimos o sanitarios, materiales peligrosos, o l??quidos o gases inflamables.
            Hay algunas situaciones donde solo se pueden garantizar reembolsos parciales:
        </p>
        <p>- Cualquier producto que no se encuentre en su condici??n original, que est?? da??ado o le falten partes por razones ajenas a nosotros. - Libros con obvios signos de uso. - CD, DVD, cintas VHS, software, juegos de video, cassettes, o discos de vinilo que hayan sido abiertos.</p>
        <p>Si deseas hacer la devoluci??n de alguno de nuestros productos, lo puedes hacer de las siguientes maneras:</p>
        <p>- En cualquiera de nuestras tiendas del pa??s, presentando tu factura o ticket, uno de nuestros asesores de venta te ayudar?? en el proceso. - Solicitar la devoluci??n dentro del plazo de devoluci??n por correo electr??nico.</p>
        <h4>Procedimiento</h4>
        <p>1. Devoluci??n del dinero (solo aplica para casos de garant??a y ley de retracto): - A trav??s de transferencia (cuenta de ahorros, cuenta corriente, ahorro a la mano): se realiza aproximadamente dentro de los cinco d??as h??biles siguientes de recibir el producto nuevamente en nuestra bodega. - A trav??s de reversi??n del pago: quince d??as h??biles despu??s de recibir el producto en nuestra bodega. ??sta reversi??n corre por cuenta y orden de tu entidad bancaria, cualquier duda debes comunicarte directamente con ellos. - Cambio del producto (Sujeto a disponibilidad de inventario en el momento del cambio). S??lo se podr??n realizar cambios por productos con valor igual o inferior al original y la diferencia en caso de aplicar, se entregar?? en un cup??n para una nueva compra en la tienda online. En caso de no contar con disponibilidad para el cambio, se entregar?? el valor del producto(s) en un cup??n para una nueva compra. - Cup??n para realizar una nueva compra (Este cup??n tiene validez por seis meses a partir de la fecha de creaci??n). 2. Cambio del producto (Sujeto a disponibilidad de inventario en el momento del cambio). S??lo se podr??n realizar cambios por productos con valor igual o inferior al original y la diferencia en caso de aplicar, se entregar?? en un cup??n para una nueva compra en la tienda online. En caso de no contar con disponibilidad para el cambio, se entregar?? el valor del producto(s) en un cup??n para una nueva compra. 3. Cup??n para realizar una nueva compra (Este cup??n tiene validez por seis meses a partir de la fecha de creaci??n).</p>
        <h4>Condiciones del producto</h4>
        <p>El producto deber?? devolverse en ??ptimas condiciones, sin rastros de haber sido utilizado, con las etiquetas originales o en su defecto, si ya fueron retiradas, debes introducirlas en el empaque. Una vez recibido el producto en nuestra bodega, verificaremos las condiciones del mismo y de acuerdo con los resultados, se te enviar?? un producto nuevo o se te entregar?? un cup??n para una nueva compra.</p>
        <h4>Productos que aplican</h4>
        <p>Ropa</p>
        <h4>Plazo de respuesta</h4>
        <p>Reembolso del dinero: Dependiendo del medio de pago que hayas utilizado para tu compra, el reembolso se har?? a trav??s de una transferencia electr??nica o a tu tarjeta de cr??dito. Los reembolsos parciales se procesar??n por medio de transferencia electr??nica. Los cambios se despachar??n aproximadamente en 3 d??as h??biles despu??s de recibido el producto en la bodega y aplicar??n los mismos tiempos de una entrega regular.</p>
        <h4>Costos de env??o</h4>
        <p>El Usuario podr?? devolver sin ning??n costo, cualquier producto que presente defectos de f??brica. Los costos de transporte y los dem??s que conlleve una devoluci??n por motivos diferentes a defectos de f??brica ser??n cubiertos por el cliente.</p>
        <h3>Secci??n 19 ??? Ley</h3>
        <p>Para la interpretaci??n y cumplimiento de los presentes t??rminos y condiciones, las partes se someten a la jurisdicci??n de los tribunales de la Ciudad de renunciado expresamente a cualquier otro fuero que pudiere corresponderles por raz??n de sus domicilios presentes o futuros.</p>
        <h3>Secci??n 20 ??? Cambios en los t??rminos de servicio</h3>
        <p>Puedes revisar la versi??n m??s actualizada de los T??rminos de Servicio en cualquier momento en esta p??gina.</p>
        <p>Nos reservamos el derecho, a nuestra sola discreci??n, de actualizar, modificar o reemplazar cualquier parte de estas Condiciones del servicio mediante la publicaci??n de las actualizaciones y los cambios en nuestro sitio web. Es tu responsabilidad revisar nuestro sitio web peri??dicamente para verificar los cambios. El uso continuo de o el acceso a nuestro sitio Web o el Servicio despu??s de la publicaci??n de cualquier cambio en estas Condiciones de servicio implica la aceptaci??n de dichos cambios.</p>
        <h3>Secci??n 21 ??? Informaci??n de contacto</h3>
        <p>Preguntas acerca de los T??rminos de Servicio deben ser enviadas a coolstyle@cool.com.
            ??ltima actualizaci??n de este documento de t??rminos y condiciones: 23/11/2021
            </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  
    <?php
        if(!empty($message)):
    ?>
    <p><?php $message ?></p>
    <?php
        endif;
    ?>
    <script src="../2.view/css/registro/jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="../2.view/css/registro/popper/popper.min.js"></script>	 	 	
    <script src="../2.view/css/registro/bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="../2.view/css/registro/jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
    <script src="../2.view/css/registro/codigo.js"></script> 
</body>
</html>
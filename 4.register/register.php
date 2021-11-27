<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	         
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css">
	  <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <section id="cuerpo">
        <div id="contain_caja">
            <h1 id="titulo_registro">Registrarse</h1>
            <form action="recibir_registrarse.php" method="post">
                <input required name="nombre" class="caja" placeholder="Nombre Completo" type="text">
                <input required name="usuario" class="caja" placeholder="Correo Electronico" type="text">
                <input required name="pass" class="caja" placeholder="Contraseña" type="password">
                <input required id="boton_register" class="boton" type="submit" value="Registrate">
            </form>
            <p class="info">
                <span id="btn3">Al registrarse Acepta los Terminos Y Condiciones de privacidad</span>
            </p>
            <p class="info" id="final">¿Ya tienes una cuenta? <a href="../3.login/login.php">Iniciar Sesion</a></p>
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
        <p>Este sitio web es operado por CoolStyle . En todo el sitio, los términos “nosotros”, “nos” y “nuestro” se refieren a CoolStyle con nombre comercial ofrece este sitio web, incluyendo toda la información, herramientas y servicios disponibles para ti en este sitio, el usuario, está condicionado a la aceptación de todos los términos, condiciones, políticas y notificaciones aquí establecidos.</p>
        <p>Al visitar nuestro sitio y/o comprar algo de nosotros, participas en nuestro “Servicio” y aceptas los siguientes términos y condiciones (“Términos de Servicio”, “Términos”), incluidos todos los términos y condiciones adicionales y las políticas a las que se hace referencia en el presente documento y/o disponible a través de hipervínculos. Estas Condiciones de Servicio se aplican a todos los usuarios del sitio, incluyendo sin limitación a usuarios que sean navegadores, proveedores, clientes, comerciantes, y/o colaboradores de contenido.</p>
        <p>Por favor, lee estos Términos de Servicio cuidadosamente antes de acceder o utilizar nuestro sitio web. Al acceder o utilizar cualquier parte del sitio, estás aceptando los Términos de Servicio. Si no estás de acuerdo con todos los términos y condiciones de este acuerdo, entonces no deberías acceder a la página web o usar cualquiera de los servicios. Si las Términos de Servicio son considerados una oferta, la aceptación está expresamente limitada a estos Términos de Servicio.</p>
        <p>Cualquier función nueva o herramienta que se añadan a la tienda actual, también estarán sujetas a los Términos de Servicio. Puedes revisar la versión actualizada de los Términos de Servicio, en cualquier momento en esta página. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los Términos de Servicio mediante la publicación de actualizaciones y/o cambios en nuestro sitio web. Es tu responsabilidad chequear esta página periódicamente para verificar cambios. Tu uso continuo o el acceso al sitio web después de la publicación de cualquier cambio constituye la aceptación de dichos cambios.</p>
        <h3>Sección 1 – Términos de la tienda en línea</h3>
        <p>Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia, o que tienes la mayoría de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de tus dependientes menores use este sitio.</p>
        <p>No puedes usar nuestros productos con ningún propósito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo pero no limitado a las leyes de derecho de autor).</p>
        <p>No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva.</p>
        <p>El incumplimiento o violación de cualquiera de estos Términos darán lugar al cese inmediato de tus Servicios.</p>
        <h3>Sección 2 – Condiciones generales</h3>
        <p>Nos reservamos el derecho de rechazar la prestación de servicio a cualquier persona, por cualquier motivo y en cualquier momento.</p>
        <p>Entiendes que tu contenido (sin incluir la información de tu tarjeta de crédito), puede ser transferida sin encriptar e involucrar (a) transmisiones a través de varias redes; y (b) cambios para ajustarse o adaptarse a los requisitos técnicos de conexión de redes o dispositivos. La información de tarjetas de crédito está siempre encriptada durante la transferencia a través de las redes.</p>
        <p>Estás de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, uso del Servicio, o acceso al Servicio o cualquier contacto en el sitio web a través del cual se presta el servicio, sin el expreso permiso por escrito de nuestra parte.</p>
        <p>Los títulos utilizados en este acuerdo se incluyen solo por conveniencia y no limita o afecta a estos Términos.</p>
        <h3>Sección 3 – Exactitud, exhaustividad y actualidad de la información</h3>
        <p>No nos hacemos responsables si la información disponible en este sitio no es exacta, completa o actual. El material en este sitio es provisto sólo para información general y no debe confiarse en ella o utilizarse como la única base para la toma de decisiones sin consultar primeramente, información más precisa, completa u oportuna. Cualquier dependencia en el materia de este sitio es bajo su propio riesgo.</p>
        <p>Este sitio puede contener cierta información histórica. La información histórica, no es necesariamente actual y es provista únicamente para tu referencia. Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, pero no tenemos obligación de actualizar cualquier información en nuestro sitio. Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
        <h3>Sección 4 – Modificaciones al servicio y precios</h3>
        <p>Los precios de nuestros productos están sujetos a cambio sin aviso.</p>
        <p>Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte del contenido) en cualquier momento sin aviso previo.</p>
        <p>No seremos responsables ante ti o alguna tercera parte por cualquier modificación, cambio de precio, suspensión o discontinuidad del Servicio.</p>
        <h3>Sección 5 – Productos o servicios</h3>
        <p>Ciertos productos o servicios pueden estar disponibles exclusivamente en línea a través del sitio web. Estos productos o servicios pueden tener cantidades limitadas y estar sujetas a devolución o cambio de acuerdo a nuestra política de devolución solamente.</p>
        <p>Hemos hecho el esfuerzo de mostrar los colores y las imágenes de nuestros productos, en la tienda, con la mayor precisión de colores posible. No podemos garantizar que el monitor de tu computadora muestre los colores de manera exacta.</p>
        <p>Todos los productos son sujetos a disponibilidad. Las imágenes de los banners son ilustrativas. Estos legales cubren todas las publicaciones hechas en todos los medios.</p>
        <p>Todas las promociones no son acumulable con otras promociones. Aplican hasta agotar existencias y están restringidas a una por persona.</p>
        <p>El uso de cupones es personal, solo un cupón por usuario. Cupón por orden. Cada cupón puede tener restricciones particulares que serán comunicadas en el banner.</p>
        <p>Nos reservamos el derecho, pero no estamos obligados, para limitar las ventas de nuestros productos o servicios a cualquier persona, región geográfica o jurisdicción. Podemos ejercer este derecho basados en cada caso. Nos reservamos el derecho de limitar las cantidades de los productos o servicios que ofrecemos. Todas las descripciones de productos o precios de los productos están sujetos a cambios en cualquier momento sin previo aviso, a nuestra sola discreción. Nos reservamos el derecho de discontinuar cualquier producto en cualquier momento. Cualquier oferta de producto o servicio hecho en este sitio es nulo donde esté prohibido.</p>
        <p>No garantizamos que la calidad de los productos, servicios, información u otro material comprado u obtenido por ti cumpla con tus expectativas, o que cualquier error en el Servicio será corregido.</p>
        <p>CoolStyle se compromete a proporcionar los mejores productos que cumpla con nuestros estándares de aseo de la moda, así como cumplir con la más alta seguridad de la salud y los requisitos reglamentarios aplicables relacionados. En el caso de que alguno de nuestros productos no cumpla con los más altos estándares, no nos hacemos responsables de los daños resultantes de la falta de uso o defecto de los productos, y se retirará el producto de nuestro mercado de inmediato.</p>
        <h3>Sección 6 – Exactitud de facturación e información de cuenta</h3>
        <p>Nos reservamos el derecho de rechazar cualquier pedido que realice con nosotros. Podemos, a nuestra discreción, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden incluir pedidos realizados por o bajo la misma cuenta de cliente, la misma tarjeta de crédito, y/o pedidos que utilizan la misma facturación y/o dirección de envío.</p>
        <p>Precios pueden variar sin previo aviso debido a factores externos: devaluaciones monetarias, alteraciones drásticas en el tipo de cambio, entre otras.</p>
        <p>En el caso de que hagamos un cambio o cancelemos una orden, podemos intentar notificarle poniéndonos en contacto vía correo electrónico y/o dirección de facturación / número de teléfono proporcionado en el momento que se hizo pedido. Nos reservamos el derecho de limitar o prohibir las órdenes que, a nuestro juicio, parecen ser colocado por los concesionarios, revendedores o distribuidores.</p>
        <p>Te comprometes a proporcionar información actual, completa y precisa de la compra y cuenta utilizada para todas las compras realizadas en nuestra tienda. Te comprometes a actualizar rápidamente tu cuenta y otra información, incluyendo tu dirección de correo electrónico y números de tarjetas de crédito y fechas de vencimiento, para que podamos completar tus transacciones y contactarte cuando sea necesario.</p>
        <p>Para más detalles, por favor revisa nuestra Política de Devoluciones, en la sección 18 de este documento.</p>
        <h3>Sección 7 – Herramientas opcionales</h3>
        <p>Es posible que te proporcionamos acceso a herramientas de terceros a los cuales no monitoreamos y sobre los que no tenemos control ni entrada.</p>
        <p>Reconoces y aceptas que proporcionamos acceso a este tipo de herramientas «tal cual» y «según disponibilidad» sin garantías, representaciones o condiciones de ningún tipo y sin ningún respaldo. No tendremos responsabilidad alguna derivada de o relacionada con tu uso de herramientas proporcionadas por terceras partes.</p>
        <p>Cualquier uso que hagas de las herramientas opcionales que se ofrecen a través del sitio bajo tu propio riesgo y discreción y debes asegurarte de estar familiarizado y aprobar los términos bajo los cuales estas herramientas son proporcionadas por el o los proveedores de terceros.</p>
        <p>También es posible que, en el futuro, te ofrezcamos nuevos servicios y/o características a través del sitio web (incluyendo el lanzamiento de nuevas herramientas y recursos). Estas nuevas características y/o servicios también estarán sujetos a estos Términos de Servicio.</p>
        <h3>Sección 8 – Enlaces de terceras partes</h3>
        <p>Cierto contenido, productos y servicios disponibles vía nuestro Servicio puede incluir material de terceras partes.</p>
        <p>Enlaces de terceras partes en este sitio pueden redireccionarse a sitios web de terceras partes que no están afiliadas con nosotros. No nos responsabilizamos de examinar o evaluar el contenido o exactitud y no garantizamos ni tendremos ninguna obligación o responsabilidad por cualquier material de terceros o sitios web, o de cualquier material, productos o servicios de terceros.</p>
        <p>No nos hacemos responsables de cualquier daño o daños relacionados con la adquisición o utilización de bienes, servicios, recursos, contenidos, o cualquier otra transacción realizadas en conexión con sitios web de terceros. Por favor revisa cuidadosamente las políticas y prácticas de terceros y asegúrate de entenderlas antes de participar en cualquier transacción. Quejas, reclamos, inquietudes o preguntas con respecto a productos de terceros deben ser dirigidas a la tercera parte.</p>
        <h3>Sección 9 – Comentarios de usuarios, captación y otros envíos</h3>
        <p>Si, a pedido nuestro, envías ciertas presentaciones específicas (por ejemplo la participación en concursos) o sin un pedido de nuestra parte envías ideas creativas, sugerencias, proposiciones, planes, u otros materiales, ya sea en línea, por email, por correo postal, o de otra manera (colectivamente, ‘comentarios’), aceptas que podamos, en cualquier momento, sin restricción, editar, copiar, publicar, distribuir, traducir o utilizar por cualquier medio comentarios que nos hayas enviado. No tenemos ni tendremos ninguna obligación (1) de mantener ningún comentario confidencialmente; (2) de pagar compensación por comentarios; o (3) de responder a comentarios.</p>
        <p>Nosotros podemos, pero no tenemos obligación de, monitorear, editar o remover contenido que consideremos sea ilegítimo, ofensivo, amenazante, calumnioso, difamatorio, pornográfico, obsceno u objetable o viole la propiedad intelectual de cualquiera de las partes o los Términos de Servicio.</p>
        <p>Aceptas que tus comentarios no violará los derechos de terceras partes, incluyendo derechos de autor, marca, privacidad, personalidad u otro derechos personal o de propiedad. Asimismo, aceptas que tus comentarios no contienen material difamatorio o ilegal, abusivo u obsceno, o contienen virus informáticos u otro malware que pudiera, de alguna manera, afectar el funcionamiento del Servicio o de cualquier sitio web relacionado. No puedes utilizar una dirección de correo electrónico falsa, usar otra identidad que no sea legítima, o engañar a terceras partes o a nosotros en cuanto al origen de tus comentarios. Tu eres el único responsable por los comentarios que haces y su precisión. No nos hacemos responsables y no asumimos ninguna obligación con respecto a los comentarios publicados por ti o cualquier tercer parte.</p>
        <h3>Sección 10 – Información personal</h3>
        <p>Tu presentación de información personal a través del sitio se rige por nuestra Política de Privacidad. Para ver nuestro Aviso de Privacidad.</p>
        <h3>Sección 11 – Errores, inexactitudes y omisiones</h3>
        <p>De vez en cuando puede haber información en nuestro sitio o en el Servicio que contiene errores tipográficos, inexactitudes u omisiones que puedan estar relacionadas con las descripciones de productos, precios, promociones, ofertas, gastos de envío del producto, el tiempo de tránsito y la disponibilidad. Nos reservamos el derecho de corregir los errores, inexactitudes u omisiones y de cambiar o actualizar la información o cancelar pedidos si alguna información en el Servicio o en cualquier sitio web relacionado es inexacta en cualquier momento sin previo aviso (incluso después de que hayas enviado tu orden) .</p>
        <p>No asumimos ninguna obligación de actualizar, corregir o aclarar la información en el Servicio o en cualquier sitio web relacionado, incluyendo, sin limitación, la información de precios, excepto cuando sea requerido por la ley. Ninguna especificación actualizada o fecha de actualización aplicada en el Servicio o en cualquier sitio web relacionado, debe ser tomada para indicar que toda la información en el Servicio o en cualquier sitio web relacionado ha sido modificado o actualizado.</p>
        <h3>Sección 12 – Usos prohibidos</h3>
        <p>En adición a otras prohibiciones como se establece en los Términos de Servicio, se prohíbe el uso del sitio o su contenido: (a) para ningún propósito ilegal; (b) para pedirle a otros que realicen o participen en actos ilícitos; (c) para violar cualquier regulación, reglas, leyes internacionales, federales, provinciales o estatales, u ordenanzas locales; (d) para infringir o violar el derecho de propiedad intelectual nuestro o de terceras partes; (e) para acosar, abusar, insultar, dañar, difamar, calumniar, desprestigiar, intimidar o discriminar por razones de género, orientación sexual, religión, etnia, raza, edad, nacionalidad o discapacidad; (f) para presentar información falsa o engañosa; (g) para cargar o transmitir virus o cualquier otro tipo de código malicioso que sea o pueda ser utilizado en cualquier forma que pueda comprometer la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, otros sitios o Internet; (h) para recopilar o rastrear información personal de otros; (i) para generar spam, phish, pharm, pretext, spider, crawl, or scrape; (j) para cualquier propósito obsceno o inmoral; o (k) para interferir con o burlar los elementos de seguridad del Servicio o cualquier sitio web relacionado¿ otros sitios o Internet. Nos reservamos el derecho de suspender el uso del Servicio o de cualquier sitio web relacionado por violar cualquiera de los ítems de los usos prohibidos.</p>
        <h3>Sección 13 – Exclusión de garantías; limitación de responsabilidad</h3>
        <p>No garantizamos ni aseguramos que el uso de nuestro servicio será ininterrumpido, puntual, seguro o libre de errores.</p>
        <p>No garantizamos que los resultados que se puedan obtener del uso del servicio serán exactos o confiables.</p>
        <p>Aceptas que de vez en cuando podemos quitar el servicio por períodos de tiempo indefinidos o cancelar el servicio en cualquier momento sin previo aviso.</p>
        <p>Aceptas expresamente que el uso de, o la posibilidad de utilizar, el servicio es bajo tu propio riesgo. El servicio y todos los productos y servicios proporcionados a través del servicio son (salvo lo expresamente manifestado por nosotros) proporcionados «tal cual» y «según esté disponible» para su uso, sin ningún tipo de representación, garantías o condiciones de ningún tipo, ya sea expresa o implícita, incluidas todas las garantías o condiciones implícitas de comercialización, calidad comercializable, la aptitud para un propósito particular, durabilidad, título y no infracción.</p>
        <p>En ningún caso CoolStyle, nuestros directores, funcionarios, empleados, afiliados, agentes, contratistas, internos, proveedores, prestadores de servicios o licenciantes serán responsables por cualquier daño, pérdida, reclamo, o daños directos, indirectos, incidentales, punitivos, especiales o consecuentes de cualquier tipo, incluyendo, sin limitación, pérdida de beneficios, pérdida de ingresos, pérdida de ahorros, pérdida de datos, costos de reemplazo, o cualquier daño similar, ya sea basado en contrato, agravio (incluyendo negligencia), responsabilidad estricta o de otra manera, como consecuencia del uso de cualquiera de los servicios o productos adquiridos mediante el servicio, o por cualquier otro reclamo relacionado de alguna manera con el uso del servicio o cualquier producto, incluyendo pero no limitado, a cualquier error u omisión en cualquier contenido, o cualquier pérdida o daño de cualquier tipo incurridos como resultados de la utilización del servicio o cualquier contenido (o producto) publicado, transmitido, o que se pongan a disposición a través del servicio, incluso si se avisa de su posibilidad. Debido a que algunos estados o jurisdicciones no permiten la exclusión o la limitación de responsabilidad por daños consecuenciales o incidentales, en tales estados o jurisdicciones, nuestra responsabilidad se limitará en la medida máxima permitida por la ley.</p>
        <h3>Sección 14 – Indemnización</h3>
        <p>Aceptas indemnizar, defender y mantener indemne CoolStyle y nuestras matrices, subsidiarias, afiliados, socios, funcionarios, directores, agentes, contratistas, concesionarios, proveedores de servicios, subcontratistas, proveedores, internos y empleados, de cualquier reclamo o demanda, incluyendo honorarios razonables de abogados, hechos por cualquier tercero a causa o como resultado de tu incumplimiento de las Condiciones de Servicio o de los documentos que incorporan como referencia, o la violación de cualquier ley o de los derechos de un tercero.</p>
        <h3>Sección 15 – Divisibilidad</h3>
        <p>En el caso de que se determine que cualquier disposición de estas Condiciones de Servicio sea ilegal, nula o inejecutable, dicha disposición será, no obstante, efectiva a obtener la máxima medida permitida por la ley aplicable, y la parte no exigible se considerará separada de estos Términos de Servicio, dicha determinación no afectará la validez de aplicabilidad de las demás disposiciones restantes.</p>
        <h3>Sección 16 – Rescisión</h3>
        <p>Las obligaciones y responsabilidades de las partes que hayan incurrido con anterioridad a la fecha de terminación sobrevivirán a la terminación de este acuerdo a todos los efectos.</p>
        <p>Estas Condiciones de servicio son efectivos a menos que y hasta que sea terminado por ti o nosotros. Puedes terminar estos Términos de Servicio en cualquier momento por avisarnos que ya no deseas utilizar nuestros servicios, o cuando dejes de usar nuestro sitio.</p>
        <p>Si a nuestro juicio, fallas, o se sospecha que haz fallado, en el cumplimiento de cualquier término o disposición de estas Condiciones de Servicio, también podemos terminar este acuerdo en cualquier momento sin previo aviso, y seguirás siendo responsable de todos los montos adeudados hasta incluida la fecha de terminación; y/o en consecuencia podemos negar el acceso a nuestros servicios (o cualquier parte del mismo).</p>
        <h3>Sección 17 – Acuerdo completo</h3>
        <p>Nuestra falla para ejercer o hacer valer cualquier derecho o disposición de estas Condiciones de Servicio no constituirá una renuncia a tal derecho o disposición.</p>
        <p>Estas Condiciones del servicio y las políticas o reglas de operación publicadas por nosotros en este sitio o con respecto al servicio constituyen el acuerdo completo y el entendimiento entre tú y nosotros y rigen el uso del Servicio y reemplaza cualquier acuerdo, comunicaciones y propuestas anteriores o contemporáneas, ya sea oral o escrita, entre tu y nosotros (incluyendo, pero no limitado a, cualquier versión previa de los Términos de Servicio).</p>
        <p>Cualquier ambigüedad en la interpretación de estas Condiciones del servicio no se interpretarán en contra del grupo de redacción.</p>
        <h3>Sección 18 – Política de devoluciones</h3>
        <h4>Plazo</h4>
        <p>Disponemos de un plazo para devoluciones de  a partir de la fecha en que la paquetería entregó tu pedido en el domicilio indicado al realizar la compra. Debes notificar acerca de la devolución antes de que se cumplan los  a través de alguno de nuestros canales de atención:</p>
        <p>- En cualquiera de nuestras tiendas del país, presentando tu factura o ticket, uno de nuestros asesores de venta te ayudará en el proceso. - Solicitar la devolución dentro del plazo de devolución por correo electrónico.</p>
        <h4>Condiciones</h4>
        <p>Para ser elegible para una devolución, el artículo debe:</p>
        <p>- Estar sin usar y en las mismas condiciones en que lo recibiste. También debe estar en su embalaje original. - Existen varios tipos de bienes que están exentos de ser devueltos. Productos perecederos tales como alimentos, flores, periódicos o revistas no pueden ser devueltos. Tampoco aceptamos productos que son bienes íntimos o sanitarios, materiales peligrosos, o líquidos o gases inflamables.
            Hay algunas situaciones donde solo se pueden garantizar reembolsos parciales:
        </p>
        <p>- Cualquier producto que no se encuentre en su condición original, que esté dañado o le falten partes por razones ajenas a nosotros. - Libros con obvios signos de uso. - CD, DVD, cintas VHS, software, juegos de video, cassettes, o discos de vinilo que hayan sido abiertos.</p>
        <p>Si deseas hacer la devolución de alguno de nuestros productos, lo puedes hacer de las siguientes maneras:</p>
        <p>- En cualquiera de nuestras tiendas del país, presentando tu factura o ticket, uno de nuestros asesores de venta te ayudará en el proceso. - Solicitar la devolución dentro del plazo de devolución por correo electrónico.</p>
        <h4>Procedimiento</h4>
        <p>1. Devolución del dinero (solo aplica para casos de garantía y ley de retracto): - A través de transferencia (cuenta de ahorros, cuenta corriente, ahorro a la mano): se realiza aproximadamente dentro de los cinco días hábiles siguientes de recibir el producto nuevamente en nuestra bodega. - A través de reversión del pago: quince días hábiles después de recibir el producto en nuestra bodega. Ésta reversión corre por cuenta y orden de tu entidad bancaria, cualquier duda debes comunicarte directamente con ellos. - Cambio del producto (Sujeto a disponibilidad de inventario en el momento del cambio). Sólo se podrán realizar cambios por productos con valor igual o inferior al original y la diferencia en caso de aplicar, se entregará en un cupón para una nueva compra en la tienda online. En caso de no contar con disponibilidad para el cambio, se entregará el valor del producto(s) en un cupón para una nueva compra. - Cupón para realizar una nueva compra (Este cupón tiene validez por seis meses a partir de la fecha de creación). 2. Cambio del producto (Sujeto a disponibilidad de inventario en el momento del cambio). Sólo se podrán realizar cambios por productos con valor igual o inferior al original y la diferencia en caso de aplicar, se entregará en un cupón para una nueva compra en la tienda online. En caso de no contar con disponibilidad para el cambio, se entregará el valor del producto(s) en un cupón para una nueva compra. 3. Cupón para realizar una nueva compra (Este cupón tiene validez por seis meses a partir de la fecha de creación).</p>
        <h4>Condiciones del producto</h4>
        <p>El producto deberá devolverse en óptimas condiciones, sin rastros de haber sido utilizado, con las etiquetas originales o en su defecto, si ya fueron retiradas, debes introducirlas en el empaque. Una vez recibido el producto en nuestra bodega, verificaremos las condiciones del mismo y de acuerdo con los resultados, se te enviará un producto nuevo o se te entregará un cupón para una nueva compra.</p>
        <h4>Productos que aplican</h4>
        <p>Ropa</p>
        <h4>Plazo de respuesta</h4>
        <p>Reembolso del dinero: Dependiendo del medio de pago que hayas utilizado para tu compra, el reembolso se hará a través de una transferencia electrónica o a tu tarjeta de crédito. Los reembolsos parciales se procesarán por medio de transferencia electrónica. Los cambios se despacharán aproximadamente en 3 días hábiles después de recibido el producto en la bodega y aplicarán los mismos tiempos de una entrega regular.</p>
        <h4>Costos de envío</h4>
        <p>El Usuario podrá devolver sin ningún costo, cualquier producto que presente defectos de fábrica. Los costos de transporte y los demás que conlleve una devolución por motivos diferentes a defectos de fábrica serán cubiertos por el cliente.</p>
        <h3>Sección 19 – Ley</h3>
        <p>Para la interpretación y cumplimiento de los presentes términos y condiciones, las partes se someten a la jurisdicción de los tribunales de la Ciudad de renunciado expresamente a cualquier otro fuero que pudiere corresponderles por razón de sus domicilios presentes o futuros.</p>
        <h3>Sección 20 – Cambios en los términos de servicio</h3>
        <p>Puedes revisar la versión más actualizada de los Términos de Servicio en cualquier momento en esta página.</p>
        <p>Nos reservamos el derecho, a nuestra sola discreción, de actualizar, modificar o reemplazar cualquier parte de estas Condiciones del servicio mediante la publicación de las actualizaciones y los cambios en nuestro sitio web. Es tu responsabilidad revisar nuestro sitio web periódicamente para verificar los cambios. El uso continuo de o el acceso a nuestro sitio Web o el Servicio después de la publicación de cualquier cambio en estas Condiciones de servicio implica la aceptación de dichos cambios.</p>
        <h3>Sección 21 – Información de contacto</h3>
        <p>Preguntas acerca de los Términos de Servicio deben ser enviadas a coolstyle@cool.com.
            Última actualización de este documento de términos y condiciones: 23/11/2021
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


    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
    <script src="codigo.js"></script> 
</body>
</html>
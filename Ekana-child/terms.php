<?php
/* Template Name: Terms-Ekana */

get_header();
?>

<style>
  main {
    position: relative;
    display: block;
    width: 102.4rem;
    max-width: 90%;
    margin: 15rem auto 2rem;
    background-color: #d4d9dc;
    border-radius: 1rem
  }

  main .linkWrapper {
    list-style: none;
    padding: 2rem 5% 0;
    display: flex;
    flex-direction: row;
    gap: 2rem
  }

  @media only screen and (max-width: 760px) {
    main .linkWrapper {
      flex-direction: column
    }
  }

  main .linkWrapper li {
    position: relative;
    display: flex;
    flex-direction: row-reverse;
    justify-content: center;
    width: 100%;
    cursor: pointer;
    height: 4rem;
    line-height: 4rem
  }

  @media only screen and (max-width: 760px) {
    main .linkWrapper li {
      flex-direction: row;
      justify-content: space-between
    }
  }

  main .linkWrapper li span {
    font-size: 2.2rem;
    font-weight: 600;
    color: #576774
  }

  main .linkWrapper li.active span {
    color: #2e4150
  }

  main .linkWrapper li::before {
    height: .2rem;
    content: "";
    position: absolute;
    top: calc(100% - .2rem);
    width: 0%;
    background-color: #24cd7a;
    transition: .5s
  }

  main .linkWrapper li.active::before {
    width: 100%;
    transition: .5s
  }

  main .linkWrapper li .icon {
    display: none
  }

  @media only screen and (max-width: 760px) {
    main .linkWrapper li .icon {
      display: inherit
    }
  }

  main .linkWrapper li .icon svg {
    stroke: #d4d9dc;
    transition: .11s;
    transition-delay: .1s
  }

  main .linkWrapper li.active .icon svg {
    stroke: #24cd7a;
    transition: .5s;
    transition-delay: .4s
  }

  main .tabs {
    position: relative;
    display: block;
    padding: 5rem 2% 3rem;
    font-size: 1.4rem
  }

  main .tabs section {
    animation: flyIn .5s ease;
    transform: translateY(0)
  }

  main .tabs section>*+* {
    margin: 0 0 1rem
  }

  main .tabs section h3 {
    display: none;
    font-size: 2.2rem;
    text-transform: uppercase;
    color: #2e4150
  }

  main .tabs section h4 {
    font-size: 2rem;
    text-transform: uppercase;
    color: #2e4150;
    text-align: center
  }

  main .tabs section .terms-section ul {
    list-style: none
  }

  main .tabs section .terms-section p::first-letter {
    margin-left: 1rem
  }

  @keyframes flyIn {
    0% {
      opacity: 0;
      transform: translateY(5%)
    }

    100% {
      opacity: 1;
      transform: translateY(0%)
    }
  }
</style>
<main class="terms">
  <ul class="linkWrapper">
    <li class="tablink" onclick="terms(event, 'al')" id="def"><span>Avisos legales</span>
      <div class="icon al">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M15 7l-6.5 6.5a1.5 1.5 0 0 0 3 3l6.5 -6.5a3 3 0 0 0 -6 -6l-6.5 6.5a4.5 4.5 0 0 0 9 9l6.5 -6.5" />
        </svg>
      </div>
    </li>
    <li class="tablink" onclick="terms(event, 'pc')"><span>Política de cookies</span>
      <div class="icon pc">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M8 13v.01" />
          <path d="M12 17v.01" />
          <path d="M12 12v.01" />
          <path d="M16 14v.01" />
          <path d="M11 8v.01" />
          <path d="M13.148 3.476l2.667 1.104a4 4 0 0 0 4.656 6.14l.053 .132a3 3 0 0 1 0 2.296c-.497 .786 -.838 1.404 -1.024 1.852c-.189 .456 -.409 1.194 -.66 2.216a3 3 0 0 1 -1.624 1.623c-1.048 .263 -1.787 .483 -2.216 .661c-.475 .197 -1.092 .538 -1.852 1.024a3 3 0 0 1 -2.296 0c-.802 -.503 -1.419 -.844 -1.852 -1.024c-.471 -.195 -1.21 -.415 -2.216 -.66a3 3 0 0 1 -1.623 -1.624c-.265 -1.052 -.485 -1.79 -.661 -2.216c-.198 -.479 -.54 -1.096 -1.024 -1.852a3 3 0 0 1 0 -2.296c.48 -.744 .82 -1.361 1.024 -1.852c.171 -.413 .391 -1.152 .66 -2.216a3 3 0 0 1 1.624 -1.623c1.032 -.256 1.77 -.476 2.216 -.661c.458 -.19 1.075 -.531 1.852 -1.024a3 3 0 0 1 2.296 0z" />
        </svg>
      </div>
    </li>
    <li class="tablink" onclick="terms(event, 'pp')"><span>Política de privacidad</span>
      <div class="icon pp">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11" />
          <line x1="9" y1="7" x2="13" y2="7" />
          <line x1="9" y1="11" x2="13" y2="11" />
        </svg>
      </div>
    </li>
  </ul>
  <!-- tabLinks -->
  <div class="tabs">
    <section id="al" class="tabcontent">
      <h3>Aviso legal</h3>
      <h4>Información general</h4>
      <div class="terms-section">
        <p>
          En cumplimiento de lo previsto en el artículo 10 de la Ley 34/2.002,
          de 11 de julio, de Servicios de la Sociedad de la Información y
          Comercio Electrónico, se informa que la dirección URL
          “https://ekana.es” (en adelante el sitio Web) es un dominio
          registrado por EKANA KIROLA SL
        </p>
        <p>Los datos de EKANA KIROLA SL son los siguientes:</p>
        <ul>
          <li>
            <p><b>CIF n.º:</b> B01872977</p>
          </li>
          <li>
            <p><b>Domicilio:</b> Avda Montevideo 5c Bajo. Durango, 48200(Vizcaya)</p>
          </li>
          <li>
            <p><b>Email de contacto:</b> info@ekana.es</p>
          </li>
          <li>
            <p><b>Teléfono:</b> 944055455 / 688727038</p>
          </li>
        </ul>
        <p>
          EKANA KIROLA SL actúa como responsable de los contenidos del SITIO
          WEB “https://ekana.es”.
        </p>
      </div>
      <h4>
        Condiciones de uso
      </h4>
      <div class="terms-section">
        <p>
          El acceso y uso de este sitio web atribuye la condición de USUARIO,
          quien, al navegar por este sitio, acepta íntegra, expresa y sin
          reservas, todas las cláusulas del presente aviso legal. Por ello,
          rogamos al USUARIO que lea detenidamente el presente aviso legal.
        </p>
        <p>
          EKANA KIROLA SL se reserva la facultad de modificar unilateralmente
          los términos y condiciones de este sitio, en cuyo caso procederá a
          la publicación de nuevos términos y condiciones en la página web.
        </p>
        <p>
          El acceso y uso de este sitio web por parte del USUARIO es gratuito
          y libre, no obstante, determinadas partes del sitio web cuentan con
          acceso reservado a los colegiados, mediante un identificador de
          usuario y contraseña.
        </p>
        <p>
          Los USUARIOS no colegiados pueden visitar las secciones públicas del
          sitio, no debiendo intentar nunca el acceso a las secciones de
          acceso restringido, salvo que le haya sido autorizado mediante la
          asignación de un usuario y contraseña.
        </p>
        <p>
          En todo caso, el USUARIO asume la responsabilidad en el uso de la
          presente página web, y se compromete a navegar de buena fe y de
          forma diligente.
        </p>
        <p>
          En cualquier momento EKANA KIROLA SL puede modificar
          unilateralmente, y sin previo aviso, la presentación y/o
          configuración del sitio web, así como los servicios y contenidos
          prestados.
        </p>
      </div>
      <h4>
        Responsabilidad del USUARIO
      </h4>
      <div class="terms-section">
        <p>
          El USUARIO se compromete a no utilizar el SITIO WEB ni la
          información ofrecida en el mismo para la realización de actividades
          contrarias a la Ley, la moral o el orden público y, en general, a
          hacer un uso conforme a las condiciones establecidas por EKANA
          KIROLA SL
        </p>
        <p>
          Las opiniones, contenidos y, en general, todas las actividades
          realizadas por el USUARIO son de su exclusiva responsabilidad, sin
          que pueda responsabilizarse a EKANA KIROLA SL, de los daños o
          perjuicios que pudieran derivarse de dichas actividades ajenas a su
          voluntad, y sin que éste tenga un conocimiento efectivo de las
          mismas.
        </p>
      </div>
      <h4>
        Responsabilidad de EKANA KIROLA SL
      </h4>
      <div class="terms-section">
        <p>
          EKANA KIROLA SL no será responsable de los errores en el acceso al
          SITIO WEB o en sus contenidos, aunque pondrá la mayor diligencia en
          que los mismos no se produzcan.
        </p>
        <p>
          EKANA KIROLA SL se reserva el derecho de suspender temporalmente, y
          sin necesidad de previo aviso, la accesibilidad del SITIO WEB con
          motivo de una eventual necesidad de efectuar operaciones de
          mantenimiento, reparación, actualización, o mejora del mismo.
        </p>
      </div>
      <h4>
        Propiedad Intelectual e Industrial
      </h4>
      <div class="terms-section">
        <p>
          Todos los contenidos del SITIO WEB (incluyendo, sin carácter
          limitativo, bases de datos, imágenes, dibujos, gráficos, archivos de
          texto, audio, video y software) son propiedad del EKANA KIROLA SL y
          están protegidos por las normas nacionales e internacionales de
          propiedad intelectual e industrial, quedando todos los derechos
          reservados.
        </p>
        <p>
          El nombre de dominio, las marcas, rótulos, signos distintivos o
          logos que aparecen en el SITIO WEB son titularidad de EKANA KIROLA
          SL Todos los textos, dibujos gráficos, vídeos o soportes de audio
          que pudieran encontrarse en este momento, o en el futuro, en este
          sitio de Internet, son propiedad de EKANA KIROLA SL, y no podrán ser
          objeto de ulterior modificación, copia, alteración, reproducción
          total o parcial, adaptación o traducción por parte del USUARIO o de
          terceros, sin la expresa autorización por parte de EKANA KIROLA SL
        </p>
        <p>
          El uso no autorizado de la información contenida en este SITIO WEB,
          así como la lesión de los derechos de propiedad intelectual o
          industrial dará lugar a las responsabilidades legalmente
          establecidas.
        </p>
      </div>
      <h4>
        Hiperenlaces
      </h4>
      <div class="terms-section">
        <p>
          El establecimiento de cualquier hiperenlace desde una página web
          ajena, a cualquiera de las páginas del SITIO WEB de EKANA KIROLA
          SL estará sometido a las siguientes condiciones:
        </p>
        <ul>
          <li>
            <p>
              No se permite la reproducción ni total ni parcial de ninguno de
              los servicios contenidos en el SITIO WEB de EKANA KIROLA SL
            </p>
          </li>
          <li>
            <p>
              No se incluirá ninguna manifestación falsa, inexacta o incorrecta
              sobre las páginas del SITIO WEB de EKANA KIROLA SL, y sus
              servicios.
            </p>
          </li>
          <li>
            <p>
              Bajo ninguna circunstancia, EKANA KIROLA SL será responsable de los
              contenidos, informaciones, manifestaciones, opiniones o servicios
              puestos a disposición del público en la página web desde la que se
              establezca un hiperenlace al presente SITIO WEB.
            </p>
            </l>
          <li>
            <p>
              Cualquier hiperenlace se efectuará a la página principal del SITIO
              WEB.
            </p>
          </li>
        </ul>
        <p>
          Los hiperenlaces que se encuentran en el SITIO WEB han sido
          previamente consensuados con los titulares de las páginas web
          enlazadas. EKANA KIROLA SL no será responsable del mal uso ni de las
          actividades contrarias a la ley, la moral o el orden público que
          realicen los usuarios en dichas páginas enlazadas.
        </p>
        <h4>
          Vigencia de las condiciones de uso
        </h4>
        <p>
          Las condiciones de uso de este SITIO WEB tienen carácter indefinido.
          EKANA KIROLA SL se reserva en todo caso el derecho unilateral de
          modificar las condiciones de acceso a las mismas, así como su
          contenido.
        </p>
      </div>
      <h4>
        Nulidad e ineficacia de las cláusulas
      </h4>
      <div class="terms-section">
        <p>
          Si cualquier cláusula incluida en estas condiciones fuese declarada
          total o parcialmente nula o ineficaz, tal nulidad afectará tan sólo
          a dicha disposición, o a la parte de la misma que resultare nula o
          ineficaz, subsistiendo en todo lo demás las condiciones.
        </p>
      </div>
      <h4>
        Legislación y jurisdicción aplicables
      </h4>
      <div class="terms-section">
        <p>
          La prestación de servicio de este SITIO WEB y las presentes
          condiciones de uso se rigen por la legislación española.
        </p>
        <p>
          EKANA KIROLA SL y el USUARIO, con renuncia expresa a cualquier otro
          fuero, se someten para cualquier controversia que pudiera derivarse
          del acceso o uso del presente sitio web, al de los Juzgados y
          Tribunales de BILBAO, BIZKAIA
        </p>
        <p>
          Toda cuestión litigiosa que incumba a los servicios prestados a
          través de este SITIO WEB será resuelta a través de los tribunales
          arbitrales de consumo, mediadores o semejantes a los que se
          encuentre adherido EKANA KIROLA SL en el momento de producirse la
          controversia, así como los juzgados y tribunales correspondientes de
          conformidad con la legislación española.
        </p>
      </div>
    </section>
    <!-- aviso legal -->
    <section id="pc" class="tabcontent">
      <h3>Política de cookies</h3>
      <div class="terms-section">
        <p>
          “https://ekana.es” utiliza cookies con la finalidad de prestarle una
          mejor experiencia en su navegación. Asimismo, en caso de que preste
          su consentimiento, utilizaremos cookies que nos permitan obtener más
          información acerca de sus preferencias y personalizar nuestro Sitio
          Web de conformidad con sus intereses individuales, para que tenga
          una navegación más fluida y personalizada.
        </p>
        <p>
          Desde EKANA KIROLA SL queremos informarle de manera clara y precisa
          sobre las cookies que utilizamos en nuestro sitio web. En caso de
          que quiera obtener más información sobre el uso y la finalidad que
          hacemos de las cookies implementadas en nuestro sitio web, puede
          escribir un correo electrónico a info@ekana.es
        </p>
      </div>
      <h4>¿Qué es una cookie?</h4>
      <div class="terms-section">
        <p>
          Una cookie es un pequeño archivo que se descarga en el ordenador,
          tablet o smartphone del usuario, con la finalidad de almacenar datos
          e información que podrán ser actualizados y recuperados por la
          entidad responsable de su instalación.
        </p>
        <p>
          La información recabada a través de las cookies puede incluir la
          fecha y hora de visitas al sitio web, las distintas pestañas que
          usted ha visionado o el tiempo que ha permanecido en el mismo.
        </p>
        <p>
          Las cookies de este sitio web no almacenan información confidencial
          como su nombre, dirección, etc., no obstante, si desea restringir,
          bloquear o eliminar las cookies de este sitio web o de cualquier
          otro, puede configurar su navegador para rechazar o aceptar las
          mismas o para que estas éstas sean eliminadas de forma automática
          una vez cierre el navegador o apague el ordenador o dispositivo
          móvil.
        </p>
      </div>
      <h4>¿Qué tipos de cookies utiliza https://ekana.es?</h4>
      <div class="terms-section">
        <p>
          Según el plazo de tiempo que permanecen activas las cookies pueden
          ser:
        </p>
        <ul>
          <li>
            <b>Cookies de sesión:</b> diseñadas para recabar y almacenar datos
            mientras el usuario accede a una página web. Se suelen emplear
            para almacenar información que sólo interesa conservar para la
            prestación del servicio solicitado por el usuario en una sola
            ocasión (por ejemplo, una lista de productos adquiridos).
          </li>
          <li>
            <b>Cookies persistentes:</b> Son un tipo de cookies por las que
            los datos siguen almacenados en el terminal y puede accederse a
            ellos y ser tratados durante un periodo definido. Tienen fecha de
            borrado. Se utilizan por ejemplo en el proceso de compra o
            registro para evitar tener que introducir nuestros datos
            constantemente.
          </li>
        </ul>
        <p>
          Según quien sea la entidad que gestione el equipo o dominio desde
          donde se envían las cookies y trate los datos que se obtengan,
          podemos distinguir:
        </p>
        <ul>
          <li>
            <b>Cookies propias:</b> Son aquellas que se envían al dispositivo
            del usuario gestionadas exclusivamente por nosotros.
          </li>
          <li>
            <b>Cookies de terceros:</b> Son aquellas que se envían al
            dispositivo del usuario desde un equipo o dominio que no es
            gestionado por nosotros sino por otra entidad, que tratará los
            datos obtenidos.
          </li>
        </ul>
        <p>
          Según la finalidad para las que se traten los datos obtenidos a
          través de ellas, las cookies pueden ser:
        </p>
        <ul>
          <li>
            <b>Cookies técnicas</b>
            Permiten al usuario la navegación a través de una página web,
            plataforma o aplicación y la utilización de las diferentes
            opciones o servicios que en ella existan, incluyendo aquellas que
            el editor utiliza para permitir la gestión y operativa de la
            página web y habilitar sus funciones y servicios, como, por
            ejemplo, controlar el tráfico y la comunicación de datos,
            identificar la sesión acceder a partes de acceso restringido,
            entre otras funcionalidades

          </li>
          <li>
            <b>Cookies de preferencia o personalización</b>
            Permiten recordar información para que el usuario acceda al
            servicio con determinadas características que pueden diferenciar
            su experiencia de la de otros usuarios, como, por ejemplo, el
            idioma, el número de resultados a mostrar cuando el usuario
            realiza una búsqueda, el aspecto o contenido del servicio en
            función del tipo de navegador a través del cual el usuario accede
            al servicio o de la región desde la que accede al servicio, etc.
          </li>
          <li>
            <b>Cookies de análisis o medición</b>
            Son aquellas que permiten al responsable de las mismas el
            seguimiento y análisis del comportamiento de los usuarios de los
            sitios web a los que están vinculadas, incluida la cuantificación
            de los impactos de los anuncios. La información recogida mediante
            este tipo de cookies se utiliza en la medición de la actividad de
            los sitios web, aplicación o plataforma, con el fin de introducir
            mejoras en función del análisis de los datos de uso que hacen los
            usuarios del servicio.
            </p>
          </li>
          <li>
            <b>Cookies de publicidad comportamental</b>
            Son aquellas que almacenan información del comportamiento de los
            usuarios obtenida a través de la observación continuada de sus
            hábitos de navegación, lo que permite desarrollar un perfil
            específico para mostrar publicidad en función del mismo.
          </li>
        </ul>
      </div>
    </section>
    <!-- politica de cookies -->
    <section id="pp" class="tabcontent">
      <h3>
        Política de privacidad de EKANA SL
      </h3>
      <div class="terms-section">
        <div class="fiscal">
          <p>Identidad del responsable del tratamiento: EKANA KIROLA SL</p>
          <p>Domicilio social: Avda Montevideo 5c Bajo. Durango, 48200(Vizcaya)</p>
          <p>Correo electrónico de contacto: info@ekana.es</p>
          <p>Página web: https://ekana.es</p>
          <p>Teléfono: 944055455 / 688727038</p>
        </div>

        <p>
          En cumplimiento con lo dispuesto en la Ley Orgánica 3/18, de 5 de
          diciembre, de Protección de Datos Personales y garantía de los
          derechos digitales, así como el Reglamento (UE) 2016/679 del
          Parlamento Europeo y del Consejo de 27 de abril de 2016, EKANA
          KIROLA SL (en adelante, “Responsable del Tratamiento”) titular del
          sitio web “https://ekana.es” (en adelante, el sitio web), establece
          la siguiente Política de Privacidad, que seguirá en el tratamiento
          de datos de carácter personal. Dicha política se entiende, en todo
          caso, sin perjuicio de lo dispuesto en el correspondiente Aviso
          Legal.
        </p>
        <p>
          Por el mero hecho de visitar el Sitio Web, el Responsable del
          Tratamiento no registra ningún dato de carácter personal en ninguna
          base de datos, sin embargo, existe determinada información de
          carácter no personal que se recoge en los servidores que prestan
          servicios de hosting al Responsable del Tratamiento. Entre dichas
          informaciones, se recaban datos relativos a la dirección IP desde la
          que se accede al sitio web.
        </p>
        <p>
          El usuario es responsable de facilitar correctamente todos sus
          datos. El Responsable del Tratamiento no se hace responsable de
          fallos en el servicio que sean consecuencia de datos incorrectos o
          falsos.
        </p>
        <p>
          En algunos formularios de contacto es necesario facilitar los datos
          personales considerados como obligatorios, así como aceptar la
          correspondiente Política de Privacidad y el correspondiente Aviso
          Legal.
        </p>
        <p>
          El usuario presta su consentimiento a la Política de Privacidad del
          portal de conformidad con las siguientes Condiciones:
        </p>
      </div>
      <h4>
        Responsable del tratamiento:
      </h4>
      <div class="terms-section">
        <p>
          La información que pudiera solicitarse a los usuarios del presente
          sitio Web a través de formularios de contacto, los datos incluidos
          en posibles comentarios en las páginas corporativas de las redes
          sociales enlazadas, o no enlazadas, pero bajo la responsabilidad del
          Responsable del Tratamiento, los datos personales que el usuario
          introduzca dentro de las secciones habilitadas, o las proporcionadas
          por el resto de vías o canales de comunicación habilitados (por
          ejemplo, correo electrónico o secciones privadas) se encuentran bajo
          la responsabilidad de EKANA KIROLA S.L, con sede en la Avda Montevideo 5c
          Bajo. Durango, 48200 (Vizcaya).
        </p>
      </div>
      <h4>Destinatarios de la información</h4>
      <div class="terms-section">
        <p>
          La información será tratada por personal autorizado de EKANA KIROLA
          SL.
        </p>
        <p>
          Los datos personales recabados a través de los diferentes
          formularios de contacto o a través del correo electrónico, postal o
          telefónico, no serán cedidos o comunicados a terceros, salvo en los
          supuestos necesarios para el desarrollo, control y cumplimiento de
          la/s finalidad/es expresada/s en los supuestos previstos según Ley,
          así como en los casos específicos, de los que se informará
          expresamente al USUARIO.
        </p>
      </div>
      <h4>Finalidad de la recogida</h4>
      <div class="terms-section">
        <p>
          El Responsable del Tratamiento utilizará los datos que el USUARIO
          nos suministre en los formularios de consulta o los proporcionados
          por correo electrónico o los incluidos a través del resto de vías o
          canales habilitados exclusivamente, para la tramitación de la
          consulta solicitada y la gestión específica solicitada, en su caso.
        </p>
        <p>
          En caso de que el USUARIO introduzca sus datos de carácter personal
          en algún formulario relativo a la sección de “contacto”, o nos envíe
          un correo electrónico, el Titular informa que los mismos formarán
          parte de una base de datos titularidad de la propia entidad, siendo
          la finalidad de dicho registro la gestión concreta que el interesado
          haya solicitado.
        </p>
      </div>
      <h4>
        Carácter obligatorio o facultativo de la información solicitada
      </h4>
      <div class="terms-section">
        <p>
          Los datos obligatorios de cada formulario serán identificados como
          tales en el propio formulario.
        </p>
        <p>
          La negativa a suministrar dicha información impedirá hacer efectivo
          el servicio solicitado por el USUARIO.
        </p>
      </div>
      <h4>Plazo de conservación</h4>
      <div class="terms-section">
        <p>
          Los datos personales proporcionados se conservarán el plazo
          necesario para gestionar su consulta, sugerencia, queja o
          reclamación, así como para la prestación del servicio solicitado o
          el desarrollo de la relación contractual establecida entre usted y
          EKANA KIROLA SL
        </p>
        <p>
          Finalizada la misma, se conservarán durante el plazo correspondiente
          para cumplir con las obligaciones legales o durante el plazo que un
          juez o tribunal lo pueda requerir.
        </p>
        <h4>
          Legitimación del tratamiento de los datos personales
        </h4>
        <p>
          La legitimación para el tratamiento de los datos se basa en la
          ejecución de un contrato suscrito entre usted y EKANA KIROLA SL para
          la prestación del servicio solicitado y el consentimiento otorgado a
          través de la cumplimentación de los formularios habilitados en la
          web.
        </p>
      </div>
      <h4>Redes sociales</h4>
      <div class="terms-section">
        <p>
          EKANA KIROLA SL mantiene varias páginas y/o perfiles en varias redes
          sociales, enlazadas a través del presente Sitio Web. El mismo no
          será responsable de lo publicado por terceros en las mencionadas
          redes sociales. El uso y tratamiento de datos que terceros hagan en
          las mencionadas redes sociales estará sometido a las condiciones
          generales o particulares distintas a la presente. Se recomienda su
          atenta lectura y concienciación al respecto.
        </p>
        <p>
          En relación a Facebook, cuando un usuario se hace fan de nuestra
          página a través del botón “Me gusta”, autoriza que sus datos
          personales lo utilicemos únicamente a través de la plataforma de la
          mencionada red social con finalidades de gestión de nuestra fanpage
          y de las comunicaciones que mantengamos de forma bidireccional con
          nuestros seguidores a través del chat, mensajes u otros medios de
          comunicación que permita Facebook ahora y en el futuro. No obstante,
          ese tratamiento estará sujeto a las políticas de privacidad de esta
          red social y que el USUARIO puede consultar en el siguiente enlace:
          “https://www.facebook.com/policy.php”.
        </p>
        <p>
          También queremos informar que cuando un usuario se hace fan, las
          noticias que publiquemos aparecerán también en su muro, y si hace
          comentarios en el nuestro, será accesible por los demás fans, tanto
          su comentario como el nombre de su perfil y, en su caso, la
          fotografía que tenga en el mismo.
        </p>
        <p>
          En todo caso, es responsabilidad del usuario el uso que haga de la
          red social.
        </p>
        <p>
          No utilizaremos los datos personales de los usuarios para
          finalidades distintas a las señaladas en los párrafos anteriores, ni
          para enviarles información a través de un entorno diferente de la
          red social.
        </p>
        <p>
          Respecto a los derechos de acceso, rectificación, cancelación,
          supresión, portabilidad y olvido, que se reconocen en la
          legislación, solo podemos actuar conforme a las posibilidades que al
          efecto permite Facebook, debiéndose dirigir a ellos en caso de que
          los USUARIOS quieran ejercitar algún derecho de este tipo. No
          obstante, pueden darse de baja de nuestra página en cualquier
          momento, dejando de ser fan pinchando en el botón “No me gusta”, de
          forma que ya no tendríamos acceso a sus datos personales, si bien,
          Facebook podrá conservar los comentarios que previamente hayan
          realizado en nuestro muro.
        </p>
      </div>
      <h4>Medidas de seguridad</h4>
      <div class="terms-section">
        <p>
          EKANA KIROLA SL ha adoptado las medidas de índole técnica y
          organizativas necesarias que garanticen la seguridad de los datos de
          carácter personal y eviten su alteración, pérdida, tratamiento o
          acceso no autorizado, habida cuenta del estado de la tecnología, la
          naturaleza de los datos almacenados y los riesgos a que están
          expuestos, ya provengan de la acción humana o del medio físico
          natural.
        </p>
        <p>
          No obstante, el USUARIO debe ser consciente de que las medidas de
          seguridad en Internet no son inexpugnables.
        </p>
      </div>
    </section>
    <!-- politica de privacidad -->
  </div>
  <!-- tabs -->
</main>
<script>
  function terms(evt, termsName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablink = document.getElementsByClassName("tablink");
    for (i = 0; i < tablink.length; i++) {
      tablink[i].className = tablink[i].className.replace(" active", "");
    }
    document.getElementById(termsName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("def").click();
</script>
<?php
get_footer();

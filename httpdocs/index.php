<?php
use Symfony\Component\Finder\Finder;

require('vendor/autoload.php');

$finder = new Finder;
$baseDir = '/images/fotos/cdqs/';
$fotos = $finder->files()->depth(0)->in(__DIR__ . $baseDir);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Es portitxó</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div class='container'>

<div class='row' id='top'>
    <div class='span4 idiomes'>
        <ul>
            <li id='ca'><a href=''>cat</a></li>
            <li id='en'><a href="">eng</a></li>
            <li id='es'><a href="">esp</a></li>
            <li id='fr'><a href="">fra</a></li>
        </ul>
    </div>

    <div class='span5 offset3 estacions'>
        <p>Quin Cadaqués vols veure?</p>
        <ul>
            <li id='primavera'><a href="">PRIMAVERA</a></li>
            <li id='estiu'><a href="">ESTIU</a></li>
            <li id='tardor'><a href="">TARDOR</a></li>
            <li id='hivern'><a href="">HIVERN</a></li>
        </ul>
    </div>
</div>

<div class='row'>

    <div class='span12 head'>
        <h1>CASA-DÚPLEX A CADAQUÉS | LLOGUER AMB ENCANT</h1>
    </div>
</div>


<div id='center' class='row'>
    <div class='span8' id='galeria'>
        <ul id='slider'>
            <?php foreach ($fotos as $foto) : ?>
            <li id='<?php echo $foto->getBasename('.jpg') ?>'>
                <img class='primary-image' src='<?php echo $baseDir . $foto->getFilename()?>'/>
            </li>
            <?php endforeach ?>
        </ul>
        <ul class='thumbnails'>
            <?php foreach ($fotos as $foto) : ?>
            <li>
                <a href='#<?php echo $foto->getBasename('.jpg')?>'>
                    <img width='50px' height="50px" src='<?php echo $baseDir . $foto->getFilename()?>'/>
                </a>
            </li>
            <?php endforeach ?>

        </ul>
    </div>


    <div class='span4' id='right_column'>
        <div id='calendar'>
            <h2>Disponibilitat</h2>
            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=280&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=maristesbadalona.com_dkkv66gv3k180t0uil9a05l7b0%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=Europe%2FMadrid"
                    style=" border-width:0 " width="250" height="260" frameborder="0" scrolling="no"></iframe>
            <ul class='legend'>
                <li id='avaliable'>Avaliable</li>
                <li id='not-avaliable'>Not avaliable</li>
                <li id='pending'>Pending request</li>
            </ul>
        </div>
        <div id='booking'>
            <h2><a href="mailto:info@barcelona-cadaques.cat" target='_blank'>RESERVAR CASA <br/>&laquo;ES PORTITXO&raquo;
            </a></h2>
        </div>
    </div>


    <div id='thumbs' class='span8'>
        <ul id='menu-fotos'>
            <li><a href="#casa">Casa</a></li>
            <li><a href="#cuina">Cuina</a></li>
            <li><a href="#menjador">Menjador</a></li>
            <li><a href="#terrassa">Terrassa</a></li>
            <li><a href="#habitacio">Habitacions</a></li>
            <li><a href="#wc">Banys</a></li>
            <li><a href="#planta">Planta</a></li>
            <li><a href="#cdqs">Cadaqués</a></li>
        </ul>
    </div>
</div>

<div id='content' class='row'>

<div class='span8'>
<section id='descripcio' class='description text clearfix'>

    <div class='column'>
        <div class='detail'>
            <img src='/images/foto-casa.png'/>
        </div>
        <p class='bajo_foto'>
            <span class='portitxo'>Es Portitxó</span>, Casa-Dúplex, al costat de la platja. Un espai per somiar a
            Cadaqués.
        </p>

        <p>Es Portitxó es troba a només uns metres de la cala del mateix nom, a la platja gran de Cadaqués. És una
            casa-dúplex amb accés directe des del carrer Sant Antoni, un dels carrers amb més encant de Cadaqués.
            L’empedrat del terra, les buganvíl·lies en tots els seus colors i el blanc de les parets són la marca de
            personalitat d’aquest racó del Cadaqués autèntic.
        </p>

        <p>
            Totalment equipat per a 11+2 persones (11 adults + 1 nen/nena + 1 bebé) amb total comoditat. El saló disposa
            d’un gran sofà, i diversos mobles complementaris. A través d’un gran finestral el saló té accés directe a la
            terrassa, amb vistes al mar i equipada amb mobiliari d’exterior i tendal parasol extensible.
        </p>

        <p>
            Es disposa igualment d’un aparell d’aire condicionat per a l’estiu i calefacció per a l’hivern. El saló té
            llar de foc i una pantalla plana de TV amb capacitat per reproduir CD i DVD i amb TDT incorporada.
        </p>
    </div>
    <div class='column'>
        <p>
            El menjador té diverses taules modulars amb les corresponents cadires, i la cuina, oberta, està totalment
            equipada amb forn, rentavaixelles, frigorífic, congelador, microones, vitroceràmica, campana extractora i
            tot el petit electrodomèstic i estris de cuina necessaris (torradora, espremedora, cassoles, paelles,
            Nespresso, coberts, plats, gots, copes, etc). La cuina té accés directe a una galeria amb la
            rentadora-assecadora, la caldera d’aigua calenta, el safareig i els estris de neteja domèstica.
        </p>

        <p>
            <span class='portitxo'>Es Portitxó</span> disposa de 2 banys: un de superior amb WC, rentamans, mirall i una
            dutxa, i un al pis inferior
            que disposa igualment de WC, rentamans, mirall, una banyera i bidet. En els dos casos, els banys estan
            totalment equipats.
        </p>

        <p>
            <span class='portitxo'>Es Portitxó</span> té dues habitacions de grans dimensions amb armaris empotrats i
            llum natural tot el dia.
            Igualment, es disposa d’un llit petit per a nen/nena i d’un bressol per a bebé. Aquesta habitació té sortida
            a una terrassa privada i sistema de ventilació propi.
        </p>

        <p>
            <span class='portitxo'>Es Portitxó</span> té llum natural durant tot el dia, davant i darrere, i està
            orientat al sud. La immillorable
            ubicació dins de Cadaqués en una zona extraordinàriament tranquil·la i molt propera a la platja i al passeig
            de Cadaqués fan de Es Portitxó un espai únic per a les vostres estàncies a Cadaqués.

        </p>
    </div>
</section>
<section id='tarifes'>
    <div id='fons-tarifes'></div>
    <h2><span class='destacat'>Tarifes Es Portitxó</span> | Es Portitxó </h2>

    <div class='llibreta clearfix'>
        <span class='clip-llibreta'></span>

        <table class='no-borders'>
            <tr>
                <td>Juny 1a quinzena:</td>
                <td>700 euros/setmana</td>
            </tr>
            <tr>
                <td>Juny 2a quinzena:</td>
                <td>950 euros/setmana</td>
            </tr>
            <tr>
                <td>Juliol:</td>
                <td>1.260 euros/setmana</td>
            </tr>
            <tr>
                <td>Agost:</td>
                <td>1.950 euros/setmana</td>
            </tr>
            <tr>
                <td>Setembre 1a quinzena:</td>
                <td>950 euros/setmana</td>
            </tr>
            <tr>
                <td>Setembre 2a quinzena:</td>
                <td>700 euros/setmana</td>
            </tr>
            <tr>
                <td>Nadal (22/12 - 26/12):</td>
                <td>650 euros</td>
            </tr>
            <tr>
                <td>Cap d'Any (29/12 - 01/01):</td>
                <td>750 euros</td>
            </tr>
            <tr>
                <td>Resta de l'any (octubre - maig):</td>
                <td>550 euros/setmana</td>
            </tr>
            <tr>
                <td>Cap de setmana (octubre - maig):</td>
                <td>400 euros</td>
            </tr>
            <tr>

                <td>Estades llagues d'octubre a maig:</td>
                <td>1.550 euros/mes (*)<br/>
                    <span class='nota'>(*) per estades superiors a 3 mesos</span></td>
            </tr>


        </table>
    </div>
</section>
<section id="condicions" class=''>
    <h2><span class='destacat'>Condicions de contractació</span> | Es Portitxó </h2>

    <div class='llibreta clearfix'>
        <span class='clip-llibreta'></span>
        <span id='fons_contractacio'></span>

        <ul>
            <li>- L’entrada es farà puntualment a les 16:00h i la sortida es farà puntualment a les 11:00 h dels dies
                acordats.
            </li>
            <li>- S’abonarà el 40 % del total al formalitzar la reserva i el 60 % restant, en efectiu, al lliurar les
                claus.
            </li>
            <li>- Els consums d’electricitat i aigua són inclosos al preu del lloguer.</li>
            <li>- Hi ha una fiança legal de 450 €, a retornar en lliurar les claus.</li>
        </ul>

        <p>En els casos d’incompliment dels horaris d’entrada o de sortida s’aplicaran els següents recàrrecs:</p>
        <ul>

            <li>- Horari d’entrada entre les 16:00h i les 19:00h, recàrrec de 50 euros.</li>
            <li>- Horari d’entrada entre les 19:00h i les 24:00h, recàrrec de 100 euros.</li>

        </ul>
        <p>No s’accepten entrades en horari superior a les 24:00h.</p>
        <ul>

            <li>- Horari de sortida entre les 11:00h i les 13:00h, recàrrec de 50 euros.</li>
            <li>- Horari de sortida entre les 08:00h i les 11:00h, recàrrec de 50 euros.</li>
        </ul>
        <p>No s’accepten sortides en horari superior a les 13:00h.</p>
    </div>
</section>
<section id='serveis' class=''>
    <h2><span class='destacat'>Serveis</span> | Es Portitxó </h2>

    <div class='llibreta clearfix'>
        <span class='clip-llibreta'></span>
        <span id='fons_serveis'></span>

        <div class='column'>
            <p>
                <strong>Roba blanca:</strong><br/>
                Cada joc individual inclou: roba llit, manta, tovallola gran i petita, per a cada llit: vànova, per a
                cada bany: estora bany i paper higiènic.
                <strong>Preu: 10,00 euros/persona.</strong>
            </p>

            <p>
                <strong>Neteja:</strong><br/>
                Servei de neteja final “Es Portitxó” (interior, habitacions, terrasses, banys i cuina)
                <strong>Preu: 120,00 euros.</strong>
            </p>

        </div>
        <div class='column'>
            <p>
                <strong>En els casos d’incumpliment dels horaris d’entrada o de sortida s’aplicaran els següents
                    recàrrecs:</strong>
            </p>

            <p>
                Horari d’entrada entre les 16:00h i les 20:00h, recàrrec de 50 euros. Horari d’entrada entre les 20:00h
                i les 24:00h, recàrrec de 100 euros.<br/>
                No s’accepten entrades en horari superior a les 24:00h.
            </p>

            <p>
                Horari de sortida entre les 11:00h i les 13:00h, recàrrec de 50 euros.<br/>
                No s’accepten sortides en horari superior a les 13:00h.
            </p>

            <p>
                Durant l’estada a <span class='portitxo'>Es Portitxó</span> el client podrà sol·licitar directament
                qualsevol servei extra que
                necessiti i s’intentarà donar resposta, segons les possibilitats de cada moment. En aquest cas es podran
                facturar els costos de desplaçament, segons cada horari, així com els materials utilitzats.
            </p>

        </div>
    </div>
</section>
<section id="mascotes" class=''>
    <h2><span class='destacat'>Mascotes</span> | Es Portitxó </h2>

    <div class='llibreta clearfix'>
        <span id='fons_mascotes'></span>

        <span class='clip-llibreta'></span>

        <div class='column'>
            <p>Les mascotes són benvingudes a Es Portitxó. Les condicions especials de contractació són les
                següents:</p>

            <p>
                1.- El preu per a cada animal domèstic és de 150 €.<br/>
                2.- És obligatori contractar el servei de neteja final.</br/>
                3.- La fiança es retornarà únicament per transferència bancària el dia següent a la finalització del
                contracte.<br/>
                4.- És obligatori que els clients portin roba per cobrir els sofàs o llits. No és permesa la seva
                utilització per les mascotes sense protecció.<br/>
                5.- És obligatori mantenir el respecte a la propietat. Les rascades a les portes, mobles o altres
                desperfectes que pugui causar la mascota seran responsabilitat dels seus propietaris.</br/>
            </p>

        </div>
        <div class='column'>
            <p>
                6.- Cal extremar la cura de què la mascota estigui el màxim temps possible a l’exterior. Cal tenir en
                compte que, per molt que es netegi a fons, pot haver-hi clients al·lergics als pels dels animals i convé
                extremar les precaucions.
            </p>

        </div>
    </div>
</section>

<section id='localitzacio'>
    <h2><span class='destacat'>Localització</span> | Es Portitxó </h2>
    <a class='print_map'
       href='https://maps.google.com/maps?f=q&source=embed&hl=ca&geocode=&q=sant+antoni+1+cadaques&aq=&sll=37.0625,-95.677068&sspn=60.417788,91.494141&t=w&ie=UTF8&hq=&hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya,+Espanya&z=18&vpsrc=0&ei=092HULZygv7yA_udgaAH&pw=2'><img
            src="/images/fons/imprimir.png"/></a>
    <iframe width="595" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.es/maps?q=Carrer+de+Sant+Antoni,+1,+Cadaqu%C3%A9s&amp;hl=ca&amp;ie=UTF8&amp;sll=41.392657,2.139299&amp;sspn=0.163807,0.363579&amp;oq=carrer+sant+antoni,+1,+Cadaqu%C3%A9s&amp;t=m&amp;hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya&amp;hq=&amp;ll=42.290882,3.279462&amp;spn=0.005556,0.012767&amp;z=16&amp;iwloc=lyrftr:m,7401917289466317802,42.289546,3.279526&amp;output=embed"></iframe>
    <br/>
    <small><a
            href="https://maps.google.es/maps?q=Carrer+de+Sant+Antoni,+1,+Cadaqu%C3%A9s&amp;hl=ca&amp;ie=UTF8&amp;sll=41.392657,2.139299&amp;sspn=0.163807,0.363579&amp;oq=carrer+sant+antoni,+1,+Cadaqu%C3%A9s&amp;t=m&amp;hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya&amp;hq=&amp;ll=42.290882,3.279462&amp;spn=0.005556,0.012767&amp;z=16&amp;iwloc=lyrftr:m,7401917289466317802,42.289546,3.279526&amp;source=embed"
            style="color:#0000FF;text-align:left">Mostra un mapa més gran</a></small>
</section>
</div>

<div class='span4 bs-docs-sidebar' id='menu'>
    <div id='menu-box'>

        <span class='clip'></span>
        <ul class='nav nav-list bs-docs-sidenav '>
            <li id='esportitxo_link'><a href="#descripcio">&laquo;Es portitxó&raquo;</a></li>
            <li id='tarifes_link'><a href="#tarifes">Tarifes - 2012</a></li>
            <li id='condicions_link'><a href="#condicions">Condicions de contractació</a></li>
            <li id='serveis_link'><a href="#serveis">Serveis opcionals</a></li>
            <li id='mascotes_link'><a href="#mascotes">Mascotes</a></li>
            <li id='comarribar_link'><a href="#localitzacio">Localitzacio</a></li>
            <li id='mapacadaques_link'><a target='_blank' href="/pdf/mapa-cadaques.pdf">Mapa Cadaqués</a></li>
        </ul>
    </div>

</div>
</div>


<div id='footer'>
    <div class='span8'>
        <p class='legal'>© esportitxo.cat | Tots els drets reservats | Avís legal | Disseny web</p>
    </div>

</div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.anythingslider.min.js"></script>
<script type="text/javascript" src="/js/scrollto.js"></script>

<script type="text/javascript">
    //    $('#galeria').thumbnailer();
    $(function () {

        function initSlider() {

            pattern = "<img class='contorn' src='/images/contorn-fotos.png'/>";
            patternPrint = "<a class='print' href='#print'><img class='' src='/images/fons/imprimir.png' /></a>";
            $('#slider').find('img').before(pattern);
            $('#slider').find('img.primary-image').before(patternPrint);

            $('#slider').anythingSlider({
                buildArrows:false,
                buildNavigation:false,
                buildStartStop:false,
                hashTags:false,
                autoPlay:true
            });
        }

        initSlider();
        $('.thumbnails a').live('click', function (ev) {
            ev.preventDefault();
            $('#slider').anythingSlider($(this).attr('href'));
        })

        $('#menu-fotos a').click(function () {
            $.get('loadImages.php', { dir:$(this).attr('href') }, function (data) {
                $('#galeria').html(data);
                initSlider();

            })

            return false;
        })

        $('.print').live('click', function () {
            window.location = $('li.activePage').find('img.primary-image').attr('src');
        })

    })

    //scroll...
    var menuPos = $('#menu').offset().top - parseFloat($('#menu').css('marginTop').replace(/auto/, 0));

    $(window).scroll(function (event) {
        // what the y position of the scroll is
        var y = $(this).scrollTop();
        // whether that's below the form
        if (y >= menuPos) {
            // if so, ad the fixed class
            $('#menu').addClass('fixed');
        } else {
            // otherwise remove it
            $('#menu').removeClass('fixed');
        }
    });

    $('#menu a').click(function (ev) {
        ev.preventDefault();

        $(window).scrollTo($(this).attr('href'), 800);
    })

    $('#mapacadaques_link').click(function () {
        window.location = $(this).find('a').attr('href');
    });

</script>

</body>
</html>
<?php
use Symfony\Component\Finder\Finder;

require('vendor/autoload.php');

$finder = new Finder;
$fotos = $finder->files()->in(__DIR__ . '/images/fotos');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
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
            <li id='<?php echo $foto->getBasename('.jpg') ?>'><img class='primary-image'
                                                                   src='/images/fotos/<?php echo $foto->getFilename()?>'/>
            </li>
            <?php endforeach ?>
        </ul>
        <ul class='thumbnails'>
            <?php foreach ($fotos as $foto) : ?>
            <li>
                <a href='#<?php echo $foto->getBasename('.jpg')?>'>
                    <img width='50px' height="50px" src='/images/fotos/<?php echo $foto->getFilename()?>'/>
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
            <h2>RESERVAR CASA <br/>&laquo;ES PORTITXO&raquo;</h2>
        </div>
    </div>


    <div id='thumbs' class='span8'>
        <ul id='menu-fotos'>
            <li><a href="">Casa</a></li>
            <li><a href="">Cuina</a></li>
            <li><a href="">Menjador</a></li>
            <li><a href="">Terrassa</a></li>
            <li><a href="">Habitacions</a></li>
            <li><a href="">Banys</a></li>
            <li><a href="">Planta</a></li>
            <li><a href="">Cadaqués</a></li>
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
                Cadaqués. Es troba a només uns metres de la cala del mateix nom, a la platja gran de Cadaqués. És una
                casa-dúplex amb accés directe des del carrer Sant Antoni, un dels carrers amb més encant de Cadaqués.
                L’empedrat del terra, les buganvíl·lies en tots els seus colors i el blanc de les parets són la marca de
                personalitat d’aquest racó del Cadaqués autèntic.
            </p>

            <p>
                Totalment equipat per a 9+2 persones (9 adults + 1 nen/nena + 1 bebé) amb total comoditat. El saló
                disposa d’un gran sofà, i diversos mobles complementaris. A través d’un gran finestral el saló té accés
                directe a la terrassa, amb vistes al mar i equipada amb mobiliari d’exterior. Es disposa igualment d’un
                aparell d’aire condicionat per a l’estiu i calefacció per a l’hivern. El saló té llar de foc i una
                pantalla plana de TV amb capacitat per reproduir CD i DVD i amb TDT incorporada.

            </p>
        </div>
        <div class='column'>
            <p> El menjador té una taula modular de grans dimensions amb les corresponents cadires i la cuina, oberta,
                està totalment equipada amb forn, rentavaixelles, combi, microones, vitroceràmica, campana extractora i
                tot el petit electrodomèstic i estris de cuina necesaris (torradora, espremedora, cassoles, paelles,
                Nespresso, coberts, plats gots, copes, etc). La cuina té accés directe a una galeria amb la
                rentadora-assecadora, la caldera d’aigua calenta, el safareig i els estris de neteja domèstica.</p>

            <p>
                La casa-dúplex disposa de 2 banys: un de superior amb WC, rentamans i mirall i una dutxa, i un al pis
                inferior que disposa igualment de WC, rentamans i mirall, una banyera i bidet. En els dos casos, els
                banys estan totalment equipats.

                <span class='portitxo'>Es Portitxó</span> disposa d’una habitació doble amb armari empotrat de grans
                dimensions i llum natural tot el dia i d’una altra habitació amb un llit doble, dos llits individuals i
                un sofà-llit de dues places. Igualment, es disposa d’un llit petit per a nen/nena i d’un bressol per a
                bebé. Aquesta habitació té sortida a una terrassa privada, sistema de ventilació propi i dos armaris
                empotrats.

                <span class='portitxo'>Es Portitxó</span> té llum natural durant tot el dia, davant i darrere, i està
                orientat al sud. La immillorable ubicació dins de Cadaqués en una zona extraordinàriament tranquil·la i
                molt propera a la platja i al passeig de Cadaqués fan de <span class='portitxo'>Es Portitxó</span> un
                espai únic per a les vostres estàncies a Cadaqués.</p>
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
        <h2><span class='destacat'>Condicions</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>
            <span class='clip-llibreta'></span>

            <ul>
                <li>L'entrada es farà a les 16:00h i la sortida es farà a les 11:00 h dels dies acordats.</li>
                <li>S'abonarà el 40 % del total al formalitzar la reserva i el 60 % restant, en efectiu, al lliurar les
                    claus.
                </li>
                <li>Els consums d'electricitat i aigua són inclosos al preu del lloguer.</li>
                <li>Hi ha una fiança legal de 450 €, a retornar en lliurar les claus.</li>
            </ul>
        </div>
    </section>
    <section id='serveis' class=''>
        <h2><span class='destacat'>Serveis</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>
            <span class='clip-llibreta'></span>

            <div class='column'>
                <p>
                    Roba blanca:
                    Cada joc individual inclou: roba llit, manta, tovallola gran i petita, per a cada llit: vànova, per
                    a cada bany: estora bany i paper higiènic.
                    Preu: 10,00 euros/persona.

                    Neteja:
                    Servei de neteja final “Es Portitxó” (interior, habitacions, terrasses, banys i cuina)
                    Preu: 120,00 euros.
                    En els casos d’incumpliment dels horaris d’entrada o de sortida s’aplicaran els següents recàrrecs:

                    Horari d’entrada entre les 16:00h i les 20:00h, recàrrec de 50 euros. Horari d’entrada entre les
                    20:00h i les 24:00h, recàrrec de 100 euros.
                    No s’accepten entrades en horari superior a les 24:00h.

                    Horari de sortida entre les 11:00h i les 13:00h, recàrrec de 50 euros.
                    No s’accepten sortides en horari superior a les 13:00h.
                </p>

            </div>
            <div class='column'>
                <p>
                    Durant l’estada a Es Portitxó el client podrà sol·licitar directament qualsevol servei extra que
                    necessiti i s’intentarà donar resposta, segons les possibilitats de cada moment. En aquest cas es
                    podran facturar els costos de desplaçament, segons cada horari, així com els materials utilitzats.
                </p>

            </div>
        </div>
    </section>
    <section id="mascotes" class=''>
        <h2><span class='destacat'>Mascotes</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>
            <span class='clip-llibreta'></span>

            <div class='column'>
                <strong>Roba blanca</strong>:<br/>
                Cada joc individual inclou: roba llit, manta, tovallola gran i petita, per a cada llit: vànova, per
                a
                cada bany: estora bany i paper higiènic. <br/>
                <strong>Preu: 120,00 euros.</strong>
                recàrrecs:
                Cada joc individual
                gran i petita, per a cada llit: vànova, per a cada bany:
                Horari d’entrada
                entre les 16:00h i les 20:00h, recàr-
                estora bany i paper higiènic.
                rec de
                50 euros. Horari d’entrada entre les 20:00h i les
                Preu: 10,00 euros/persona.
            </div>
            <div class='column'>
                <strong>Roba blanca</strong>:<br/>
                Cada joc individual inclou: roba llit, manta, tovallola gran i petita, per a cada llit: vànova, per
                a
                cada bany: estora bany i paper higiènic. <br/>
                <strong>Preu: 120,00 euros.</strong>
                recàrrecs:
                Cada joc individual
                gran i petita, per a cada llit: vànova, per a cada bany:
                Horari d’entrada
                entre les 16:00h i les 20:00h, recàr-
                estora bany i paper higiènic.
                rec de
                50 euros. Horari d’entrada entre les 20:00h i les
                Preu: 10,00 euros/persona.
            </div>
        </div>
    </section>
</div>

<div class='span4 bs-docs-sidebar' id='menu'>
    <div id='menu-box'>

        <span class='clip'></span>
        <ul class='nav nav-list bs-docs-sidenav '>
            <li id='esportitxo_link'><a href="#esportitxo">Es portitxó</a></li>
            <li id='tarifes_link'><a href="#tarifes">Tarifes - 2012</a></li>
            <li id='condicions_link'><a href="#condicions">Condicions de contractació</a></li>
            <li id='serveis_link'><a href="#serveis">Serveis opcionals</a></li>
            <li id='mascotes_link'><a href="#mascotes">Mascotes</a></li>
            <li id='comarribar_link'><a href="">Com arribar-hi</a></li>
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

        pattern = "<img class='contorn' src='/images/contorn-fotos.png'/>";
        $('#slider').find('img').before(pattern);

        $('#slider').anythingSlider({
            buildArrows:false,
            buildNavigation:false,
            buildStartStop:false,
            hashTags:false,
            autoPlay:true
        });

        $('.thumbnails a').live('click', function (ev) {
            ev.preventDefault();
            $('#slider').anythingSlider($(this).attr('href'));
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

</script>

</body>
</html>
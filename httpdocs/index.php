<?php
use Symfony\Component\Finder\Finder;

require('vendor/autoload.php');

$finder = new Finder;
$fotos = $finder->files()->in(__DIR__ . '/images/fotos');
?>

<!DOCTYPE html>
<html>
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
            <li id='<?php echo $foto->getBasename('.jpg') ?>'><img class='primary-image' src='/images/fotos/<?php echo $foto->getFilename()?>'/></li>
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
                    style=" border-width:0 " width="250" height="280" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id='booking'>
            <h2>RESERVAR CASA <br/>ES PORTITXO</h2>
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
                <img width='200px' src='/images/detalle.png'/>
            </div>
            <p>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
                Ipsum
                ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
                (N.
                del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
                mezcló
                de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años,
                sino
                que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente
                igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las
                cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
                como
                por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
        <div class='column'>
            <p>
                Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
                Ipsum
                ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor
                (N.
                del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los
                mezcló
                de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años,
                sino
                que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente
                igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las
                cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
                como
                por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
        </div>
    </section>
    <section id='tarifes'>
        <div id='fons-tarifes'></div>
        <h2><span class='destacat'>Tarifes Es Portitxó</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>
            <table class='no-borders'>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>
                <tr>
                    <td>Juny 1a quinzena</td>
                    <td>700 euros/setmana</td>
                </tr>

            </table>
        </div>
    </section>
    <section id="condicions" class=''>
        <h2><span class='destacat'>Condicions</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>

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
    <section id='serveis' class=''>
        <h2><span class='destacat'>Serveis</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>

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
    <section id="mascotes" class=''>
        <h2><span class='destacat'>Mascotes</span> | Es Portitxó </h2>

        <div class='llibreta clearfix'>

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


<div id='footer'></div>
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
            enableArrows:false,
            buildNavigation:false,
            buildStartStop:false,
            hashTags:false
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
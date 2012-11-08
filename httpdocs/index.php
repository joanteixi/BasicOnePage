<?php


require(__DIR__ . '/../vendor/autoload.php');

use Symfony\Component\Finder\Finder;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;
use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$locale = $request->get('locale', 'ca');

$t = new Translator($locale, new MessageSelector());
$t->setFallbackLocale('ca');
$t->addLoader('yml', new YamlFileLoader());
$locale_path = sprintf(__DIR__ . '/../translations/%s.yml', $locale);
$t->addResource('yml', $locale_path, $locale);

$today = new DateTime();

if ($today > DateTime::createFromFormat('d/m', '21/09') && $today <= DateTime::createFromFormat('d/m', '21/12')) {
    $estacioActual = 'tardor';
} elseif ($today > DateTime::createFromFormat('d/m', '21/12') && $today <= DateTime::createFromFormat('d/m', '21/03')) {
    $estacioActual = 'hivern';
} elseif ($today > DateTime::createFromFormat('d/m', '21/03') && $today <= DateTime::createFromFormat('d/m', '21/06')) {
    $estacioActual = 'primavera';
} else {
    $estacioActual = 'estiu';
}

$finder = new Finder;
$baseDir = sprintf('/images/fotos/%s/cdqs/', $estacioActual);
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
<body class='<?php echo $estacioActual?>' data-spy="scroll" data-target=".bs-docs-sidebar">
<div class='container'>

<div class='row' id='top'>

    <div class='span4 idiomes'>
        <ul>
            <li id='ca'><a href='/ca'><?php echo $t->trans("idioma.cat")?></a></li>
            <li id='en'><a href="/en"><?php echo $t->trans("idioma.eng")?></a></li>
            <li id='es'><a href="/es"><?php echo $t->trans("idioma.esp")?></a></li>
            <li id='fr'><a href="/fr"><?php echo $t->trans("idioma.fra")?></a></li>
        </ul>
    </div>

    <div class='span5 offset3 estacions'>
        <p><?php echo $t->trans("h1.cadaques_vols_veure")?></p>

        <ul>
            <li><a id='primavera' href="#"><?php echo $t->trans("estacions.PRIMAVERA")?></a></li>
            <li><a id='estiu' href="#"><?php echo $t->trans("estacions.ESTIU")?></a></li>
            <li><a id='tardor' href="#"><?php echo $t->trans("estacions.TARDOR")?></a></li>
            <li><a id='hivern' href="#"><?php echo $t->trans("estacions.HIVERN")?></a></li>
        </ul>
        <p class='old'><a id='old' href="#"><?php echo $t->trans('cadaques.antic?')?></a></p>
    </div>
</div>

<div class='row'>

    <div class='span12 head'>
        <h1><?php echo $t->trans("h1.titol")?></h1>
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
                    <img width='50' height="50" src='<?php echo $baseDir . $foto->getFilename()?>'/>
                </a>
            </li>
            <?php endforeach ?>

        </ul>
    </div>


    <div class='span4' id='right_column'>
        <div id='calendar'>
            <h2><?php echo $t->trans("h2.disponibilitat")?>
            </h2>
            <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=260&amp;wkst=2&amp;hl=ca&amp;bgcolor=%23FFFFFF&amp;src=esportitxo%40gmail.com&amp;color=%232952A3&amp;ctz=Europe%2FMadrid"
                    style=" border-width:0 " width="250" height="260" frameborder="0" scrolling="no"></iframe>
            <ul class='legend'>
                <li id='avaliable'><?php echo $t->trans("calendari.avaliable")?></li>
                <li id='not-avaliable'><?php echo $t->trans("calendari.not-avaliable")?></li>
            </ul>
        </div>
        <div id='booking'>
            <h2><a data-toggle="modal" href="mailto:info@esportitxo.cat?body=<?php echo $t->trans('mail.subject')?>&subject=Es portitxo" target='_blank'><?php echo $t->trans("reservar")?></a></h2>

        </div>
    </div>


    <div id='thumbs' class='span8'>
        <ul id='menu-fotos'>
            <li><a href="#cuina"><?php echo $t->trans("menu_fotos.cuina")?></a></li>
            <li><a href="#menjador"><?php echo $t->trans("menu_fotos.menjador")?></a></li>
            <li><a href="#salo"><?php echo $t->trans("menu_fotos.salo")?></a></li>
            <li><a href="#terrassa"><?php echo $t->trans("menu_fotos.terrassa")?></a></li>
            <li><a href="#habitacio"><?php echo $t->trans("menu_fotos.habitacions")?></a></li>
            <li><a href="#wc"><?php echo $t->trans("menu_fotos.banys")?></a></li>
            <li><a href="#planta"><?php echo $t->trans("menu_fotos.planta")?></a></li>
            <li><a id='menu_inicial' href="#cdqs"><?php echo $t->trans("menu_fotos.cadaques")?></a></li>
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
                <?php echo $t->trans('descripcio.col1');?>
            </div>

            <div class='column'>
                <?php echo $t->trans('descripcio.col2'); ?>
            </div>
        </section>


        <section id='tarifes'>
            <div id='fons-tarifes'></div>
            <h2><?php echo $t->trans("tarifes.titol")?>
            </h2>

            <div class='llibreta clearfix'>
                <span class='clip-llibreta'></span>
                <table class='no-borders'>
                    <?php echo $t->trans("tarifes.text"); ?>
                </table>
            </div>
        </section>


        <section id="condicions" class=''>
            <h2><?php echo $t->trans('condicions.titol')?></h2>

            <div class='llibreta clearfix'>
                <span class='clip-llibreta'></span>
                <span id='fons_contractacio'></span>

                <?php echo $t->trans('condicions.text'); ?>

            </div>
        </section>
        <section id='serveis' class=''>
            <h2><?php echo $t->trans("serveis.titol")?></h2>

            <div class='llibreta clearfix'>
                <span class='clip-llibreta'></span>
                <span id='fons_serveis'></span>

                <div class='column left-align'>
                    <?php echo $t->trans('serveis.col1'); ?>

                </div>
                <div class='column left-align'>
                    <?php echo $t->trans('serveis.col2'); ?>


                </div>
            </div>
        </section>
        <section id="mascotes" class=''>
            <h2><?php echo $t->trans("mascotes.titol")?></h2>

            <div class='llibreta clearfix'>
                <span id='fons_mascotes'></span>

                <span class='clip-llibreta'></span>

                <div class='column  left-align'>
                    <?php echo $t->trans('mascotes.col1'); ?>
                </div>

                <div class='column  left-align'>
                    <?php echo $t->trans('mascotes.col2'); ?>
                </div>
            </div>
        </section>


        <section id='localitzacio'>
            <h2><?php echo $t->trans("localitzacio.titol")?></h2>
            <a class='print_map'
               href='https://maps.google.com/maps?f=q&source=embed&hl=ca&geocode=&q=sant+antoni+1+cadaques&aq=&sll=37.0625,-95.677068&sspn=60.417788,91.494141&t=w&ie=UTF8&hq=&hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya,+Espanya&z=18&vpsrc=0&ei=092HULZygv7yA_udgaAH&pw=2'>Imprimir</a>
            <iframe width="595" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.es/maps?q=Carrer+de+Sant+Antoni,+1,+Cadaqu%C3%A9s&amp;hl=ca&amp;ie=UTF8&amp;sll=41.392657,2.139299&amp;sspn=0.163807,0.363579&amp;oq=carrer+sant+antoni,+1,+Cadaqu%C3%A9s&amp;t=m&amp;hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya&amp;hq=&amp;ll=42.290882,3.279462&amp;spn=0.005556,0.012767&amp;z=16&amp;iwloc=lyrftr:m,7401917289466317802,42.289546,3.279526&amp;output=embed"></iframe>
            <br/>
            <small><a
                    href="https://maps.google.es/maps?q=Carrer+de+Sant+Antoni,+1,+Cadaqu%C3%A9s&amp;hl=ca&amp;ie=UTF8&amp;sll=41.392657,2.139299&amp;sspn=0.163807,0.363579&amp;oq=carrer+sant+antoni,+1,+Cadaqu%C3%A9s&amp;t=m&amp;hnear=Carrer+de+Sant+Antoni,+1,+17488+Cadaqu%C3%A9s,+Girona,+Catalunya&amp;hq=&amp;ll=42.290882,3.279462&amp;spn=0.005556,0.012767&amp;z=16&amp;iwloc=lyrftr:m,7401917289466317802,42.289546,3.279526&amp;source=embed"
                    style="color:#0000FF;text-align:left"><?php echo $t->trans("google.mesgran")?>
            </a></small>
            <p>42° 17' 22'' N (42.289581°) - 3° 16' 46'' E (3.279616°)</p>
        </section>
    </div>

    <div class='span4 bs-docs-sidebar' id='menu'>
        <div id='menu-box'>

            <span class='clip'></span>
            <ul class='nav nav-list bs-docs-sidenav '>
                <li id='fotos_link'><a href="#top"><?php echo $t->trans("menu.fotos")?>
                </a></li>

                <li id='esportitxo_link'><a href="#descripcio"><?php echo $t->trans("esportitxo")?>
                </a></li>
                <li id='tarifes_link'><a href="#tarifes"><?php echo $t->trans("menu.tarifes")?>
                </a></li>
                <li id='condicions_link'><a href="#condicions"><?php echo $t->trans("menu.condicions")?>
                </a></li>
                <li id='serveis_link'><a href="#serveis"><?php echo $t->trans("menu.serveis")?>
                </a></li>
                <li id='mascotes_link'><a href="#mascotes"><?php echo $t->trans("menu.mascotes")?>
                </a></li>
                <li id='comarribar_link'><a href="#localitzacio"><?php echo $t->trans("menu.localitzacio")?>
                </a></li>
                <li class='open' id='mapacadaques_link'><a target='_blank'
                                                           href="/pdf/mapa-cadaques.pdf"><?php echo $t->trans("menu.mapa_cadaques")?>
                </a></li>

                <li class='open' id="imprimirweb_link"><a href='#'
                                                          onclick='javascript:print()'><?php echo $t->trans("menu.imprimir")?></a>
                </li>
                <li class='open' id="enviarweb_link"><a href='mailto:'
                                                        target='_blank'><?php echo $t->trans("menu.enviarweb")?></a>
                </li>
            </ul>
        </div>

    </div>
</div>


<div id='footer'>
    <div class='span8'>
        <p class='legal'><?php echo $t->trans('copyright')?></p>
    </div>
</div>
</div>

<div id='legal' class='modal hide fade'>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <div class='modal-body'>
        <?php echo $t->trans('legal'); ?>
    </div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.anythingslider.min.js"></script>
<script type="text/javascript" src="/js/scrollto.js"></script>

<script type="text/javascript">

    function changeEstacio(estacio) {
        $('body').attr('class', '').addClass(estacio);
        $('#menu_inicial').trigger('click');
//        $.get('loadImages.php', { estacio: estacio, dir:'#cdqs' }, function (data) {
//            $('#galeria').html(data);
//            initSlider();
//        });
    }

    $(function () {

        function initSlider() {
            pattern = "<img class='contorn' src='/images/contorn-fotos.png'/>";
            patternPrint = "<a class='print' target='' href='#print'><?php echo $t->trans("print")?></a>";
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
            $.get('loadImages.php', { estacio:$('body').attr('class'), dir:$(this).attr('href') }, function (data) {
                $('#galeria').html(data);
                initSlider();

            })

            return false;
        })

        $('.print').live('click', function () {
            src = $('li.activePage').find('img.primary-image').attr('src');
            if (src == undefined) {
                src = $('img.primary-image').attr('src');

            }
            window.location = 'viewImage.php?src=' + src;
            return false;
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

        $('#mapacadaques_link, #enviarweb_link').click(function () {
            window.location = $(this).find('a').attr('href');
        });

        $('.estacions a').click(function (ev) {
            ev.preventDefault;
            changeEstacio($(this).attr('id'));
        })
    })

</script>

</body>
</html>
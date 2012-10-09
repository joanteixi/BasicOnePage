<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Es portitxó</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>
<div class='container'>

    <div id='top'>
        <div class='row'>
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
                    <li id='primavera'><a  href="">PRIMAVERA</a></li>
                    <li id='estiu'><a  href="">ESTIU</a></li>
                    <li id='tardor'><a  href="">TARDOR</a></li>
                    <li id='hivern' ><a href="">HIVERN</a></li>
                </ul>


            </div>
        </div>

        <div class='span12 head'>
            <h1>CASA-DÚPLEX A CADAQUÉS | LLOGUER AMB ENCANT</h1
        </div>
    </div>
    <div id='body'>
        <div class='row'>
            <div class='span8' id='thumbnails'>
                <div id='primary-image' >
                        <img class='contorn' src='/images/contorn-fotos.png'/>
                        <img class='primary-image' src='/images/cadaques-prova.png'/>
                </div>
                <ul class='thumbnails'>
                    <li><a href='#'><img width='50px' height="50px" src='/images/tardor.png'/></a></li>
                </ul>
            </div>


            <div class='span4' id='right_column'>
                <div id='calendar' >

                    <h2>Disponibilitat</h2>
                    Calendari
                </div>

                <div id='booking'>
                    <h2>Reserves</h2>

                    <p class='highlight'>VOLS FER UNA RESERVA O UNA CONSULTA SOBRE ES PORTITXÓ; </p>
                </div>
            </div>
        </div>

        <div class='row'>
            <ul id='menu'>
                <li>Casa</li>
                <li>Cuina</li>
                <li>Menjador</li>
                <li>Terrassa</li>
                <li>Habitacions</li>
                <li>Bayns</li>
                <li>Planta</li>
                <li>Cadaqués</li>
            </ul>
        </div>

        <div class='row'>
            <div class='span8 text'>
                <div class='span4 clearfix'>
                    <div class='detail'>
                        <img width='200px' src='/images/detalle.png'/>
                    </div>
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum
                        ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N.
                        del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló
                        de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino
                        que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente
                        igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las
                        cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como
                        por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                </div>
                <div class='span4'>
                    <p>blablabla</p>
                </div>
            </div>

            <div class='span4'>
                <ul class='nav affix' data-spy="affix" >
                    <li>Com arribar-hi</li>
                    <li>Tarifes - 2012</li>
                    <li>Condicions de contractació</li>
                    <li>Serveis opcionals</li>
                    <li>Mascotes</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/thumbnailer.js"></script>
<script type="text/javascript">
    $('#thumbnails').thumbnailer();
    //    Galleria.loadTheme('/js/galleria/themes/classic/galleria.classic.min.js');
    //    Galleria.run('#galleria');

</script>

</body>
</html>
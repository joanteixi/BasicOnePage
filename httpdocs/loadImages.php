<?php

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
require(__DIR__.'/../vendor/autoload.php');

$request = Request::createFromGlobals();
$finder = new Finder;
$baseDir = sprintf('/images/fotos/%s/%s/', $request->get('estacio', 'estiu'), substr($request->get('dir'), 1));
$fotos = $finder->files()->depth(0)->in(__DIR__ . $baseDir);



ob_start();
?>


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


<?php

ob_flush();

$response = new Response();
$response->prepare($request);
$response->send();
?>

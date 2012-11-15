<?php

require(__DIR__ . '/vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;

$request = Request::createFromGlobals();
$image = $request->get('src', null);

if (null == $image || !is_file(__DIR__ . $image)) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <title>Es portitxó - Fotos</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class='span12'>

<img src='<?php echo $_GET['src']; ?>'/>

<p><a href='#' onclick='javascript:print()'>Imprimir foto</p>
</div>

</body>
</html>
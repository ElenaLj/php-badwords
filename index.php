<?php

$text = " 'So d'ye get tae leave soon and get a house?' She squints up at me.
        'Hopefully.'
        'Why hopefully?'
        'Well, they want me tae stay on a few years, maybe until I'm eighteen.'
        Alice is horrified. 'Why?'
        'Cos. I did some bad things.'
        'Did you say some bad words?'
        'Aye.'
        'Like shit?'
        'Dinnae say that!' I laugh at her.
        'Like fuck?' she asks me, her eyes going round. 'Did you say cunty-balls?'
        'Uh-huh, stuff like that.'
        'I bet you didnae mean it, though,' she says, and picks up a stone and throws it. 'I can tell you didnae mean it. D'you want me tae tell them for you?'
        'No, it's okay,' I say.
        She leans in against me.' ";

$_GET["curseword"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hello</title>
</head>
<body>
    <h1>The Panopticon, Jenni Fagan</h1>

    <!-- paragraph with curse words (sh*t, f**k, c***ty-b***s) -->
    <h2> <em>Uncensored version</em> </h2>
    <p> <?php echo $text; ?> </p>
    <p>Length: <?php echo strlen($text)?> characters</p>
    <!-- /paragraph with curse words  -->

    <!-- paragraph without curse words  -->
    <h2> <em>Censored version</em> </h2>
    <p> <?php echo str_replace($_GET, "***", $text); ?> </p>
    <p>Length: <?php echo strlen($text)?> characters</p>
    <!-- /paragraph without curse words  -->
</body>
</html>
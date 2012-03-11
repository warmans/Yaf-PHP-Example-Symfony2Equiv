<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('title'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/exampleblog/css/screen.css') ?>" />
        <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/exampleblog/js/main.js') ?>"></script>
    </head>
    <body>
        <?php
        $view['slots']->output('body');
        ?>
    </body>
</html>
<?php $view->extend('ExampleBlogBundle::base.html.php');?>

<?php $view['slots']->set('title', 'A Blog');?>



<?php $view['slots']->start('body');?>
<h1>Entries - Page <?php echo $page; ?></h1>
<?php
foreach ($entries as $entry):
    echo '<h3>' . $entry['title'] . ' - ' . $entry['date_created'] . '</h3>';
    echo '<p>' . $entry['content'] . '</p>';
endforeach;
?>
<a href="<?php echo $view['router']->generate('ExampleBlogBundle_homepage')?>/100">Paging Route</a>
<?php $view['slots']->stop();?>
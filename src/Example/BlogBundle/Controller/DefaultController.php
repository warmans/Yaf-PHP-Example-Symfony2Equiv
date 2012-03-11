<?php

namespace Example\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction($page)
    {
        $conn = $this->get('database_connection');
        $entries = $conn->fetchAll('SELECT * FROM blog');

        return $this->render(
            'ExampleBlogBundle:Default:index.html.php',
            array('entries' => $entries, 'page'=>$page)
        );
    }
}

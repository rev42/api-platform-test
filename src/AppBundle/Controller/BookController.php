<?php

namespace AppBundle\Controller;

use AppBundle\Service\MyService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class BookController extends Controller
{
    private $myService;
    /**
     * @var Request
     */
    private $request;

    public function __construct(MyService $myService, RequestStack $request)
    {
        $this->myService = $myService;
        $this->request = $request->getCurrentRequest();
    }

    public function specialAction($data)
    {
        return $this->myService->doSomething($data);
    }

    public function listAction($data)
    {
        // $_GET['test']
        //var_dump($this->request->get('test'));exit;
        return $data;
    }
}

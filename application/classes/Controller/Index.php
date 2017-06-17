<?php
namespace Controller;

use Gungnir\Framework\AbstractController;
use Gungnir\Framework\View;
use Gungnir\HTTP\Request;
use Gungnir\HTTP\Response;

class Index extends AbstractController
{
    /**
     * Default entrypoint action for application
     *
     * @param Request $request The incoming request
     *
     * @return Response
     */
    public function getIndex(Request $request)
    {
        $view = new View($this->getApplication()->getApplicationPath() . 'view/Example');
        return new Response($view);
    }
}

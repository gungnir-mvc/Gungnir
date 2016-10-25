<?php
namespace Controller;

use \Gungnir\Framework\{Controller, View};
use \Gungnir\HTTP\{Request, Response};

class Index extends Controller
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
        $view = new View('Example');
        return new Response($view);
    }
}

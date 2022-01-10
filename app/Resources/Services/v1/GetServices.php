<?php
namespace Resources\Services\v1;

use Engine\{Interfaces\ResourceInterface, Request, Response};
/**
 * @package GetServices
 * @author Amadi Ifeanyi <amadiify.com>
 */
class GetServices implements ResourceInterface
{
    /**
     * @method GetServices Init
     * @param Request $request
     * @param Response $response
     * @return void
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function Init(Request $request, Response $response) : void
    {
        $response->success('It works!');
    }

}
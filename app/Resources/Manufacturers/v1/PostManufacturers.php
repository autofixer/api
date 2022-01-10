<?php
namespace Resources\Manufacturers\v1;

use Engine\{Interfaces\ResourceInterface, Request, Response};
/**
 * @package PostManufacturers
 * @author Amadi Ifeanyi <amadiify.com>
 */
class PostManufacturers implements ResourceInterface
{
    use Providers\CreateProvider,
        Providers\DeleteProvider,
        Providers\UpdateProvider;

    /**
     * @method PostManufacturers Init
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
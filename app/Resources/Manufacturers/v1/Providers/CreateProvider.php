<?php
namespace Resources\Manufacturers\v1\Providers;

use Resources\Manufacturers\v1\Model\{
    Manufacturers as ManufacturersModel
};
use Engine\{Request, Response};
/**
 * @package CreateProvider
 * @author Amadi Ifeanyi <amadiify.com>
 */
trait CreateProvider
{
    /**
     * @method PostManufacturers Create
     * @param Request $request
     * @param Response $response
     * @return void
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function Create(Request $request, Response $response) : void
    {
        // try create manufacturer with model class
        if ($request->useModel(ManufacturersModel::class)->Create()) :
            
            // created
            $response->success('Manufacturers "'.$request->name.'" added successfully!');

        else:

            // failed
            $response->failed('Manufacturers "'.$request->name.'" already exists.');

        endif;
    }
}
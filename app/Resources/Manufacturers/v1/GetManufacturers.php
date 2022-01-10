<?php
namespace Resources\Manufacturers\v1;

use Engine\{Interfaces\ResourceInterface, Request, Response};
/**
 * @package GetManufacturers
 * @author Amadi Ifeanyi <amadiify.com>
 */
class GetManufacturers implements ResourceInterface
{
    /**
     * @method GetManufacturers Init
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


    /**
     * @method GetManufacturers GetAll
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function GetAll(Request $request, Response $response)
    {
        $records = $request->useModel(Model\Manufacturers::class)->Read();

        // no record
        if (count($records) == 0) return $response->failed('No record to show');

        // show records
        $response->success('Showing Manufacturers', [
            'Data' => $records
        ]);        
    }
}
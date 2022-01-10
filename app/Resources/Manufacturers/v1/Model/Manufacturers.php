<?php
namespace Resources\Manufacturers\v1\Model;

use Engine\RequestData;
use Engine\{Interfaces\ModelInterface, DBMS, Table, ModelHelper};
/**
 * @package Manufacturers Model
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Manufacturers implements ModelInterface
{
    /**
     * This 'ModelHelper' trait contains the fillable method and DB method.
     */
    use ModelHelper;

    /**
     * This holds the primary key for database table.
     */
    const PRIMARY_KEY = 'manufacturerid';

    /**
     * @var int $ID
     * This is significant to your model class. It gets its value when two things happens
     * 1. The system encounters x-meta-id in the request header
     * 2. The POST body sent contains a key 'id' along side a number as its value
     */
    public $ID = 0;
    
    /**
     * @var string $DBMSConnection
     * This is a connection method name from our Engine\DBMS class and
     * it defaults to this model, to be accessed via 
     * - $this->DB()
     * or
     * - $this->DB(TABLE NAME)
     * Where TABLE NAME is a constant value from Engine\Table class or just a regular name.
     * 
     * You can also make queries to other connections via accessing them through
     * - DBMS::ConnectionName()
     * Where 'ConnectionName' is a connection method from our Engine\DBMS class
     */
    private $DBMSConnection = '';

    /**
     * ======================
     * # Fillable starts here 
     * ======================
     * 
     * The fillable method in the helper trait 'ModelHelper' already preloads
     * this class with all the request body that has been verified, filtered, and validated.
     * You can overwrite this proceedure by adding a fillable method to this class.
     * see Engine\Interfaces\ModelInterface class
     */

     /**
      * @var string $ManufacturerName
      */
     public $ManufacturerName;

     /**
      * @var string $ManufacturerLogo
      */
     public $ManufacturerLogo;

     /**
      * @var bool $Visible
      */
      public $Visible = false;

    /**
     * @method ModelInterface Fillable
     * @param array $data
     * @return void
     * 
     * Has data that can be populated to the class 
     */
    public function Fillable(RequestData $data) : void
    {
        $this->ManufacturerName = $data->get('name', $data->manufacturer_name);
        $this->ManufacturerLogo = $data->get('logo', $data->manufacturer_logo);
        $this->Visible = $data->get('visible', $data->visible);
        $this->ID = $data->get('id', $data->get('manufacturerid', $this->ID));
    }

    /**
     * @method ModelInterface Create
     * @return bool
     * 
     * This creates a new entry in the database tables
     */
    public function Create() : bool
    {
       // build data
       $table = $this->DB(Table::MANUFACTURERS);

       // check if name exists?
       $checkQuery = $table->get('manufacturer_name = ?', $this->ManufacturerName)->go();

       // are we good ?
       if ($checkQuery->rowCount() > 0) return false;

       // we can insert data
       if ($table->insert([
            'manufacturer_name' => $this->ManufacturerName,
            'manufacturer_logo' => $this->ManufacturerLogo,
            'visible'           => $this->Visible
       ])->go()) return true;
    }

    /**
     * @method ModelInterface Update
     * @return bool
     * 
     * This updates a new entry in the database
     */
    public function Update()
    {
        // @var array $data 
        $data = [

        ];

        // don't forget to pass a table name to DB()
        $table = $this->DB();

        // updated
        $updated = false;

        // get the id
        $ID = $this->id;

        // can we can update data
        if ($table->update($data)->where([static::PRIMARY_KEY => $ID])->go()) $updated = true;

        // return array data
        return [
            'updated'    => $updated,
            'data'       => self::ReadByID($ID) // This a special method and would call Read() method
        ];
    }

    /**
     * @method ModelInterface Create
     * @return bool
     * 
     * This delete a record in the database
     */
    public function Delete()
    {
       // don't forget to pass a table name to DB()
       $table = $this->DB();

       // deleted
       $deleted = false;

       // get the id
       $ID = $this->id;

       // can we can delete row?
       if ($table->delete()->where([static::PRIMARY_KEY => $ID])->go()) $deleted = true;

       // return boolean
       return $deleted;
    }

    /**
     * @method ModelInterface Read
     * @return bool
     * 
     * This reads an entry from the database
     */
    public function Read()
    {
        // @var Query $query
        // don't forget to pass a table name to DB()
        $query = $this->Filter($this->DB(Table::MANUFACTURERS), [

            // your table primary key
            // useful for sorting in asc or desc order
            'primary' => static::PRIMARY_KEY, 

            // default where statement to send alongside this query
            'where' => [

            ], 

            // when there is an ID and not zero (0), it fetches for that ID only
            'id' => $this->ID,

            // set what column to fetch 
            'column' => '*',

            // should contain allowed columns that a column query can collect
            // eg. ?column=name,age
            // you can now reference them to your table column
            // eg. name => account_name
            'allowedColumns' => [
                'name'  => 'manufacturer_name',
                'id'    => 'manufacturerid'
            ],

            // should contain a list of additional GET queries you can take
            // eg. ?visible=1
            // you can now reference this keys to a particular column
            // eg. visible = visibility
            'query' => [
                'visible' => 'visible'
            ]
        ]);

        // You can run this statement when ready with
        $result = $query->go();

        // build data
        $data = [];

        // are we good ?
        if ($result->rowCount() > 0) while($row = $result->fetch(FETCH_ASSOC)) :

            // create instance
            $model = new self;

            // load request data
            $requestData = new RequestData($row);

            // update visiblity
            $requestData['visible'] = intval($requestData['visible']) == 1 ? true : false;

            // update name
            $requestData['manufacturer_name'] = ucwords($requestData['manufacturer_name']);

            // add cdn path for our logo
            $requestData['manufacturer_logo'] = STORAGE_URL . '/files/' . $requestData['manufacturer_logo'];

            // add to fillable
            $model->Fillable($requestData);

            // push to data
            $data[] = $model->cleanUpNullData();

        endwhile;

        // return data
        return $data;
    }
}
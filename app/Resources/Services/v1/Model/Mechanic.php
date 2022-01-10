<?php
namespace Resources\Services\v1\Model;

use Engine\RequestData;
use Messaging\EmailAlerts;
use Messaging\Emails\EmailSender;
use function Lightroom\Requests\Functions\{get};
use Engine\{Interfaces\ModelInterface, DBMS, Table, ModelHelper};
/**
 * @package Mechanic Model
 * @author Amadi Ifeanyi <amadiify.com>
 */
class Mechanic implements ModelInterface
{
    /**
     * This 'ModelHelper' trait contains the fillable method and DB method.
     */
    use ModelHelper;

    /**
     * This holds the primary key for database table.
     */
    const PRIMARY_KEY = 'mechanicid';

    /**
     * @var int $id
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
    public $Username;
    public $Email;
    public $Phone;

    /**
     * @method ModelInterface Fillable
     * @param RequestData $data
     * @return void
     * 
     * Has data that can be populated to the class 
     */
    public function Fillable(RequestData $data) : void
    {
        // get data
        $requestData = $data->getData();

        // unpack data
        $this->ID = $data->get('id', $data->get('mechanicid', $this->ID));
        $this->Username = $data->get('username', $data->mechanic_name);
        $this->Email = $data->get('email', $data->mechanic_email);
        $this->Phone = $data->get('phone', $data->mechanic_phone);
    }

    /**
     * @method ModelInterface Create
     * @return bool
     * 
     * This creates a new entry in the database tables
     */
    public function Create() : bool
    {
       // @var array $data 
       $data = [

       ];

       // @var bool $created 
       $created = false;

       // don't forget to pass a table name to DB()
       $table = $this->DB();

       // we can insert data
       if ($table->insert($data)->go()) $created = true;

       // return bool
       return $created;
    }

    /**
     * @method Mechanic CreateMechanicReport
     * @param RequestData $data
     */
    public function CreateMechanicReport(RequestData $data) : bool
    {
        // get service
        $service = ServiceRequest::ReadByID($data->serviceid);

        // created
        $created = false;

        // can create ?
        if ($service->Status->StatusName != 'completed' && $service->Status->StatusName != 'canceled') :

            // add report
            if ($this->DB(Table::MECHANIC_REPORT)->insert([
                'mechanicid'    => $data->mechanicid,
                'serviceid'     => $data->serviceid,
                'report'        => $data->review
            ])->go()) :

                // send to autofixer
                EmailAlerts::newMechanicMessageAlert([
                    'name'      => self::ReadByID($data->mechanicid)->Username,
                    'message'   => $data->review
                ]);

                // update bool
                $created = true;

            endif;

        endif;

        // return bool
        return $created;
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
        $query = $this->Filter($this->DB(Table::MECHANIC), [

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
                
            ],

            // should contain a list of additional GET queries you can take
            // eg. ?visible=1
            // you can now reference this keys to a particular column
            // eg. visible = visibility
            'query' => [
                
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

            // add to fillable
            $model->Fillable($requestData);

            // push to data
            $data[] = $model;

        endwhile;

        // return data
        return $data;
    }
}
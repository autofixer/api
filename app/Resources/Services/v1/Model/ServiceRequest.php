<?php
namespace Resources\Services\v1\Model;

use Engine\RequestData;
use function Lightroom\Requests\Functions\{get};
use Engine\{Interfaces\ModelInterface, DBMS, Table, ModelHelper};
/**
 * @package ServiceRequest Model
 * @author Amadi Ifeanyi <amadiify.com>
 */
class ServiceRequest implements ModelInterface
{
    /**
     * This 'ModelHelper' trait contains the fillable method and DB method.
     */
    use ModelHelper;

    /**
     * This holds the primary key for database table.
     */
    const PRIMARY_KEY = 'serviceid';

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
    public $ServiceType;
    public $CustomerName;
    public $CustomerEmail;
    public $CustomerPhone;
    public $CustomerLocation;
    public $CustomerAddress;
    public $Manufacturer;
    public $CarYear;
    public $NeedingOnSiteMechanic = 'no';
    public $DateMechanicShouldVisit;
    public $TimeMechanicShouldVisit;
    public $CustomerComment;
    public $SubscribeToAPlan = 'no';
    public $Status;
    public $DateSubmitted;

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
        $this->ID = $data->get('id', $data->get('serviceid', $this->ID));
        $this->ServiceType = $data->get('type', $data->service_type);
        $this->CustomerName = $data->get('name', $data->customer_name);
        $this->CustomerEmail = $data->get('email', $data->customer_email);
        $this->CustomerPhone = $data->get('tel', $data->customer_phone);
        $this->CustomerLocation = $data->get('location', $data->customer_location);
        $this->CustomerAddress = $data->get('address', $data->customer_address);
        $this->Manufacturer = \Resources\Manufacturers\v1\Model\Manufacturers::ReadById($data->get('car_make', $data->manufacturerid));
        $this->CarYear = $data->get('car_year', $data->car_year);
        $this->NeedingOnSiteMechanic = $data->get('onsite', $data->get('needing_on_site_mechanic', $this->NeedingOnSiteMechanic));
        $this->SubscribeToAPlan = $data->get('subsribe_plan', $data->get('subscribe_to_a_plan', $this->SubscribeToAPlan));
        $this->DateMechanicShouldVisit = $data->get('repair_date', $data->date_mechanic_should_visit);
        $this->TimeMechanicShouldVisit = $data->get('repair_time', $data->time_mechanic_should_visit);
        $this->CustomerComment = $data->get('review', $data->customer_comment);
        $this->Status = GeneralStatus::ReadByID($data->get('statusid', $data->get('statusid', 1)));
        $this->DateSubmitted = $data->get('date_submitted', $data->date_submitted);
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
            'service_type'                  => $this->ServiceType,
            'customer_name'                 => $this->CustomerName,
            'customer_email'                => $this->CustomerEmail,
            'customer_phone'                => $this->CustomerPhone,
            'customer_location'             => $this->CustomerLocation,
            'customer_address'              => $this->CustomerAddress,
            'manufacturerid'                => $this->Manufacturer->ID,
            'car_year'                      => $this->CarYear,
            'needing_on_site_mechanic'      => $this->NeedingOnSiteMechanic,
            'date_mechanic_should_visit'    => $this->DateMechanicShouldVisit,
            'time_mechanic_should_visit'    => $this->TimeMechanicShouldVisit,
            'customer_comment'              => $this->CustomerComment,
            'statusid'                      => $this->Status->ID,
            'subscribe_to_a_plan'           => $this->SubscribeToAPlan
       ];

       // @var bool $created 
       $created = false;

       // don't forget to pass a table name to DB()
       $table = $this->DB(Table::SERVICE_REQUEST);

       // we can insert data
       if ($table->insert($data)->go()) $created = true;

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
        $query = $this->Filter($this->DB(Table::SERVICE_REQUEST), [

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
            $data[] = $model->cleanUpNullData();

        endwhile;

        // return data
        return $data;
    }
}
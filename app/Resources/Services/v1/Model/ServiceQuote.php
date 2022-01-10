<?php
namespace Resources\Services\v1\Model;

use Engine\RequestData;
use function Lightroom\Requests\Functions\{get};
use Engine\{Interfaces\ModelInterface, DBMS, Table, ModelHelper};
/**
 * @package ServiceQuote Model
 * @author Amadi Ifeanyi <amadiify.com>
 */
class ServiceQuote implements ModelInterface
{
    /**
     * This 'ModelHelper' trait contains the fillable method and DB method.
     */
    use ModelHelper;

    /**
     * This holds the primary key for database table.
     */
    const PRIMARY_KEY = 'quoteid';

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
    public $CustomerName;
    public $CustomerPhone;
    public $CustomerEmail;
    public $CustomerLocation;
    public $CarIssue;
    public $CarModel;
    public $Manufacturer;
    public $CarYear;
    public $ServiceType;
    public $NumberOfCars = 1;
    public $Mileage;

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
        $this->ID = $data->get('id', $data->get('quoteid', $this->ID));
        $this->CustomerName = $data->get('name', $data->customer_name);
        $this->CustomerPhone = $data->get('tel', $data->customer_phone);
        $this->CustomerEmail = $data->get('email', $data->customer_email);
        $this->CustomerLocation = $data->get('location', $data->customer_location);
        $this->CarIssue = $data->get('issue', $data->car_issue);
        $this->CarModel = $data->get('model', $data->car_model);
        $this->ServiceType = $data->get('service_type', $data->service_type);
        $this->CarYear = $data->get('service_type', $data->car_year);
        $this->Mileage = $data->get('mileage', $data->mileage);
        $this->NumberOfCars = $data->get('number_of_cars', $data->get('number_of_cars', $this->NumberOfCars));
        $this->Manufacturer = \Resources\Manufacturers\v1\Model\Manufacturers::ReadById($data->get('manufacturerid', $data->manufacturerid));
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
            'customer_name'     => $this->CustomerName,
            'customer_phone'    => $this->CustomerPhone,
            'customer_email'    => $this->CustomerEmail,
            'customer_location' => $this->CustomerLocation,
            'car_issue'         => $this->CarIssue,
            'car_model'         => $this->CarModel,
            'service_type'      => $this->ServiceType,
            'car_year'          => $this->ServiceType,
            'manufacturerid'    => $this->Manufacturer->ID,
            'number_of_cars'    => $this->NumberOfCars,
            'mileage'           => $this->Mileage,
       ];

       // @var bool $created 
       $created = false;

       // don't forget to pass a table name to DB()
       $table = $this->DB(Table::SERVICE_QUOTE);

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
        $query = $this->Filter($this->DB(), [

            // your table primary key
            // useful for sorting in asc or desc order
            'primary' => static::PRIMARY_KEY, 

            // default where statement to send alongside this query
            'where' => [

            ],

            // when there is an ID and not zero (0), it fetches for that ID only
            'id' => $this->id, 

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
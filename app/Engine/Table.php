<?php
namespace Engine;
/**
 * @package Table names
 * @author Amadi Ifeanyi <amadiify.com>
 * 
 * To helps with referencing database table names.
 * eg. const TABLE_ALIASE = 'name';
 * 
 * where TABLE_ALIASE is a unquie constant name.
 */
class Table
{
    const MANUFACTURERS = 'manufacturers';
    const STATUS = 'global_status';
    const SERVICE_REQUEST = 'service_requests';
    const NEWSLETTER_SUBSCRIBER = 'newsletter_subscribers';
    const SERVICE_QUOTE = 'service_quotes';
    const CONTACT_BOX = 'contact_messages';
    const MECHANIC = 'mechanics';
    const MECHANIC_REPORT = 'mechanic_report';
}
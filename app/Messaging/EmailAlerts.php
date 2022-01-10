<?php
namespace Messaging;

use Messaging\Emails\EmailSender;
/**
 * @package EmailAlerts
 * @author Amadi Ifeanyi <amadiify.com>
 * 
 * This alert is meant for internal email notifications
 */
class EmailAlerts
{
    /**
     * @var string $sendTo
     */
    public static $sendTo = 'alerts@autofixer.com.ng';

    /**
     * @var bool $sendInBackground
     * 
     * To get the email to send in the background, ensure rabbitmq is running and rabbitmq client is running
     */
    public static $sendInBackground = true;

    /**
     * @method EmailAlerts newSubscriberAlert
     * @param array $data
     * @return void
     */
    public static function newSubscriberAlert(array $data = [])
    {
        EmailSender::newSubscriberAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new email subscriber'
        ]);
    }

    /**
     * @method EmailAlerts newContactAlert
     * @param array $data
     * @return void
     */
    public static function newContactAlert(array $data = [])
    {
        EmailSender::newContactAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new contact message'
        ]);
    }

    /**
     * @method EmailAlerts newQuoteAlert
     * @param array $data
     * @return void
     */
    public static function newQuoteAlert(array $data = [])
    {
        EmailSender::newQuoteAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new quote submitted'
        ]);
    }

    /**
     * @method EmailAlerts newRepairAlert
     * @param array $data
     * @return void
     */
    public static function newRepairAlert(array $data = [])
    {
        EmailSender::newRepairAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new repair service submitted'
        ]);
    }

    /**
     * @method EmailAlerts newMaintenanceAlert
     * @param array $data
     * @return void
     */
    public static function newMaintenanceAlert(array $data = [])
    {
        EmailSender::newMaintenanceAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new maintainance service submitted'
        ]);
    }

    /**
     * @method EmailAlerts newDiagnosisAlert
     * @param array $data
     * @return void
     */
    public static function newDiagnosisAlert(array $data = [])
    {
        EmailSender::newDiagnosisAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new diagnosis service submitted'
        ]);
    }

    /**
     * @method EmailAlerts newMechanicMessageAlert
     * @param array $data
     * @return void
     */
    public static function newMechanicMessageAlert(array $data = [])
    {
        EmailSender::newMechanicMessageAlert($data, [
            'background'    => self::$sendInBackground,
            'to'            => self::$sendTo,
            'subject'       => 'You have a new message from ['.$data['name'].']'
        ]);
    }

}
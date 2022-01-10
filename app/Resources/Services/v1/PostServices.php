<?php
namespace Resources\Services\v1;

use Engine\RequestData;
use Messaging\EmailAlerts;
use Messaging\Emails\EmailSender;
use function Lightroom\Database\Functions\{db};
use Engine\{Interfaces\ResourceInterface, Request, Response};
/**
 * @package PostServices
 * @author Amadi Ifeanyi <amadiify.com>
 */
class PostServices implements ResourceInterface
{
    use Providers\CreateProvider,
        Providers\DeleteProvider,
        Providers\UpdateProvider;

    /**
     * @method PostServices Init
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
     * @method PostServices SubmitDiagnosis
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitDiagnosis(Request $request, Response $response)
    {
        // set the service type
        $request->service_type = 'diagnosis';

        // use service request model
        $model = $request->useModel(Model\ServiceRequest::class)->Create();

        // response when not submitted
        if (!$model) return $response->failed('Diagnosis request not submitted');

        // send to client
        EmailSender::newRequest([ 'name' => ucfirst($request->name) ], [
            'to'            => $request->email,
            'background'    => true,
            'subject'       => 'Thank you for requesting for a diagnosis service'
        ]);

        // send to autofixer
        EmailAlerts::newDiagnosisAlert(['name' => $request->name]);

        // share response
        $response->success('Diagnosis request submitted successfully');
    }

    /**
     * @method PostServices SignupForNewsletter
     * @param Request $request
     * @param Response $response
     * @return void
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SignupForNewsletter(Request $request, Response $response) : void
    {
        $model = $request->useModel(Model\NewsletterSubscriber::class)->Create();

        // send mail
        if ($model) :

            // send to client
            EmailSender::newSubscriber([ 'name' => 'Friend' ], [
                'to'            => $request->email,
                'background'    => true
            ]);

            // send to autofixer
            EmailAlerts::newSubscriberAlert();

        endif;

        // response when submitted
        $response->success('Subscriber added successfully');
    }

    /**
     * @method PostServices SubmitMaintenance
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitMaintenance(Request $request, Response $response)
    {
        // set the service type
        $request->service_type = 'maintenance';

        // use service request model
        $model = $request->useModel(Model\ServiceRequest::class)->Create();

        // response when not submitted
        if (!$model) return $response->failed('Maintenance request not submitted');

        // send to client
        EmailSender::newRequest([ 'name' => ucfirst($request->name) ], [
            'to'            => $request->email,
            'background'    => true,
            'subject'       => 'Thank you for requesting for a maintainance service'
        ]);

        // send to autofixer
        EmailAlerts::newMaintenanceAlert(['name' => $request->name]);

        // share response
        $response->success('Maintenance request submitted successfully');
    }

    /**
     * @method PostServices SubmitRepair
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitRepair(Request $request, Response $response)
    {
        // set the service type
        $request->service_type = 'repair';

        // use service request model
        $model = $request->useModel(Model\ServiceRequest::class)->Create();

        // response when not submitted
        if (!$model) return $response->failed('Repair request not submitted');

        // send to client
        EmailSender::newRequest([ 'name' => ucfirst($request->name) ], [
            'to'            => $request->email,
            'background'    => true,
            'subject'       => 'Thank you for requesting for a repair service'
        ]);

        // send to autofixer
        EmailAlerts::newRepairAlert(['name' => $request->name]);

        // send message
        $response->success('Repair request submitted successfully');

    }

    /**
     * @method PostServices SubmitQuote
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitQuote(Request $request, Response $response)
    {
        // use service request model
        $model = $request->useModel(Model\ServiceQuote::class)->Create();

        // response when not submitted
        if (!$model) return $response->failed('Quote submission not complete');

        // send to client
        EmailSender::newRequest([ 'name' => ucfirst($request->name) ], [
            'to'            => $request->email,
            'background'    => true,
            'subject'       => 'Thank you for requesting for a Quote'
        ]);

        // send to autofixer
        EmailAlerts::newQuoteAlert(['name' => $request->name]);

        // share response
        $response->success('Service Quote submitted successfully');
    }

    /**
     * @method PostServices SubmitContactMessage
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitContactMessage(Request $request, Response $response)
    {
        // use service request model
        $model = $request->useModel(Model\ContactMessage::class)->Create();

        // response when not submitted
        if (!$model) return $response->failed('Could not submit contact message');

        // send to client
        EmailSender::newRequest([ 'name' => ucfirst($request->name) ], [
            'to'            => $request->email,
            'background'    => true,
            'subject'       => 'Thank you for contacting AUTOFIXER'
        ]);

        // send to autofixer
        EmailAlerts::newContactAlert(['name' => $request->name]);

        // send response
        $response->success('Contact message submitted successfully');

        
    }

    /**
     * @method PostServices SendJobAlertToMechanic
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SendJobAlertToMechanic(Request $request, Response $response)
    {
        // use mechanic model
        $model = Model\Mechanic::ReadById($request->id);

        // do we have something
        if ($model->Username == null) return $response->failed('We could not find that mechanic to begin with!');

        // send to mechanic
        EmailSender::newJobAlert([ 'url' => $request->url ], [
            'to'            => $model->Email,
            'background'    => true,
            'subject'       => '[AUTOFIXER] You have a new assignment!'
        ]);

        // all done
        $response->success('Message sent to mechanic!');
        
    }

    /**
     * @method PostServices SendCancellationJobAlertToMechanic
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SendCancellationJobAlertToMechanic(Request $request, Response $response)
    {
        // use mechanic model
        $model = Model\Mechanic::ReadById($request->id);

        // do we have something
        if ($model->Username == null) return $response->failed('We could not find that mechanic to begin with!');

        // send to mechanic
        EmailSender::cancellationJobAlert([ 'url' => $request->url ], [
            'to'            => $model->Email,
            'background'    => true,
            'subject'       => '[AUTOFIXER] Your job assignment has been canceled!'
        ]);

        // all done
        $response->success('Message sent to mechanic!');
    }

    /**
     * @method PostServices SubmitMechanicMessage
     * @param Request $request
     * @param Response $response
     * @return mixed
     * 
     * @start.doc
     * 
     * .. Your documentation content goes in here.
     * 
     */
    public function SubmitMechanicMessage(Request $request, Response $response)
    {
        // use service request model
        $model = $request->useModel(Model\Mechanic::class)->CreateMechanicReport((new RequestData($request->getData())));

        // is successful
        if ($model) return $response->success('Message logged!');

        // failed
        $response->failed('Message could not logged!');
    }
}
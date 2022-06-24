<?php

namespace Web\App\Services;

use Web\App\Services\Services\AppointmentService;
use Web\App\Services\Services\CallBackService;
use Web\App\Services\Services\ContactService;
use Web\App\Services\Services\FeedBackService;
use Web\App\Services\Services\NewsletterService;
use Web\App\Services\Services\QuoteService;

class ServiceFactory {

    protected $callbacks;

    /**
     * @param array $callbacks
     */
    public function __construct(array $callbacks = [])
    {
        $this->callbacks = array_merge([
            ServicesConstants::APPOINTMENT_SERVICE          => [$this, 'createAppointment'],
            ServicesConstants::CALLBACK_SERVICE             => [$this, 'createCallback'],
            ServicesConstants::CONTACT_SERVICE              => [$this, 'createContact'],
            ServicesConstants::FEEDBACK_SERVICE             => [$this, 'createFeedback'],
            ServicesConstants::NEWSLETTER_SERVICE           => [$this, 'createNewsletter'],
            ServicesConstants::QUOTE_SERVICE                => [$this, 'createQuote'],
        ], $callbacks);
    }

    /**
     * @param string $key
     * @return ServiceFactory[]|false|mixed|string[]
     */
    public function create(string $key){

        if(!empty($this->callbacks[$key]))
        {
            return call_user_func($this->callbacks[$key]);
        }
        return $this->callbacks[$key];
    }

    public function createAppointment(){

        return new AppointmentService();
    }

    public function createCallback(){

        return new CallBackService();
    }

    public function createContact(){

        return new ContactService();
    }

    public function createFeedback(){

        return new FeedBackService();
    }

    public function createNewsletter(){

        return new NewsletterService();
    }

    public function createQuote(){

        return new QuoteService();
    }

}

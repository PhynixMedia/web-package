<?php

namespace Web\App\Controllers;


use App\Http\Controllers\Controller;
use Cms\App\Repositories\Pages\TemplatesRepository;
use Web\App\Services\ServiceFactory;
use Web\App\Services\ServiceLoader;
use Web\App\Services\ServicesConstants as Constant;

class WebCoreController extends Controller
{
    protected $appointmentService;
    protected $callbackService;
    protected $contactService;
    protected $feedbackService;
    protected $quoteService;
    protected $newsletterService;

    public function __construct(){

        date_default_timezone_set('Europe/London');

        $this->repository = new TemplatesRepository();

        $services = new ServiceLoader(new ServiceFactory());
        $this->appointmentService           = $services->load(Constant::APPOINTMENT_SERVICE);
        $this->callbackService              = $services->load(Constant::CALLBACK_SERVICE);
        $this->contactService               = $services->load(Constant::CONTACT_SERVICE);
        $this->feedbackService              = $services->load(Constant::FEEDBACK_SERVICE);
        $this->quoteService                 = $services->load(Constant::QUOTE_SERVICE);
        $this->newsletterService            = $services->load(Constant::NEWSLETTER_SERVICE);

    }
}

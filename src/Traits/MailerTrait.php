<?php

namespace Web\App\Traits;

trait MailerTrait {

    public static function admin(array $data, $title = 'New Submission from Website'){

        $title = "Admin: " . $title;

        return self::mail((object)[
            'subject'   => $title,
            'to'        => env('APP_MAIL_ADMIN'),
            'template'  => 'notice.admin',
            'data'      => (object) $data
        ]);
    }

    public static function confirm(array $data){

        return self::mail((object) $data);
    }

    public static function payment(array $data){

        $data['template'] = 'confirm.payment';
        return self::mail((object) $data);
    }

    public static function enquiry(array $data){

        return self::mail((object) $data);
    }

    /**
     * used by many
     */
    public static function source(string $subject, string $to, string $layout, object $data){

        $source = (object) [
            'subject'   => $subject,
            'to'        => $to,
            'template'  => $layout,
            'data'      => $data
        ];

        session()->put('source', $source);
    }

    /**
     * @param object $result
     */
    public static function mail(object $result){

        // insert mail into database here
    }

}

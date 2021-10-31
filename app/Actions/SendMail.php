<?php

namespace App\Actions;

use Mailgun\Mailgun;

class SendMail
{
    protected $to;
    protected $subject;
    protected $data;

    public function __construct($to, $subject, $data)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->data = $data;
    }

    public function execute()
    {
        $mgClient = Mailgun::create(config('mailgun.key'), config('mailgun.endpoint'));
        $html = view('mail.template', ['data' => $this->data])->render();
        $domain = config('mailgun.domain');
        $params = array(
            'from'    => config('mailgun.from'),
            'to'      => $this->to,
            'bcc'     => config('business.email'),
            'subject' => $this->subject,
            'html'    => $html
        );
        return $mgClient->messages()->send($domain, $params);
    }
}

<?php

namespace App\Traits;

use PHPMailer\PHPMailer\PHPMailer;

trait PHPCustomMail
{
    /**
     * @param $from
     * @param $to
     * @param $subject
     * @param $html
     * @return bool
     */
    public function customMail($from, $to, $subject, $html, $attachment_url = null)
    {
        $email = new PHPMailer();
        $email->SetFrom($from, 'Fine Design'); //Name is optional
        $email->Subject = $subject;
        $email->msgHTML($html); 
        $email->AddAddress($to);

        if (!is_null($attachment_url)) {
            $email->AddAttachment($attachment_url, 'test');
        }

        return $email->Send();
    }
    


}

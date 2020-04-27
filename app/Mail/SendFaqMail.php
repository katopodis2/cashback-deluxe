<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendFaqMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->email = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $yourEmail =  auth()->user()??$this->email->yourEmail;

        return $this->from('graphberry@gmail.com', 'CashBackDeluxe')->to($yourEmail)
        ->subject('FAQ')
        ->markdown('email.mailFaq');

//        dd($this->email->enterMessages,$this->email->user(),1212121);
//        return $this->from('suro11777@mail.ru')->view('email.mailFaq');
    }
}

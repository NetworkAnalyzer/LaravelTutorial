<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * 送信するメール内で使う変数
     * 〇〇さま のように宛先によって変わる部分を変数にできる
     * 今回は件名と本文全体を変数にする
     */
    public $subject;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $content)
    {
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.html_mail')
            ->text('emails.text_mail')
            ->subject($this->subject)
            ->with([
                'content' => $this->content,
            ]);
    }
}

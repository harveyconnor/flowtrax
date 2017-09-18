<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TrackSubmissionMailer extends Mailable
{
    use Queueable, SerializesModels;

    protected $first_name;
    protected $last_name;
    protected $track_title;
    protected $email;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first_name, $last_name, $track_title, $email, $subject)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->track_title = $track_title;
        $this->email = $email;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->to($this->email, $this->first_name.' '.$this->last_name)
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->replyTo(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject($this->subject)
            ->markdown('emails.tracks.submission')
            ->with('name', $this->first_name.' '.$this->last_name)
            ->with('track_title', $this->track_title);
    }
}

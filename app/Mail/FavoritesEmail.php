<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FavoritesEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $selectedClasses;

    /**
     * Create a new message instance.
     *
     * @param $selectedClasses
     */
    public function __construct($selectedClasses)
    {
        $this->selectedClasses = $selectedClasses;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.favorites');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class ContactFormResponse extends Mailable {

    use Queueable,
        SerializesModels;

    protected $contactFirstName;
    protected $contactLastName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactFirstName, $contactLastName) {
        $this->setContactFirstName($contactFirstName);
        $this->setContactLastName($contactLastName);
    }

    public function getContactFirstName() {
        return $this->contactFirstName;
    }

    public function getContactLastName() {
        return $this->contactLastName;
    }

    public function setContactFirstName($contactFirstName) {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    public function setContactLastName($contactLastName) {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {

        $subject = trans('contact-form.subject');

        return $this->from('nikola.kotarac@yahoo.com', 'Nikola Kotarac')
                        ->subject($subject)
                        ->view('emails.contact-form-response', [
                            'contactFormName' => $this->getContactFirstName(),
                            'contactFormSurname' => $this->getContactLastName()
        ]);
    }

}

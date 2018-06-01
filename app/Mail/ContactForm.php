<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable {

    use Queueable,
        SerializesModels;

    protected $contactFirstName;
    protected $contactLastName;
    protected $contactEmail;
    protected $contactMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactFirstName, $contactLastName, $contactEmail, $contactMessage) {
        $this->setContactFirstName($contactFirstName);
        $this->setContactLastName($contactLastName);
        $this->setContactEmail($contactEmail);
        $this->setContactMessage($contactMessage);
    }
    
    public function getContactFirstName() {
        return $this->contactFirstName;
    }

    public function getContactLastName() {
        return $this->contactLastName;
    }

    public function getContactEmail() {
        return $this->contactEmail;
    }

    public function getContactMessage() {
        return $this->contactMessage;
    }

    public function setContactFirstName($contactFirstName) {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    public function setContactLastName($contactLastName) {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    public function setContactEmail($contactEmail) {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    public function setContactMessage($contactMessage) {
        $this->contactMessage = $contactMessage;
        return $this;
    }

    
        

   
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from($this->getContactEmail(), $this->getContactFirstName() . ' ' . $this->getContactLastName())
                ->view('emails.contact-form', [
                    'contactFirstName' => $this->getContactFirstName(),
                    'contactLastName' => $this->getContactLastName(),
                    'contactEmail' => $this->getContactEmail(),
                    'contactMessage' => $this->getContactMessage()
                ]);
    }

}

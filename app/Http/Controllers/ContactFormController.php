<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use App\Mail\ContactFormResponse;

class ContactFormController extends Controller {

    public function process() {

        $request = request();

        $formData = $request->validate([
            'contactFirstName' => 'required|string|min:2|max:20',
            'contactLastName' => 'required|string|min:2|max:20',
            'contactEmail' => 'required|email',
            'contactMessage' => 'required|string|min:5|max:255'
        ]);


        Mail::to('koti.matic@gmail.com')->send(new ContactForm(
                $formData['contactFirstName'], $formData['contactLastName'], $formData['contactEmail'], $formData['contactMessage']
        ));

        Mail::to($formData['contactEmail'])->send(new ContactFormResponse($formData['contactFirstName'], $formData['contactLastName']));

        $messageSuccess = trans('contact-form.success');


        $messageContent = '<div class="col-12 text-center">
                            <div class="alert alert-info" role="alert">
                                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                . $messageSuccess . '</div>'
                . '</div>';

        return response()->json($messageContent);
    }

}

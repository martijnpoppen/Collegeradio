<?php

class ContactController extends BaseController {



//Contact Form
public function getContactUsForm(){

	//Get all the data and store it inside Store Variable
	$data = Input::all();

	//Validation rules
	$rules = array (
	'first_name' => 'required|alpha',
	'last_name' => 'required|alpha',
	'phone_number'=>'numeric|min:8',
	'email' => 'required|email',
	'message' => 'required|min:25'
	);

	//Validate data
	$validator = Validator::make ($data, $rules);
	$success = "<p>dankjewel</p>";
	//If everything is correct than run passes.
		if ($validator -> passes()){

		//Send email using Laravel send function
		Mail::send('emails.hello', $data, function($message) use ($data)
		{
		//email 'From' field: Get users email add and name
		$message->from($data['email'] , $data['first_name']);
		//email 'To' field: cahnge this to emails that you want to be notified. 
		$message->to('collegeradio.clwd@gmail.com', 'Collegeradio Leeuwarden')->cc('jurnspijksma@gmail.com')->subject('contactformulier website');

		});

		Session::flash('message', 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.');

		return Redirect::to('/#contact');



		}else{
		//return contact form with errors
		return Redirect::to('pages.home')->withErrors($validator);
		}
	}
}
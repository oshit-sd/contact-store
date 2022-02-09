<?php

namespace Oshit\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Oshit\Contact\Models\Contact;

class ContactController extends Controller {

    public function index() {
        return view( 'contact::contact' );
    }

    public function store( Request $request ) {
        Contact::create( $request->all() );
        return redirect( route( 'contact.create' ) );
    }
}

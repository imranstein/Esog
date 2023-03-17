<?php

namespace App\Http\Controllers;

use Chapa\Chapa\Facades\Chapa;
use Illuminate\Http\Request;


class ChapaController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    protected $reference;

    public function __construct()
    {
        $this->reference = Chapa::generateReference();
    }
    public function initialize(Request $request)
    {
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $email = $request->email;
        $amount = $request->amount;
        //This generates a payment reference
        $reference = $this->reference;
        $id = $request->id;

        // dd($firstName, $lastName, $email, $reference, $amount);



        $data = [
            'amount' => $amount,
            'email' => $email,
            'tx_ref' => $reference,
            'currency' => "ETB",
            'callback_url' => route('callback', [$reference]),
            'return_url' => route('memberSuccess', [$id]),
            'first_name' => $firstName,
            'last_name' => $lastName,
            "customization" => [
                "title" => 'Esog Payment',
                "description" => "Payment for 2023 membership"
            ]
        ];

        $payment = Chapa::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            dd($payment);
            return;
        }

        return redirect($payment['data']['checkout_url']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback($reference)
    {

        $data = Chapa::verifyTransaction($reference);
        dd($data);

        //if payment is successful
        if ($data['status'] ==  'success') {

            return view('Front.memberSuccess');

            dd($data);
        } else {
            //oopsie something ain't right.
        }
    }
}
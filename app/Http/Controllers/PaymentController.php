<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PaymentController extends Controller
{
    public function payment(){


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.instamojo.com/v2/payment_requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
        array("X-Api-Key:test_954205be76c4732770364f74a17",
        "X-Auth-Token:test_073c2858d533affb5408f23b65e"));

        $payload = Array(
        'purpose' => 'Domain',
        'amount' => '1000',
        'buyer_name' => 'Trupti Jambhulkar',
        'email' => 'truptijambhulkar2002@gmail.com',
        'phone' => '9022686533',
        'redirect_url' => 'http://www.example.com/redirect/',
        'send_email' => 'True',
        'webhook' => 'http://127.0.0.1:8000/payment_redirect',
        'allow_repeated_payments' => 'False',
        );

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response);
        echo '<pre>';
        print_r($response);


    }

    public function payment_redirect(){
        echo '<pre';
        print_r($_GET);
    }
}

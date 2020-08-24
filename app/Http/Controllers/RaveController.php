<?php
namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use the Rave Facade
use Rave;

class RaveController extends Controller
{
  public function initialize(Request $request) {      
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL



    // session([
    //     'businessname' => $request->businesname,
    //     'contactname' => $request->contactname,
    //     'phone' => $request->phone,
    // ]);
    // dd(session('businessname'));
    Rave::initialize(route('callback'));  

  }
  
  public function callback(Request $request) {
    //dd(session()->get('businessname'));
    $resp = $request->resp; 
    $body = json_decode($resp, true); 
    $txRef = $body['data']['data']['txRef']; 
    $data = Rave::verifyTransaction($txRef); 
    
    // This verifies the transaction and takes the parameter of the transaction reference
    //$data = Rave::verifyTransaction(request()->txref);

    //dd($data);

    $chargeResponsecode = $data->data->chargecode;
    $chargeAmount = $data->data->amount;
    $chargeCurrency = $data->data->currency;

    
    $amount = Cart::total();
    $currency = "NGN";

    //if($data->status=='success'){
    if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
    // transaction was successful...
    // please check other things like whether you already gave value for this ref
    // if the email matches the customer who owns the product etc
    //Give Value and return to Success page
    // session([

    //     'amount' => $amount,
    //     'currency' => $currency
    // ]);
  
        //$this->addToOrdersTable($data);
        Mail::send(new OrderPlaced);

        Cart::instance('default')->destroy();
    
        return redirect('/success');
    
    } else {
        //Dont Give Value and return to Failure page
    
        return redirect('/failed');
    }

    // dd($data->data);
  }

  protected function addToOrdersTable($data)
  {
    // $order = Order::create([
    //     'user_id' =>auth()->user() ? auth()->user()->id : null,
    //     'billing_email' => $this->getBillingDetails()->get('email'),
    //     'billing_company' => $this->getBillingDetails()->get('company'),
    //     'billing_name' => $this->getBillingDetails()->get('contactperson'),
    //     'billing_address' => $this->getBillingDetails()->get('address'),
    //     'billing_city' => $this->getBillingDetails()->get('city'),
    //     'billing_postalcode' => $this->getBillingDetails()->get('postalcode'),
    //     'billing_state' => $this->getBillingDetails()->get('state'),
    //     'billing_phone' => $this->getBillingDetails()->get('phone'),
    //     'billing_discount' =>$this->getNumbers()->get('discount'),
    //     'billing_tax' =>$this->getNumbers()->get('newTax'),
    //     'billing_subtotal' =>$this->getNumbers()->get('subtotal'),
    //     'billing_total' =>$this->getNumbers()->get('newTotal'),
    //     'error' =>'null'

    // ]);

    // foreach (Cart::content() as $item) {
    //     OrderProduct::create([
    //         'order_id' => $order->id,
    //         'product_id' => $item->model->id
    //     ]);
    // }
  }

  private function getBillingDetails()
  {
    //   $email = session()->get('email');
    //   $company = session()->get('businessname');
    //   $name = session()->get('contactperson');
    //   $address = session()->get('buinessaddress');
    //   $city = session()->get('city');
    //   $postalcode = session()->get('postalcode');
    //   $state = session()->get('state');
    //   $phone = session()->get('phone');

    //   return collect([
    //       'email' => $email,
    //       'company' => $company,
    //       'contactperson' => $name,
    //       'address' => $address,
    //       'city' => $city,
    //       'postalcode' => $postalcode,
    //       'state' => $state,
    //       'phone' => $phone,
          
    //   ]);
  }

  private function getNumbers()
  {
      $tax = config('cart.tax')/100;
      $discount = session()->get('discount');
      $subtotal = Cart::subtotal();
      $newTax = $subtotal * $tax;
      $newTotal = $subtotal * (1+$tax);

      return collect([
          'tax' => $tax,
          'discount' => $discount,
          'subtotal' => $subtotal,
          'newTax' => $newTax,
          'newTotal' => $newTotal
          //'tax' => $tax,
      ]);
  }
}
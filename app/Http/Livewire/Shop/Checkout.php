<?php

namespace App\Http\Livewire\Shop;


use Livewire\Component;
use App\Facades\Cart;
use App\City;
use App\Courier;
use App\Province;
use phpDocumentor\Reflection\Types\This;

class Checkout extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postal_code;
    public $formCheckout;
    public $snapToken;
    public $cart;
    public $title;
    public $total;
    public $province;
    public $kabupaten;
    public $ongkir;
    public $barang;
    
    

    protected $listeners = [
        'emptyCart' => 'emptyCartHandler'
    ];

    public function mount()
    {
        $this->formCheckout = true;
        $this->cart = Cart::get();

        
    }

    public function render()
    {

        $this->province = Province::get();
        $this->kabupaten = City::get();

        return view('livewire.shop.checkout');
    }
        
    public function getProvince()
    {
        return Province::pluck('title', 'ongkir');
    }

    public function getKabupaten()
    {
        return Province::get();
    }

    

    public function checkout()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required'
        ]);


        $ongkir = $this->ongkir;
        $cart = Cart::get()['products'];

        $barang = array_sum(
            array_column($cart, 'price')
        );


        $amount = $barang + $ongkir;

        $this->total = $amount;


        $customerDetails = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
        ];

        $transactionDetails = [
            'order_id' => uniqid(),
            'gross_amount' => $amount,
            'item_details' => $cart,
        ];

        

        $payload = [
            'transaction_details' => $transactionDetails,
            'customer_details' => $customerDetails
        ];

        $this->formCheckout = false;

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');

        $snapToken = \Midtrans\Snap::getSnapToken($payload);

        $this->snapToken = $snapToken;
    }

    public function emptyCartHandler()
    {
        Cart::clear();
        $this->emit('cartClear');
    }
}

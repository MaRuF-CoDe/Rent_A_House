<?php

namespace App\Http\Controllers;
// require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51Ii33JCX9U6YTb2uHqKZ653GBtobwr5nhXXG4gLFN69C0vSQDrhymdtK2mS0sKqz8GY84AyQu9TezZ806Nu3wQZQ00Nus56jIu');

use Illuminate\Http\Request;
use App\House;
use App\User;
use App\Booking;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    { 
        $house = House::findOrFail($request->id);
        if(Booking::where('address', $house->address)->where('booking_status', "booked")->count() > 0){
            session()->flash('danger', 'This house has already been booked!');
            return redirect()->back();
        }



        if(Booking::where('address', $house->address)->where('renter_id', Auth::id())->where('booking_status', "requested")->count() > 0){
            session()->flash('danger', 'Your have already sent booking request of this home');
            return redirect()->back();
        }

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'currency' => 'bdt',
                'amount' => $house->rent * 100,
                'name' => 'Home',
                'quantity' => 1
            ]],
            'payment_method_types' => [
              'card',
            ],
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000/payment/success/' . Auth::id() . '/' . $house->id,
            'cancel_url' => 'http://localhost:8000/payment/error/' . $house->id
        ]);
        header('Location: ' . $checkout_session->url);
        die();
    }

    public function success($authId, $houseId)
    {
        // if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
        //     session()->flash('danger', 'Sorry admin and landlord are not able to book any houses. Please login with renter account');
        //     return redirect()->back();
        // }

        $house = House::findOrFail($houseId);
        $landlord = User::where('id', $house->user_id)->first();      

    
         //find current date month year
         // $now = Carbon::now();
         // $now = $now->format('F d, Y');
        
        
        $booking = new Booking();
        $booking->address = $house->address;
        $booking->rent = $house->rent;
        $booking->landlord_id = $landlord->id;
        $booking->renter_id = $authId;
        $booking->house_id = $house->id;
        $booking->save();

        House::where('id', $house->id)->update(['status'=>0]);


        session()->flash('success', 'House Booking Request Send Successfully');
        return redirect()->route('renter.houses.details', $house->id);
    }

    public function error($houseId)
    {
        session()->flash('danger', 'Payment unsuccessfull!');
        return redirect()->route('renten.houses.details', $houseId);
    }
}

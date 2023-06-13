<?php
namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::where('status', 'Approved')->get();

        return view('stories.index')->with('applications', $applications);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        require_once '../path/to/vendor/autoload.php';

        $paynow = new Paynow\Payments\Paynow(
            '10490',
            'd9dedf29-8e42-4de0-ac3c-73248f8c24ad',
            'http://127.0.0.1:8000/stories',
//            'http://example.com/gateways/paynow/update', // This is the result URL
//            'http://example.com/return?gateway=paynow' // This is the return URL
        );

// Create new payment and pass in the reference and payer's email address
        $payment = $paynow->createPayment('Donate', 'donaldtondemashiri@gmail.com');

// Add items and their amounts to the payment
        $payment->add('Donate', 2.50);
//        $payment->add('Apples', 3.40);

// Send the payment and save the response from Paynow in a variable
        $response = $paynow->send($payment);

        if($response->success()) {
            // Get the link to redirect the user to, then use it as you see fit
            $link = $response->redirectUrl();

            // Get the poll url (used to check the status of a transaction).
            // You might want to save this in your DB
            $pollUrl = $response->pollUrl();
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

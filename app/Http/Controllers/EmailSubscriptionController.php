<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSubscriptionController extends Controller
{
  public function subscribeStartupsEspanolas(Request $request)
  {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'email' => 'required|email',
    ], [
        'email.required' => 'No email address provided.',
        'email.email' => 'Invalid email address provided.',
    ]);
    
    $subscriberEmail = $validatedData['email'];
    
    try {
      // Attempt to send the email
      Mail::raw("New subscriber: {$subscriberEmail} in Startups Españolas", function ($message) use ($subscriberEmail) {
        $message->to('mschenk.pda@gmail.com')
            ->subject('New Subscription');
      });
      
      // Log the successful email sending attempt
      \Log::info("Subscription email sent to {$subscriberEmail}.");
      
      // Return a successful response
      return response()->json(['message' => 'Thank you for subscribing!'], 200);
    } catch (\Exception $e) {
      // Log the exception
      \Log::error("Failed to send subscription email for {$subscriberEmail}. Error: {$e->getMessage()}");
      
      // Send notification about the failure
      Mail::raw("Failed to add new subscriber: {$subscriberEmail}. Error: {$e->getMessage()}", function ($message) {
        $message->to('mschenk.pda@gmail.com')
            ->subject('Subscription Error');
      });
      
      // Return an error response
      return response()->json(['error' => 'There was a problem with your subscription.'], 500);
    }
  }
  
}

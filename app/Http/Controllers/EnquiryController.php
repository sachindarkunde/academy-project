<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Filament\Notifications\Notification;

class EnquiryController extends Controller
{
    public function storeEnquiryFormData(Request $request)
    {
        $validated = $request->validate([
            'service' => 'required|string|max:255',
            'message' => 'required|string',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        Enquiry::create($validated);

       // Send static notification
        Notification::make()
            ->title('New Enquiry Submitted')
            ->body('A new enquiry has been received.')
            ->success()
            ->send();

        return response()->json(['status' => 'success', 'message' => 'Your enquiry has been received!']);
    }
}

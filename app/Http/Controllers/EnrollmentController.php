<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use Filament\Notifications\Notification;

class EnrollmentController extends Controller
{
    public function storeEnrollmentFormData(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        Enrollment::create([
            'message' => $request->message,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        // Send static notification
        Notification::make()
            ->title('New Enrollment Submitted')
            ->body('A new enrollment form has been submitted.')
            ->success()
            ->send();


        return response()->json(['success' => true]);
    }
}

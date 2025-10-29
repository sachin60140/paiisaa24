<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submitLoanApplication(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'contactLoanType' => 'required|string|max:100',
            'message' => 'nullable|string',
        ]);

        try {
           
            $ContactModel = new ContactModel();
            $ContactModel->name = $validatedData['name'];
            $ContactModel->email = $validatedData['email'];
            $ContactModel->phone = $validatedData['phone'];
            $ContactModel->loan_type = $validatedData['contactLoanType'];
            $ContactModel->message = $validatedData['message'] ?? '';
            $ContactModel->ip_address = $request->ip();
            $ContactModel->save();
            return redirect()->back()->with('success', 'Loan application submitted successfully!');
            
        } catch (\Exception $e) {
             Log::error('Loan application submission failed: ' . $e->getMessage());
            
            return redirect()->back()
                            ->with('error', 'There was an error submitting your application. Please try again.')
                            ->withInput();
        }

    
    }
}

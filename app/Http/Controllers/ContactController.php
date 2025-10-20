<?php

namespace App\Http\Controllers;

use App\ContactStatus;
use App\Http\Requests\SubmitContactRequest;
use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function submit(SubmitContactRequest $request): RedirectResponse
    {
        DB::transaction(function () use ($request) {
            ContactSubmission::query()
                ->create([
                    'full_name' => $request->full_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'interested_in' => $request->interested_in,
                    'message' => $request->message,
                    'ip_address' => $request->ip(),
                    'user_agent' => $request->userAgent(),
                    'status' => ContactStatus::New,
                ]);
        });

        return back()->with([
            'message' => 'Your message successfully sent!',
        ]);
    }
}

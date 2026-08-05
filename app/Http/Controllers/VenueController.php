<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VenueController extends Controller
{
    public function home(): View { return view('pages.home', ['page' => 'home']); }

    public function page(string $page): View
    {
        abort_unless(in_array($page, ['weddings', 'corporate', 'parties', 'spaces', 'catering', 'decor', 'packages', 'gallery', 'tour', 'about', 'reviews', 'contact', 'privacy', 'cookies', 'terms', 'accessibility']), 404);
        return view('pages.page', ['page' => $page]);
    }

    public function enquiry(EnquiryRequest $request): RedirectResponse
    {
        // Integration boundary: connect an EnquiryService to mail/storage when owner details are approved.
        return back()->with('success', 'Thank you. Your enquiry has been received and our team will be in touch shortly.');
    }
}

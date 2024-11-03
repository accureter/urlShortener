<?php

namespace App\Http\Controllers;

use App\Models\Url;

class RedirectToOriginalUrlController extends Controller
{
    public function __invoke(Url $url)
    {
        return redirect()->away($url->url);
    }
}

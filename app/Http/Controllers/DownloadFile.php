<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\DownloadByURL;

class DownloadFile extends Controller
{
    public function PutInQueue(Request $request)
    {
        $this->dispatch(new DownloadByURL($request->url));
    }
}

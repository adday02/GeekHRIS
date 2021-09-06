<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Performance;
use App\Models\Disiplin;
use App\Models\Etika;
use App\Models\Kemampuan;
use App\Models\Kerjasama;
use App\Models\Tanggungjawab;
use App\Models\User;

class AtasanSemesterController extends Controller
{
    public function index()
    {
        $performance = Performance::All();
        return view('atasan/semester',compact('performance'))->with('i');
    }
}

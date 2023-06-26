<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['verified']);
    }

    public function index(Request $request)
    {
        $conversations = Conversation::get();

        return view('dashboard', [
            'conversations' => $conversations,
        ]);
    }
}

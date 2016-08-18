<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChessboardController extends Controller
{
    /**
     * Deliver initial position of chess pieces.
     *
     */
    public function index()
    {
        // Fetch database to pick chess pieces

        return view('chessboard');
    }
}

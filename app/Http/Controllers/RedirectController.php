<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $role = Auth::user()->role;

        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role) {

            case 0:
                return redirect()->route('product.index');
                // return redirect()->action([MemberController::class, 'index']);
            case 1:
                return redirect()->route('admin.dashboard');
                // return redirect()->action([AdminController::class, 'index']);
            default:
                return redirect()->route('login');
                
        }
    }

}

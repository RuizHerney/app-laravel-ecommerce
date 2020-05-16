<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        //
    } # End method __construct

    public function index( int $status = null )
    {
        if ( $status != null ) {
            $users = User::where('status', $status)
                ->orderBy('id', 'Desc')
                ->paginate(20);
        }else {
            $users = User::orderBy('id', 'Desc')
                ->paginate(20); 
        }

        return view('admin.users.index', compact('users'));
    } # End method index

    public function editUser( String $slug )
    {
        $user = User::where('slug', $slug)
            ->first();

        if (view()->exists('admin.users.edit')) {
            return view('admin.users.edit', compact('user'));
        }
    } # End method

} # End class UserController

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function index()
    {
//        $usersWithPosts = DB::table('users')
//            ->join('posts', 'users.id', '=', 'posts.user_id')
//            ->select("users.*", "posts.body", 'posts.id as post_id')
//            ->get();
//
//        return $usersWithPosts;

        $users = User::with(['posts', 'balance'])->get();

         return view("users", compact('users'));
    }
}

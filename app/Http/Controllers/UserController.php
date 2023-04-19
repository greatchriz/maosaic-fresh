<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;
use App\Mail\WithdrawRequested;
use App\Models\Adminmailcontent;

class UserController extends Controller
{
    public function index(Request $request, User $user)
    {

        $this->authorize('viewAny', User::class);

        $users = User::simplePaginate(10);
        $users_count = User::all()->count();

        return view('users.index', [
            'users' => $users,
            'users_count' => $users_count,
        ]);
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function sendmail(User $user)
    {
        return view('users.sendmail', ['user' => $user]);
    }



    public function postmail(User $user, Request $request)
    {

        // query the adminsmail table and get the title and body where mail_class = WithdrawRequested
        $withdrawalrequested = Adminmailcontent::where('mail_class', 'WithdrawRequested')->first();


        Mail::to($user)->send(new WithdrawRequested($user, $withdrawalrequested));

        return redirect('/users');
        // return view('users.sendmail', ['user' => $user]);
    }


    public function updatebalance(User $user, Request $request)
    {
        $balance = $request->account_balance;

        $user->forceFill([
            'account_balance' => $balance,
        ])->save();

        return redirect('/users');
        // return view('users.sendmail', ['user' => $user]);
    }

}

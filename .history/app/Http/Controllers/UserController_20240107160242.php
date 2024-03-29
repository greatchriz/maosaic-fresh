<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;
use App\Mail\WithdrawalRequest;
use App\Models\Adminmailcontent;
use App\Models\EmailContent;

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


    // create a  withdraw method that sends WithdrawalRequest email to the user when the user clicks the withdraw button
    public function withdraw(User $user, Request $request)
    {
        // get EmailContent model from the database where the email_class is WithdrawalRequest
        $emailContent = EmailContent::where('email_class', 'WithdrawalRequest')->first();

        // send the WithdrawalRequest email to the user
        Mail::to($user)->send(new WithdrawalRequest($user, $emailContent));

        return redirect('/dashboard');
        // return view('users.sendmail', ['user' => $user]);
    }



    // public function withdraw(User $user, Request $request)
    // {
    //     // get the amount to be withdrawn
    //     $amount = $request->amount;

    //     // get the current balance of the user
    //     $current_balance = $user->account_balance;

    //     // check if the amount to be withdrawn is greater than the current balance
    //     if ($amount > $current_balance) {
    //         return redirect('/users');
    //     }

    //     // subtract the amount to be withdrawn from the current balance
    //     $new_balance = $current_balance - $amount;

    //     // update the user's account balance
    //     $user->forceFill([
    //         'account_balance' => $new_balance,
    //     ])->save();

    //     return redirect('/users');
    //     // return view('users.sendmail', ['user' => $user]);
    // }




    // public function postmail(User $user, Request $request)
    // {

    //     // query the adminsmail table and get the title and body of the first model
    //     $adminmailcontent = Adminmailcontent::first();

    //     Mail::to($user)->send(new AdminMail($user, $adminmailcontent));

    //     return redirect('/users');
    //     // return view('users.sendmail', ['user' => $user]);
    // }


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

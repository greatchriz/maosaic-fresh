<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;


    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            //return redirect fintech with success
            return redirect()->route('fintech')->with('success', 'Welcome to your Crownagent Dashboard');
        }

        /**
         * Displays the analytics screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function analytics()
        {
            return view('pages/dashboard/analytics');
        }

        /**
         * Displays the fintech screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function fintech()
        {
            /*if authenticated user email is not admin@crownagent.org then return view pages/dashboard/pending-verification if not return view pages/dashboard/fintech*/

            if (auth()->user()->email != 'admin@crownagent.org') {
                return view('pages/dashboard/pending-verification');
            } else {
                return view('pages/dashboard/fintech');

            }
        }

    }

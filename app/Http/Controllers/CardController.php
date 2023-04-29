<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    // create a method that returns the view for listing all the cards that  belong to the user
    public function index()
    {
        $user = auth()->user();

        $cards = Card::where('user_id', $user->id)->get();

        return view('pages.cards.index', [
            'cards' => $cards,
        ]);
    }

    // create a method that returns the view for creating a card with the user
    public function create()
    {
        $user = auth()->user();

        return view('pages.cards.create', [
            'user' => $user,
        ]);
    }

    // create a store method that will validate the inputs and store the card
    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'type' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        $card = Card::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'type' => $request->type,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('cards.show', $card->id);
    }

    // create a show method that will return the view for showing a card

    public function show(Card $card)
    {
        return view('pages.cards.show', [
            'card' => $card,
        ]);
    }

}

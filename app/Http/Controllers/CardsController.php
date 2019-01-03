<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
      $cards = Card::all();
      return view('cards.index', ['cards' => $cards]);
    }

    public function add()
    {
        return view('cards.add');
    }

    public function create(Request $request)
    {
// TODO validate
        $card = new Card;
        $form = $request->all();
        unset($form['_token']);
        $card->name = $request->name;
        $card->type = $request->type;
        $card->description = $request->description;
        $card->save();
        return redirect('/cards');
    }

    public function show($id)
    {
      $card = Card::find($id);
      return view('cards.show', ['card' => $card]);
    }

    public function edit($id)
    {
      $card = Card::find($id);
      return view('cards.edit', ['card' => $card]);
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id);
        $form = $request->all();
        unset($form['_token']);
        $card->id = $id;
        $card->name = $request->name;
        $card->type = $request->type;
        $card->description = $request->description;
        $card->save();
        return redirect('/cards');
    }

    public function del($id)
    {
      $card = Card::find($id);
      return view('cards.del', ['card' => $card]);
    }

    public function remove(Request $request, $id)
    {
        Card::find($id)->delete();
        return redirect('/cards');
    }
}

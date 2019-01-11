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

// dump($form);exit;
        if (isset($form['image_name'])) {
// TODO validate
            $imageName = str_pad($card->id, 5, 0, STR_PAD_LEFT) . '.' . $form['image_name']->getClientOriginalExtension();
            $request->file('image_name')->move(
// TODO storageに入れてpublicとリンク張るのが良いらしいがvagrantだと出来ないので直接公開ディレクトリに入れる https://teratail.com/questions/89984
                // base_path() . '/storage/app/public/card_images', $imageName
                base_path() . '/public/storage/card_images', $imageName
            );
            $card->image_name = $imageName;
            $card->save();
        }

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

        $card->image_name = null;
// dump($form);exit;
        if (isset($form['image_name'])) {
// TODO validate
            $imageName = str_pad($id, 5, 0, STR_PAD_LEFT) . '.' . $form['image_name']->getClientOriginalExtension();
            $request->file('image_name')->move(
// TODO storageに入れてpublicとリンク張るのが良いらしいがvagrantだと出来ないので直接公開ディレクトリに入れる https://teratail.com/questions/89984
                // base_path() . '/storage/app/public/card_images', $imageName
                base_path() . '/public/storage/card_images', $imageName
            );
            $card->image_name = $imageName;
        }

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

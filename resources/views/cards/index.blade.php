@extends('layouts.admin')

@section('title', 'カード一覧')

@section('content')
<div id="item_list">
@{{ $data }}
  @foreach ($cards as $card)
    @if ($loop->first)

      <table>
        <tr>
          <th>名前</th>
          <th>タイプ</th>
          <th>説明</th>
          <th>作成日時</th>
          <th>更新日時</th>
          <th>画像</th>
          <th>詳細</th>
          <th>編集</th>
          <th>削除</th>
          <th>比較</th>
        </tr>
    @endif
        <tr>
          <td>{{$card->name}}</td>
          <td>{{$card->type}}</td>
          <td>{{$card->description}}</td>
          <td>{{$card->created_at}}</td>
          <td>{{$card->updated_at}}</td>
          <td>
            @if ($card->image_name)
              <img class="card_image" src="/storage/card_images/{{$card->image_name}}">
            @else
              <img class="card_image" src="/storage/card_images/noimage.png">
            @endif
          </td>
          <td><a href="/cards/show/{{$card->id}}">詳細</a></td>
          <td><a href="/cards/edit/{{$card->id}}">編集</a></td>
          <td><a href="/cards/del/{{$card->id}}">削除</a></td>
          <td><span class="into_compare_list" v-on:click="intoCompareList({{$card->id}}, '{{$card->name}}', '{{$card->image_name}}')">比較する</span></td>
        </tr>
    @if ($loop->last)
      </table>
    @endif
  @endforeach
<compare-component v-bind:compare_list="compare_list"></compare-component>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'カード編集')

@section('content')
  <table>
    <tr>
      <th>名前</th>
      <th>タイプ</th>
      <th>説明</th>
      <th>作成日時</th>
      <th>更新日時</th>
      <th>詳細</th>
      <th>編集</th>
      <th>削除</th>
      <th>画像</th>
    </tr>

    <form action="/cards/edit/{{$card->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <tr>
        <td><input type="text" name="name" value="{{$card->name}}"></td>
        <td><input type="text" name="type" value="{{$card->type}}"></td>
        <td><input type="text" name="description" value="{{$card->description}}"></td>
        <td>{{$card->created_at}}</td>
        <td>{{$card->updated_at}}</td>
        <td><a href="/cards/show/{{$card->id}}">詳細</a></td>
        <td><input type="submit" value="編集する"></td>
        <td><a href="/cards/del/{{$card->id}}">削除</a></td>
        <td>
          @if ($card->image_name)
            <img class="card_image" src="/storage/card_images/{{$card->image_name}}">
          @else
            <img class="card_image" src="/storage/card_images/noimage.png">
          @endif
          <input type="file" name="image_name">
        </td>
      </tr>
    </form>
  </table>
@endsection

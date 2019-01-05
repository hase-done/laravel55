@extends('layouts.admin')

@section('title', 'カード削除')

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
    </tr>

    <tr>
      <td>{{$card->name}}</td>
      <td>{{$card->type}}</td>
      <td>{{$card->description}}</td>
      <td>{{$card->created_at}}</td>
      <td>{{$card->updated_at}}</td>
      <td><a href="/cards/show/{{$card->id}}">詳細</a></td>
      <td><a href="/cards/edit/{{$card->id}}">編集</a></td>
      <td>
        <form method="POST" action="/cards/del/{{$card->id}}">
          {{ csrf_field() }}
          <input type="submit" value="削除する">
        </form>
      </td>
    </tr>
  </table>
@endsection

<h1>カード 一覧</h1>
<a href="/cards/">一覧</a>
<a href="/cards/add">新規登録</a>

@foreach ($cards as $card)
  @if ($loop->first)
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
  @endif
      <tr>
        <td>{{$card['name']}}</td>
        <td>{{$card['type']}}</td>
        <td>{{$card['description']}}</td>
        <td>{{$card['created_at']}}</td>
        <td>{{$card['updated_at']}}</td>
        <td><a href="/cards/show/{{$card['id']}}">詳細</a></td>
        <td><a href="/cards/edit/{{$card['id']}}">編集</a></td>
        <td><a href="/cards/del/{{$card['id']}}">削除</a></td>
      </tr>
  @if ($loop->last)
    </table>
  @endif
@endforeach

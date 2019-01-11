@extends('layouts.admin')

@section('title', 'カード新規登録')

@section('content')
  <table>
    <form action="/cards/add" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <tr>
        <th>
          名前
        </th>
        <td>
          <input type="text" name="name" value="{{old('name')}}">
        </td>
      </tr>

      <tr>
        <th>
          タイプ
        </th>
        <td>
          <input type="text" name="type" value="{{old('type')}}">
        </td>
      </tr>

      <tr>
        <th>
          説明
        </th>
        <td>
          <input type="text" name="description" value="{{old('description')}}">
        </td>
      </tr>

      <tr>
        <th>
          画像
        </th>
        <td>
          <input type="file" name="image_name">
        </td>
      </tr>

      <tr>
        <th>
        </th>
        <td>
          <input type="submit" value="登録する">
        </td>
      </tr>
    </form>
  </table>
@endsection

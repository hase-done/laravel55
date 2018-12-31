hello index.blade.php

<p>msg={{$msg}}</p>
<form method="POST" action="/hello">
  {{ csrf_field() }}
  <input type="text" name="msg">
  <input type="submit">
</form>
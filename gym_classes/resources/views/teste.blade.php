
<form action="/teste" method="POST">
  <center><input type="text" name="ID_Search_change" placeholder="ID do Atleta"></center>
  <br>
  <input name="_method" type="hidden" value="POST">
  <input type="submit" value = "Pesquisar">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
</form>
<br><br>

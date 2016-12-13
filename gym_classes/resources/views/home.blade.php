@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>Marcação de aulas</center></div>
                <div class="panel-body">
                  <table style="width:100%">
                    <tr>
                      <th><center>Data</center></th>
                      <th><center>Dia da semana</center></th>
                      <th><center>Hora</center></th>
                      <th><center>Marcar aula</center></th>
                      <th><center>Estado</center></th> <!--AQUI VAI CONSULTAR A BASE DE DADOS E INDICAR EM QUE HORARIO SE INSCREVEU OU SE AINDA NAO ESTA INSCRITO EM NENHM-->
                    </tr>
                  @foreach ($curent_classes as $curent_classe)
                    <tr>
                      <td><center>{{ $curent_classe->current_classes_date }}</center></td>
                      <td><center>{{ $curent_classe->day_of_week }}</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">{{ $curent_classe->current_classes_hours }}</option>
                          <option value="11">11</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select></center>
                      </td>
                      <td><center><button type="submit" class="btn btn-primary">Marcar</button></center></td>
                      <td><center>

                      </center></td>
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

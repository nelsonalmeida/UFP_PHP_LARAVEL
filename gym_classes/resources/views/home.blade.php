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
                  <form action="/home/create_booking" method="POST">
                  @foreach ($curent_classes as $curent_classe)
                    <tr>
                      <td><center><name="data" id="data"> {{ $curent_classe->current_classes_date }}</></center></td>
                      <td><center><name="dia" id="dia">{{ $curent_classe->day_of_week }}</center></td>
                      <td><center>
                        <select name="hora">
                          @if ($curent_classe->current_classes_hours != "")
                              @foreach(explode(' ', $curent_classe->current_classes_hours) as $hours)
                                <option>  {{ $hours }} </option>
                              @endforeach
                          @endif
                        </select></center>
                      </td>
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Marcar</button></center></td>
                      <td><center>
                      </center></td>
                    </tr>
                    @endforeach
                  </form>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

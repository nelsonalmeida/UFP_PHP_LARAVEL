@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>{{ trans('homeTrans.title') }}</center></div>
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
                  <form action=/home/en/create_booking" method="POST">
                    <tr>
                      <td><center>  <input name="data" type="hidden" value="{{ $curent_classe->current_classes_date }}">{{ $curent_classe->current_classes_date }}</center></td>
                      <td><center>  <input name="dia" type="hidden" value="{{ $curent_classe->day_of_week }}">{{ $curent_classe->day_of_week }}</center></td>
                      <td><center>

                          @if ($curent_classe->current_classes_hours != "")
                          <select name="hora">
                              @foreach(explode(' ', $curent_classe->current_classes_hours) as $hours)
                                <option>  {{ $hours }} </option>
                              @endforeach

                        </select></center>
                      </td>
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Marcar</button></center></td>
                      <td><center>
                      </center></td>
                      @endif
                    </tr>
                    </form>
                    @endforeach

                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection

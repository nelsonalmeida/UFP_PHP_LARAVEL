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
                      <th><center>{{ trans('homeTrans.date') }}</center></th>
                      <th><center>{{ trans('homeTrans.day_of_week') }}</center></th>
                      <th><center>{{ trans('homeTrans.hours') }}</center></th>
                      <th><center>{{ trans('homeTrans.mark_class') }}</center></th>
                      <th><center>{{ trans('homeTrans.state') }}</center></th> <!--AQUI VAI CONSULTAR A BASE DE DADOS E INDICAR EM QUE HORARIO SE INSCREVEU OU SE AINDA NAO ESTA INSCRITO EM NENHM-->
                    </tr>

                  @foreach ($curent_classes as $curent_classe)
                  <form action="/home/en/create_booking" method="POST">
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
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('homeTrans.mark') }}</button></center></td>
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

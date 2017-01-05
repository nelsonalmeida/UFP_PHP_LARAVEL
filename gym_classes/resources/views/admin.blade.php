@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>{{ trans('adminTrans.title') }}</center></div>

                <!--
                Edição das datas de marcação de aulas
                ________________________________________________________________
                ________________________________________________________________
              -->
              <h1><center>{{ trans('adminTrans.edit_schedule') }}</center></h1>
                <div class="panel-body">
                  <table style="width:100%">
                    <tr>
                      <th><center>{{ trans('adminTrans.date') }}</center></th>
                      <th><center>{{ trans('adminTrans.hour') }}</center></th>
                    </tr>

                    <tr>
                      <form action="/home/en/update_monday" method="POST">
                      <td><center><input type="text"name="current_classes_monday_date" id="current_classes_monday_date" placeholder="{{ trans('adminTrans.monday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_monday_hours" id="current_classes_monday_hours"  placeholder="{{ trans('adminTrans.hours_for_monday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_tuesday" method="POST">
                      <td><center><input type="text"name="current_classes_tuesday_date" id="current_classes_tuesday_date" placeholder="{{ trans('adminTrans.tuesday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_tuesday_hours" id="current_classes_tuesday_hours"  placeholder="{{ trans('adminTrans.hours_for_tuesday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_wednesday" method="POST">
                      <td><center><input type="text"name="current_classes_wednesday_date" id="current_classes_wednesday_date" placeholder="{{ trans('adminTrans.wednesday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_wednesday_hours" id="current_classes_wednesday_hours"  placeholder="{{ trans('adminTrans.hours_for_wednesday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_thursday" method="POST">
                      <td><center><input type="text"name="current_classes_thursday_date" id="current_classes_thursday_date" placeholder="{{ trans('adminTrans.thursday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_thursday_hours" id="current_classes_thursday_hours"  placeholder="{{ trans('adminTrans.hours_for_thursday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_friday" method="POST">
                      <td><center><input type="text"name="current_classes_friday_date" id="current_classes_friday_date" placeholder="{{ trans('adminTrans.friday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_friday_hours" id="current_classes_friday_hours"  placeholder="{{ trans('adminTrans.hours_for_friday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_saturday" method="POST">
                      <td><center><input type="text"name="current_classes_saturday_date" id="current_classes_saturday_date" placeholder="{{ trans('adminTrans.saturday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_saturday_hours" id="current_classes_saturday_hours"  placeholder="{{ trans('adminTrans.hours_for_saturday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/en/update_sunday" method="POST">
                      <td><center><input type="text"name="current_classes_sunday_date" id="current_classes_sunday_date" placeholder="{{ trans('adminTrans.sunday') }}"></center></td>
                      <td><center><input type="text" name="current_classes_sunday_hours" id="current_classes_sunday_hours"  placeholder="{{ trans('adminTrans.hours_for_sunday') }}"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.update') }}</button></center></td>
                      </form>
                    </tr>
                  </table>
                </div>

                <!--
                Pesquisar pessoas na base de dados
                ________________________________________________________________
                ________________________________________________________________
              -->
              <br><br>
              <h1><center>{{ trans('adminTrans.search_person') }}</center></h1>

              <br>

              <form action="/home/en/person_search" method="POST">
              <td><center><input type="text" name="id_person_search" id="id_person_search" placeholder="{{ trans('adminTrans.athlete_id') }}"></center></td>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
              <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.search') }}</button></center></td>
              </form>

                  <!--Deve inprimir o valor retornado -->

              <!--EXEMPLO COM GET
              <br><br>
              <form action="/home/person_search/" method="POST">
              <td><center><input type="text" name="id_person_search" id="id_person_search" placeholder="id do atleta"></center></td>
              <input type="hidden" name="_method" value="GET">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
              <td><center><button type="submit" class="btn btn-primary">Pesquisar</button></center></td>
              </form>
              -->


              <br><br>
              <form action="/home/pt/list_persons" method="GET">
                  <td><center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.list_all') }}</button></center></td>
              </form>

              <!--
              Edição de pessoas na base de dados
              ________________________________________________________________
              ________________________________________________________________
              -->
              <br><br>
              <h1><center>{{ trans('adminTrans.edit_person') }}</center></h1>

              <br>

              <form action="/home/en/person_edite" method="POST">
                <tr>
                  <td><center>{{ trans('adminTrans.id_person_edit') }}:</center></td>
                  <td><center><input type="text" name="id_person_change" placeholder=""></center></td>
                  <td><center>{{ trans('adminTrans.new_name') }}:</center></td>
                  <td><center><input type="text" name="name_person_change" placeholder=""></center></td>
                  <td><center>{{ trans('adminTrans.new_email') }}:</center></td>
                  <td><center><input type="text" name="email_person_change" placeholder=""></center></td>
                  <td><center>{{ trans('adminTrans.admin') }}:</center></td>
                  <td><center><input type="text" name="admin_person_change" placeholder=""></center></td>
                </tr>
                <br>
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.insert_change') }}</button></center>
              </form>


              <!--
              Apagar pessoas da base de dados
              ________________________________________________________________
              ________________________________________________________________
            -->
            <br><br>
            <h1><center>{{ trans('adminTrans.person_delete') }}</center></h1>

            <form action="/home/en/person_delete" method="POST">
              <center><input type="text" name="id_delete_user" placeholder="{{ trans('adminTrans.athlete_id') }}"></center>
              <input name="_token" type="hidden" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="DELETE">
              <br>
              <center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.delete') }}</button></center>
              <br>
            </form>




            <!--
            Procurar alunos na aula
            ________________________________________________________________
            ________________________________________________________________
          -->
          <br><br>
          <h1><center>{{ trans('adminTrans.search_classes') }}</center></h1>

          <form action="/home/en/athletes_in_class" method="POST">
            <center><input type="text" name="date" placeholder="{{ trans('adminTrans.date_class') }}"></center>
            <center><input type="text" name="hour" placeholder="{{ trans('adminTrans.hour_class') }}"></center>
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <br>
            <center><button type="submit" class="btn btn-primary">{{ trans('adminTrans.search') }}</button></center>
            <br>
          </form>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection

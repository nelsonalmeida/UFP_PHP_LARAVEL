@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>ADMINISTRADOR - PAINEL DE EDIÇÃO</center></div>

                <!--
                Edição das datas de marcação de aulas
                ________________________________________________________________
                ________________________________________________________________
              -->
              <h1><center>Editar Campos do Horario</center></h1>
                <div class="panel-body">
                  <table style="width:100%">
                    <tr>
                      <th><center>Data (Formato: 01.01.17)</center></th>
                      <th><center>Hora (Formato: 10:00 11:30 12:00 )</center></th>
                    </tr>

                    <tr>
                      <form action="/home/date/update/monday" method="POST">
                      <td><center><input type="text"name="current_classes_monday_date" id="current_classes_monday_date" placeholder="Segunda-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_monday_hours" id="current_classes_monday_hours"  placeholder="Horas para 2ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/tuesday" method="POST">
                      <td><center><input type="text"name="current_classes_tuesday_date" id="current_classes_tuesday_date" placeholder="Terça-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_tuesday_hours" id="current_classes_tuesday_hours"  placeholder="Horas para 3ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/wednesday" method="POST">
                      <td><center><input type="text"name="current_classes_wednesday_date" id="current_classes_wednesday_date" placeholder="Quarta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_wednesday_hours" id="current_classes_wednesday_hours"  placeholder="Horas para 4ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/thursday" method="POST">
                      <td><center><input type="text"name="current_classes_thursday_date" id="current_classes_thursday_date" placeholder="Quinta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_thursday_hours" id="current_classes_thursday_hours"  placeholder="Horas para 5ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/friday" method="POST">
                      <td><center><input type="text"name="current_classes_friday_date" id="current_classes_friday_date" placeholder="Sexta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_friday_hours" id="current_classes_friday_hours"  placeholder="Horas para 6ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/saturday" method="POST">
                      <td><center><input type="text"name="current_classes_saturday_date" id="current_classes_saturday_date" placeholder="Sabado"></center></td>
                      <td><center><input type="text" name="current_classes_saturday_hours" id="current_classes_saturday_hours"  placeholder="Horas para sabado"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/date/update/sunday" method="POST">
                      <td><center><input type="text"name="current_classes_sunday_date" id="current_classes_sunday_date" placeholder="Domingo"></center></td>
                      <td><center><input type="text" name="current_classes_sunday_hours" id="current_classes_sunday_hours"  placeholder="Horas para domingo"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                  </table>
                </div>

                <!--
                Edição de pessoas na base de dados
                ________________________________________________________________
                ________________________________________________________________
              -->
              <br><br>
              <h1><center>Pessoa a Editar</center></h1>

              <br>

              <form action="/home/person/update" method="POST">
              <td><center><input type="text"name="id_person_change" id="id_person_change" placeholder="id do atleta"></center></td>
                  <input name="_token" type="hidden" value="{{ csrf_token() }}">
                  <br>
              <td><center><button type="submit" class="btn btn-primary">Pesquisar</button></center></td>
              </form>

                  <!--Deve inprimir o valor retornado -->

              <br><br>













              <form action="admin.blade.php" name="Athlete_edit_form">
                <tr>
                  <td><center>Novo Nome:</center></td>
                  <td><center><input type="text" name="name_Search_change" placeholder=""></center></td>
                  <td><center>Novo Email:</center></td>
                  <td><center><input type="text" name="email_Search_change" placeholder=""></center></td>
                  <td><center>Nova Password:</center></td>
                  <td><center><input type="text" name="password_Search_change" placeholder=""></center></td>
                </tr>
                <br>
                  <center><button type="submit" class="btn btn-primary">Inserir alterações</button></center>
              </form>

              <!--
              Apagar pessoas da base de dados
              ________________________________________________________________
              ________________________________________________________________
            -->
            <br><br>
            <h1><center>Pessoa a Apagar</center></h1>
            <form action="/home/person/delete" method="POST">
              <center><input type="text" name="id_delete_user" placeholder="ID do Atleta"></center>
              <input name="_token" type="hidden" value="{{ csrf_token() }}">
              <br>
              <center><button type="submit" class="btn btn-primary">Apagar</button></center>
              <br>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

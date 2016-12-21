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
                      <form action="/home/update_monday" method="POST">
                      <td><center><input type="text"name="current_classes_monday_date" id="current_classes_monday_date" placeholder="Segunda-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_monday_hours" id="current_classes_monday_hours"  placeholder="Horas para 2ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_tuesday" method="POST">
                      <td><center><input type="text"name="current_classes_tuesday_date" id="current_classes_tuesday_date" placeholder="Terça-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_tuesday_hours" id="current_classes_tuesday_hours"  placeholder="Horas para 3ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_wednesday" method="POST">
                      <td><center><input type="text"name="current_classes_wednesday_date" id="current_classes_wednesday_date" placeholder="Quarta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_wednesday_hours" id="current_classes_wednesday_hours"  placeholder="Horas para 4ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_thursday" method="POST">
                      <td><center><input type="text"name="current_classes_thursday_date" id="current_classes_thursday_date" placeholder="Quinta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_thursday_hours" id="current_classes_thursday_hours"  placeholder="Horas para 5ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_friday" method="POST">
                      <td><center><input type="text"name="current_classes_friday_date" id="current_classes_friday_date" placeholder="Sexta-Feira"></center></td>
                      <td><center><input type="text" name="current_classes_friday_hours" id="current_classes_friday_hours"  placeholder="Horas para 6ª feira"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_saturday" method="POST">
                      <td><center><input type="text"name="current_classes_saturday_date" id="current_classes_saturday_date" placeholder="Sabado"></center></td>
                      <td><center><input type="text" name="current_classes_saturday_hours" id="current_classes_saturday_hours"  placeholder="Horas para sabado"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
                      </form>
                    </tr>
                    <tr>
                      <form action="/home/update_sunday" method="POST">
                      <td><center><input type="text"name="current_classes_sunday_date" id="current_classes_sunday_date" placeholder="Domingo"></center></td>
                      <td><center><input type="text" name="current_classes_sunday_hours" id="current_classes_sunday_hours"  placeholder="Horas para domingo"></center></td>
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="PUT">
                      <td><center><button type="submit" class="btn btn-primary">Atualizar</button></center></td>
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
              <h1><center>Pesquisar Pessoa</center></h1>

              <br>

              <form action="/home/person_search/" method="GET">
              <td><center><input type="text" name="id_person_search" id="id_person_search" placeholder="id do atleta"></center></td>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
              <td><center><button type="submit" class="btn btn-primary">Pesquisar</button></center></td>
              </form>

                  <!--Deve inprimir o valor retornado -->

              <br><br>
              <form action="/home/list_persons" method="GET">
                  <td><center><button type="submit" class="btn btn-primary">Listar Todas</button></center></td>
              </form>

              <!--
              Edição de pessoas na base de dados
              ________________________________________________________________
              ________________________________________________________________
              -->
              <br><br>
              <h1><center>Editar Pessoa</center></h1>

              <br>

              <form action="/home/person_edite" method="POST">
                <tr>
                  <td><center>ID da pessoa a editar:</center></td>
                  <td><center><input type="text" name="id_person_change" placeholder=""></center></td>
                  <td><center>Novo Nome:</center></td>
                  <td><center><input type="text" name="name_person_change" placeholder=""></center></td>
                  <td><center>Novo Email:</center></td>
                  <td><center><input type="text" name="email_person_change" placeholder=""></center></td>
                  <td><center>Administrador (1 - Sim / 0 - Não):</center></td>
                  <td><center><input type="text" name="admin_person_change" placeholder=""></center></td>
                </tr>
                <br>
                  <input type="hidden" name="_method" value="PUT">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
              <input type="hidden" name="_method" value="DELETE">
              <br>
              <center><button type="submit" class="btn btn-primary">Apagar</button></center>
              <br>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

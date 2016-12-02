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
                      <th><center>Data (Formato: 01.01.2017)</center></th>
                      <th><center>Hora</center></th>
                    </tr>
                    <tr>
                      <td><center><input type="text" name="monday_date" placeholder="Segunda-Feira"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_monday" value="10">10h
                          <input type="checkbox" name="hours_monday" value="11">11h
                          <input type="checkbox" name="hours_monday" value="14">14h
                          <input type="checkbox" name="hours_monday" value="15">15h
                          <input type="checkbox" name="hours_monday" value="16">16h
                          <input type="checkbox" name="hours_monday" value="17">17h
                          <input type="checkbox" name="hours_monday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>

                    </tr>
                    <tr>
                      <td><center><input type="text" name="tuesday_date" placeholder="Terça-Feira"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_tuesday" value="10">10h
                          <input type="checkbox" name="hours_tuesday" value="11">11h
                          <input type="checkbox" name="hours_tuesday" value="14">14h
                          <input type="checkbox" name="hours_tuesday" value="15">15h
                          <input type="checkbox" name="hours_tuesday" value="16">16h
                          <input type="checkbox" name="hours_tuesday" value="17">17h
                          <input type="checkbox" name="hours_tuesday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>
                    </tr>
                    <tr>
                      <td><center><input type="text" name="wednesday_date" placeholder="Quarta-Feira"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_wednesday" value="10">10h
                          <input type="checkbox" name="hours_wednesday" value="11">11h
                          <input type="checkbox" name="hours_wednesday" value="14">14h
                          <input type="checkbox" name="hours_wednesday" value="15">15h
                          <input type="checkbox" name="hours_wednesday" value="16">16h
                          <input type="checkbox" name="hours_wednesday" value="17">17h
                          <input type="checkbox" name="hours_wednesday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>
                    </tr>
                    <tr>
                      <td><center><input type="text" name="thursday_date" placeholder="Quinta-Feira"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_thursday" value="10">10h
                          <input type="checkbox" name="hours_thursday" value="11">11h
                          <input type="checkbox" name="hours_thursday" value="14">14h
                          <input type="checkbox" name="hours_thursday" value="15">15h
                          <input type="checkbox" name="hours_thursday" value="16">16h
                          <input type="checkbox" name="hours_thursday" value="17">17h
                          <input type="checkbox" name="hours_thursday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>
                    </tr>
                    <tr>
                      <td><center><input type="text" name="friday_date" placeholder="Sexta-Feira"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_friday" value="10">10h
                          <input type="checkbox" name="hours_friday" value="11">11h
                          <input type="checkbox" name="hours_friday" value="14">14h
                          <input type="checkbox" name="hours_friday" value="15">15h
                          <input type="checkbox" name="hours_friday" value="16">16h
                          <input type="checkbox" name="hours_friday" value="17">17h
                          <input type="checkbox" name="hours_friday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>
                    </tr>
                    <tr>
                      <td><center><input type="text" name="saturday_date" placeholder="Sabado"></center></td>
                      <td><center>
                        <form action="">
                          <input type="checkbox" name="hours_saturday" value="10">10h
                          <input type="checkbox" name="hours_saturday" value="11">11h
                          <input type="checkbox" name="hours_saturday" value="14">14h
                          <input type="checkbox" name="hours_saturday" value="15">15h
                          <input type="checkbox" name="hours_saturday" value="16">16h
                          <input type="checkbox" name="hours_saturday" value="17">17h
                          <input type="checkbox" name="hours_saturday" value="18">18h
                        </form>
                      </center></td>
                      <td><center><button onclick="myFunction()">Atualizar</button></center></td>
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

              <form action="admin.blade.php" name="Search_Athlete_edit" method="POST">
                <center><input type="text" name="ID_Search_change" placeholder="ID do Atleta"></center>
                <br>
                <center><button onclick="search_athlete_change()">Pesquisar</button></center>
              </form>
              <br><br>





              <!--CODIGO PHP QUE TENHO A PARTE E NAO ESTA A FUNCIONAR-->






              <form action="admin.blade.php" name="Athlete_edit_form">
                <tr>
                  <td><center>Novo Nome:</center></td>
                  <td><center><input type="text" name="name_Search_change" placeholder=""></center></td>
                  <td><center>Novo Email:</center></td>
                  <td><center><input type="text" name="email_Search_change" placeholder=""></center></td>
                  <td><center>Nova Password:</center></td>
                  <td><center><input type="text" name="password_Search_change" placeholder=""></center></td>
                </tr>
                  <<center><button onclick="insert_changes()">Inserir alterações</button></center>
              </form>

              <!--
              Apagar pessoas da base de dados
              ________________________________________________________________
              ________________________________________________________________
            -->
            <br><br>
            <h1><center>Pessoa a Apagar</center></h1>

            <center><input type="text" name="ID_Search_change" placeholder="ID do Atleta"></center>
            <br>
            <center><button onclick="delete_person()">Apagar</button></center>
            <br>

            </div>
        </div>
    </div>
</div>
@endsection

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
                    <tr>
                      <td><center>21.11.16</center></td>
                      <td><center>Segunda-Feira</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                          <option value="14">14h</option>
                          <option value="15">15h</option>
                          <option value="16">16h</option>
                          <option value="17">17h</option>
                          <option value="18">18h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                      <td><center>

                        <?php
                          //Base de dados. Se tiver aula aparece informacao
                          //quero que selecione a hora da marcação ja efetuada para aparece. Se nao tiver marcação não aparece nada

                          //$id_athlete = Auth::user()->id;

                          //$hour_booking = DB::table('classes_booking')
                          //->where('year', '=', 2016),
                          //->and('mouth' , '=', 11),
                          //->and('day' , '=', 30),
                          //->and('athlete' '=', $id_athlete);

                          //$hour_booking = DB::table('classes_booking')->where('year', '=', 2016, 'and', 'mouth' , '=', 11, 'and', 'day' , '=', 30, 'and', 'athlete' '=', $id_athlete);
                          //echo $hour_booking;
                        ?>

                      </center></td>
                    </tr>
                    <tr>
                      <td><center>22.11.16</center></td>
                      <td><center>Terça-Feira</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                          <option value="14">14h</option>
                          <option value="15">15h</option>
                          <option value="16">16h</option>
                          <option value="17">17h</option>
                          <option value="18">18h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                    </tr>
                    <tr>
                      <td><center>23.11.16</center></td>
                      <td><center>Quarta-Feira</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                          <option value="14">14h</option>
                          <option value="15">15h</option>
                          <option value="16">16h</option>
                          <option value="17">17h</option>
                          <option value="18">18h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                    </tr>
                    <tr>
                      <td><center>24.11.16</center></td>
                      <td><center>Quinta-Feira</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                          <option value="14">14h</option>
                          <option value="15">15h</option>
                          <option value="16">16h</option>
                          <option value="17">17h</option>
                          <option value="18">18h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                    </tr>
                    <tr>
                      <td><center>25.11.16</center></td>
                      <td><center>Sexta-Feira</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                          <option value="14">14h</option>
                          <option value="15">15h</option>
                          <option value="16">16h</option>
                          <option value="17">17h</option>
                          <option value="18">18h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                    </tr>
                    <tr>
                      <td><center>26.11.16</center></td>
                      <td><center>Sabado</center></td>
                      <td><center>
                        <select name="hora">
                          <option value="10">10h</option>
                          <option value="11">11h</option>
                        </select></center>
                      </td>
                      <td><center><button onclick="myFunction()">Marcar</button></center></td>
                    </tr>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

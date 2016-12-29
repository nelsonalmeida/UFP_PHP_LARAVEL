@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>LISTAGEM DOS UTILIZADORES</center></div>

                  ID / Nome / Email / Admin (1 - SIM / 2 - NAO)
                  @php
                  echo "<br><br>";
                  foreach ($users as $user) {
                      echo $user->id;
                      echo " / ";
                      echo $user->name;
                      echo " / ";
                      echo $user->email;
                      echo " / ";
                      echo $user->admin;
                      echo "<br>";
                  }
                  @endphp
        </div>
      </div>
    </div>
</div>
@endsection

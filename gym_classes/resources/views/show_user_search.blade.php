@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center>UTILIZADOR PESQUISADO</center></div>

                  ID = @php echo $users->id; @endphp
                  <br>
                  NOME = @php echo $users->name; @endphp
                  <br>
                  EMAIL = @php echo $users->email; @endphp
                  <br>
                  ADMINISTRADOR = @php if($users->admin == 1){ echo "SIM";}else{echo "NÃO";} @endphp
            </div>
      </div>
    </div>
</div>
@endsection

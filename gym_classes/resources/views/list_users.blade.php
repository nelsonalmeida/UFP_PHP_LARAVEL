@extends('layouts.app')

@section('content')

<h1>Listagem dos clientes</h1>
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

@endsection

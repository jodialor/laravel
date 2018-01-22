@extends('main')

@section('title', '| About')

@section('content')
      <div class="row">
        <div class="col-md-12">

          <h1> Sobre {{ $data['fullname'] }} </h1>
          <h3> E-mail: {{ $data['email'] }} </h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
@endsection

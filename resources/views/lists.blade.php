@extends('layouts.template3')

@section('principal')
Listado de equipos

<ul>
@foreach($list as $equipo)
<li>
      {{ $equipo->EqLocal }}
</li>
@endforeach
</ul>
 {{ $list->links() }}

@endsection

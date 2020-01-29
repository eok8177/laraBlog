@extends('admin.layout')

@section('content')
<h2 class="page-header">Block</h2>

{!! Form::open(['route' => ['admin.block.store'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
  @include('admin.block.form')
{!! Form::close() !!}

@endsection
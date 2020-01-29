@extends('admin.layout')

@section('content')
<h2 class="page-header">Block: <small>{{ $block->title }}</small></h2>

{!! Form::open(['route' => ['admin.block.update', $block->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
  @include('admin.block.form')
{!! Form::close() !!}

@endsection
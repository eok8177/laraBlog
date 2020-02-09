@extends('admin.layout')

@section('content')
<div class="page-header row justify-content-between">
  <h5>Block: <small>{{ $block->title }}</small></h5>
  <a href="{{ route('admin.block.setting', ['block'=>$block->id]) }}" class="btn btn-sm btn-outline-secondary" title="Setting">Setting</a>
</div>

{!! Form::open(['route' => ['admin.block.update', $block->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
  @include('admin.block.form')
{!! Form::close() !!}

@endsection
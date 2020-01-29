@extends('admin.layout')

@section('content')

<div class="page-header row justify-content-between">
  <h5>Block`s</h5>
  <a href="{{ route('admin.block.create') }}" class="btn btn-light"><i class="fa fa-plus-square"></i> @lang('message.create')</a>
</div>

<div class="d-flex justify-content-center">
  <form class="input-group mb-3" action="{{ route('admin.block.index') }}" method="get" style="max-width: 600px;">
    <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{$search}}">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit" >Search</button>
    </div>
  </form>
</div>

<div class="position-relative">
  <div class="table-responsive">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Slug</th>
          <th scope="col"></th>
        </tr>
      </thead>
      @foreach($blocks as $block)
        <tr>
          <td><a href="{{ route('admin.block.edit', ['block'=>$block->id]) }}" class="btn">{{$block->title}}</a></td>
          <td><a href="{{ route('admin.block.edit', ['block'=>$block->id]) }}" class="btn">{{$block->slug}}</a></td>
          <td class="text-center">
            <a href="{{ route('admin.block.edit', ['block'=>$block->id]) }}" class="btn fa fa-pencil" title="Edit"></a>
            <a href="{{ route('admin.block.destroy', ['block'=>$block->id]) }}" class="btn fa fa-trash-o delete" title="Delete"></a>
          </td>
        </tr>

      @endforeach
    </table>
  </div>
</div>


@endsection

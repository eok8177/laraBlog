@extends('admin.layout')

@section('content')

<div class="page-header row justify-content-between">
  <h5>Page`s</h5>
  <a href="{{ route('admin.page.create') }}" class="btn btn-light"><i class="fa fa-plus-square"></i> @lang('message.create')</a>
</div>

<div class="d-flex justify-content-center">
  <form class="input-group mb-3" action="{{ route('admin.page.index') }}" method="get" style="max-width: 600px;">
    <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{$search}}">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary btn-sm" type="submit" >Search</button>
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
      @foreach($pages as $page)
        <tr>
          <td><a href="{{ route('admin.page.edit', ['page'=>$page->id]) }}" class="btn">{{$page->title}}</a></td>
          <td><a href="{{ route('admin.page.edit', ['page'=>$page->id]) }}" class="btn">{{$page->slug}}</a></td>
          <td class="text-center">
            <a href="{{ route('admin.page.edit', ['page'=>$page->id]) }}" class="btn fa fa-pencil" title="Edit"></a>
            <a href="{{ route('admin.page.destroy', ['page'=>$page->id]) }}" class="btn fa fa-trash-o delete" title="Delete"></a>
          </td>
        </tr>

      @endforeach
    </table>
  </div>
</div>


@endsection

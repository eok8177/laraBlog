@extends('admin.layout')

@section('content')
<div class="page-header row justify-content-between">
  <h5>Block: <small>{{ $block->title }}</small></h5>
  <a href="{{ route('admin.block.edit', ['block'=>$block->id]) }}" class="btn btn-sm btn-outline-secondary" title="Edit">Edit</a>
</div>




{!! Form::open(['route' => ['admin.block.update', $block->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
  <div class="form-group">
    <label for="name">{{Lang::get('message.title')}}</label>
    {!! Form::text('title', $block->title, ['class' => 'form-control']) !!}
  </div>

  <hr>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="type_1" name="type" value="html" class="custom-control-input" {{$block->type == 'html' ? 'checked' : ''}}>
    <label class="custom-control-label" for="type_1">HTML type of block</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="type_2" name="type" value="json" class="custom-control-input" {{$block->type == 'json' ? 'checked' : ''}}>
    <label class="custom-control-label" for="type_2">JSON type of block</label>
  </div>

  <hr>

@php
    $key = 0;
@endphp



  <div class="row">
    <div class="col-md-6">
        <div class="form-group">
          <label for="name">{{Lang::get('message.content')}}</label>
          <textarea name="text" rows="18" class="form-control">{{$block->text}}</textarea>
        </div>
        <p>Paste macros to HTML code <b>Must equail Field Name</b> like: {text_1}</p>
    </div>


    <div class="col-md-6">
      <input type="hidden" name="config" value="">
      @foreach( (array) json_decode($block->config) as $key => $item)
      <div class="row item-block border-bottom pb-2" data-id="{{$key}}">
        <div class="col-md-5">
          <div class="form-group">
            <label>Field Type <small>(image or text)</small></label>
            <select class="form-control" name="config[{{$key}}][type]">
              <option value="text" {{ $item->type == 'text' ? 'selected' : '' }}>Text</option>
              <option value="file" {{ $item->type == 'file' ? 'selected' : '' }}>Image</option>
            </select>
          </div>
        </div>

        <div class="col-md-6">
          <label>Field Name <small>must equail to html</small></label>
          <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text" >{</span></div>
            <input type="text" class="form-control" placeholder="Field name" name="config[{{$key}}][name]" value="{{ $item->name }}">
            <div class="input-group-prepend"><span class="input-group-text" >}</span></div>
          </div>
        </div>
        <input type="hidden" name="config[{{$key}}][data]" value="{{ $item->data }}">
        <div class="col-md-1"><button type="button" class="delete-item btn btn-sm btn-outline-danger mt-4">x</button></div>
      </div>

      @endforeach

      <button type="button" class="add-item btn btn-sm btn-outline-secondary mt-2">Add Field</button>

    </div>
  </div>



  <div class="form-group">
    <input type="submit" value="{{Lang::get('message.save')}}" class="btn btn-secondary">
  </div>


{!! Form::close() !!}

<div id="cloneBlock" class="d-none">
  <div class="row item-block border-bottom pb-2">
    <div class="col-md-5">
      <div class="form-group">
        <label>Field Type <small>(image or text)</small></label>
        <select class="form-control" name="type">
          <option value="text" selected>Text</option>
          <option value="file">Image</option>
        </select>
      </div>
    </div>

    <div class="col-md-6">
      <label>Field Name <small>(must equail to html)</small></label>
      <div class="input-group">
        <div class="input-group-prepend"><span class="input-group-text" >{</span></div>
        <input type="text" class="form-control" placeholder="Field name" name="name">
        <div class="input-group-prepend"><span class="input-group-text" >}</span></div>
      </div>
    </div>
    <input type="hidden" name="data">
    <div class="col-md-1"><button type="button" class="delete-item btn btn-sm btn-outline-danger mt-4">x</button></div>
  </div>
</div>

@endsection

@push('scripts')
<script>
  $(function () {
    $('body').on('click', 'button.delete-item',function(e){
      e.preventDefault();
      let block = $(this).closest('.item-block');
      block.remove();
    });

    let block = $('#cloneBlock').find('.item-block');
    let key = {{$key}};

    $('button.add-item').on('click',function(e){
      e.preventDefault();
      let item = block.clone();
      key++;
      item.find('[name=name]').attr('name','config['+key+'][name]')
      item.find('[name=type]').attr('name','config['+key+'][type]')
      item.find('[name=data]').attr('name','config['+key+'][data]')
      $(this).before(item);
    });

  });
</script>
@endpush
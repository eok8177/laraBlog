<div class="form-group">
  <label for="name">{{Lang::get('message.title')}}</label>
  {!! Form::text('title', $block->title, ['class' => 'form-control']) !!}
</div>

@if($block->type == 'html')
<div class="form-group">
  <label for="name">{{Lang::get('message.content')}}</label>
  {!! Form::textarea('text', $block->text, ['class' => 'form-control editor']) !!}
</div>
@endif
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




@if($block->type == 'json' && !empty($block->config))
<div class="row">
  <div class="col-md-6">
    @foreach(json_decode($block->config) as $key => $item)
      <input type="hidden" name="config[{{$key}}][type]" value="{{ $item->type }}">
      <input type="hidden" name="config[{{$key}}][name]" value="{{ $item->name }}">
      <hr>
      <div class="form-group">
        <label>{ {{ $item->name }} }</label>
        @if($item->type == 'file')
          <div class="image-lfm">
            <img id="holder_{{$key}}" class="image-src" style="max-height:60px;" src="{{ $item->data }}">
            <button type="button" data-input="thumbnail_{{$key}}" data-preview="holder_{{$key}}" class="lfm btn btn-sm btn-outline-primary">Select new image</button>
            <button type="button" class="delete-image btn btn-sm btn-outline-danger {{($item->data) ? '' : 'hidden'}}">Delete</button>
            <input id="thumbnail_{{$key}}" class="image-input form-control" type="hidden" name="config[{{$key}}][data]" value="{{ $item->data }}">
          </div>
        @endif
        @if($item->type == 'text')
          <textarea type="text" class="form-control" rows="1" name="config[{{$key}}][data]">{{ $item->data }}</textarea>
        @endif

      </div>
    @endforeach
    <hr>
  </div>
  <div class="col-md-6">
    <h5>HTML code of block</h5>
    <pre class="bg-light px-2">
      {{ $block->text }}
    </pre>
  </div>
</div>
@endif


<div class="form-group">
  <input type="submit" value="{{Lang::get('message.save')}}" class="btn btn-secondary">
</div>

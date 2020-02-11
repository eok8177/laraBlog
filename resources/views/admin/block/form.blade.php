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
        <label>
          <button type="button" class="copy-btn btn btn-sm btn-outline-secondary">
            <span class="tooltiptext">Copy to clipboard</span>
            <span class="item">{{ '{'.$item->name.'}' }}</span>
          </button>
          </button>
        </label>
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
    <textarea type="text" class="form-control" rows="16" name="text">{{ $block->text }}</textarea>
  </div>
</div>
@endif


<div class="form-group">
  <input type="submit" value="{{Lang::get('message.save')}}" class="btn btn-secondary">
</div>


@push('scripts')
<script>
$(function () {
  $('.copy-btn').on('click', function(){
    $('.tooltiptext').text('Copy to clipboard');

    let copyText = $(this).find('.item').text();
    let tooltiptext = $(this).find('.tooltiptext');
    let $temp = $("<input>");
    $("body").append($temp);
    $temp.val(copyText).select();
    document.execCommand("copy");
    $temp.remove();

    tooltiptext.text("Copied: "+copyText);

  });
});
</script>
@endpush

@push('styles')
<style>
  .copy-btn {
    position: relative;
    display: inline-block;
  }

  .copy-btn .tooltiptext {
    visibility: hidden;
    width: 140px;
    background-color: #6c757d;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: 0;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .copy-btn .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 30px;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #6c757d transparent transparent transparent;
  }

  .copy-btn:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }
</style>
@endpush
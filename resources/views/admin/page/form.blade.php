<div class="form-group">
  <label for="name">{{Lang::get('message.title')}}</label>
  {!! Form::text('title', $page->title, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  <label for="name">{{Lang::get('message.content')}}</label>
  {!! Form::textarea('text', $page->text, ['class' => 'form-control macro']) !!}

  <div class="py-2">
    <small class="form-text text-muted mr-1">You can use Block`s: </small> 
    @foreach($blocks as $block)
      <button class="macro btn btn-sm btn-outline-secondary mb-2" data-macro="[{{$block->slug}}]">{{$block->title}}</button>
    @endforeach
  </div>
</div>


<div class="form-group">
  <input type="submit" value="{{Lang::get('message.save')}}" class="btn btn-secondary">
</div>


@push('scripts')
<script>
  $(function () {
    $('button.macro').on('click',function(e){
      e.preventDefault();
      let field = $(this).closest('.form-group').find('textarea.macro');
      let text = field.val();
      text = text + ' ' + $(this).attr('data-macro') + ' ';
      field.val(text);
    });
  });
</script>
@endpush
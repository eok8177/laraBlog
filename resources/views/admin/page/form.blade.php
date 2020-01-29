<div class="form-group">
  <label for="name">{{Lang::get('message.title')}}</label>
  {!! Form::text('title', $page->title, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  <label for="name">{{Lang::get('message.content')}}</label>
  {!! Form::textarea('text', $page->text, ['class' => 'form-control editor']) !!}
</div>


<div class="form-group">
  <input type="submit" value="{{Lang::get('message.save')}}" class="btn btn-secondary">
</div>

@extends('layout')


@section('title')
Dummy Text Generator
@stop

@section('content')
<div id="tool">
<h2>Dummy Text Generator</h2><br/>
    <a href="/">Go back</a>
</div>

<div>
      {{ Form::open( array(
          'route' => 'LoremController.create',
          'method' => 'post',
          'id' => 'add-lorem',
          ) ) }}

      <div class="form">
          <div class="input-group">
          <span class="input-group-addon">
              {{ Form::label( 'parNumber', 'How many paragraphs of dummy text do you need to generate?' ) }}
              <br/>
              {{ Form::selectRange('parNumber', 1, 20, 3,
                array(
                  'class' => 'form-control',
                  'id' => 'parNumber',
                  'required' => true,
                )
              ) }}
          </span>
          </div>
             {{ Form::submit( 'Generate!', array(
              'id' => 'submitBtn_lorem',
              'class' => 'btn btn-primary',
          ) ) }}
        </div>
                     
      {{ Form::close() }}

    </div>
<div>
<p id="lorem-result"></p>
          </div>
@stop
@extends('layout')


@section('title')
Dummy Text Generator
@stop

@section('content')
<h2>Dummy Text Generator</h2><br/>
    <a href="/">Back</a>
    <br/><br/>

 
     <div>
      {{ Form::open( array(
          'route' => 'LoremController.create',
          'method' => 'post',
          'id' => 'form-add-lorem',
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
                  'placeholder' => 'Enter Number of paragraphs',
                )
              ) }}
          </div>
          </span>
          <br/>
          {{ Form::submit( 'Generate!', array(
              'id' => 'submitBtn_lorem',
              'class' => 'btn btn-primary',
          ) ) }}
        </div>
                     
      {{ Form::close() }}

    </div>
<div>
            <p id="lorem"></p>
          </div>
@stop
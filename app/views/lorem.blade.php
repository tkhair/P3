@extends('layout')


@section('title')
Dummy Text Generator
@stop

@section('content')
<div class="container">
      {{ Form::open( array(
          'route' => 'LoremController.create',
          'method' => 'post',
          'id' => 'form-add-lorem',
          'role' => 'form',
          ) ) }}
      
      <div class="col-lg-10 col-lg-offset-1">
          <h3 class="text-justify" id="lorem"></h3>          
      </div>

      <div class="form-group col-lg-12">
        {{ Form::label( 'parNumber', 'How many paragraphs of dummy text do you need to generate?' ) }}
        {{ Form::selectRange('parNumber',1 , 50, 
          array(
            'class' => 'form-control',
            'id' => 'parNumber',
            'required' => true,
            'placeholder' => 'Enter Number of paragraphs',
            'maxlength' => 10,
          )
        ) }}

        {{ Form::submit( 'Submit', array(
            'id' => 'submitBtn_lorem',
            'class' => 'col-lg-4 col-lg-offset-4',
        ) ) }}
      </div>
                     
      {{ Form::close() }}

    </div>
    
@stop
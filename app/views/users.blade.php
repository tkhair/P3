@extends('layout')

@section('title')
Fake Users Generator
@stop

@section('content')
<h2>Fake Users Generator</h2><br/>
    <a href="/">Back</a>
    <br/><br/>
    <div class="form">
      {{ Form::open( array(
          'route' => 'UsersController.create',
           'id' => 'userform',
           'method' => 'POST',
            'role' => 'form',
          ) ) 
       }}

          <div class="input-group" id="generate">
          <span class="input-group-addon">
          {{ Form::label( 'usersNum', 'How many fake users you would like to generate?' ) }}
        </br>
          {{ Form::selectRange('usersNum', 1, 3,
              array(
              'class' => 'form-control',
              'id' => 'usersNum',
              'placeholder' => 'Enter number of users',
            )
          ) }}  
        </span>  
        </div>
        <br/>
        <div class="form-group">
          {{ Form::submit( 'Generate!', array(
              'id' => 'submitBtn_users',
              'class' => 'btn btn-primary',
          ) ) }}      
        </div>
    </form>

    </div> 
    <div>
        <p id="users"></p>
    </div>
@stop
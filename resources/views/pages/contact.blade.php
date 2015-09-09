@extends('app')

@section('content')
<div class="container" id="contact" style="padding-top:45px;">
	
    <div class="row content">
      <div class"large-8 columns">

	      	<h2 class="callout">We don't do smoke signals...</h2>
	      	<h3 class="callout"><em>But, you're welcome to talk to us!</em></h3>
	    
      	
      	<fieldset class="box">
         <ul>
         	@foreach($errors->all() as $error)
         		<li>{{ $error }}</li>
         	@endforeach
         </ul>

         @if(Session::has('message'))
         <div data-alert class="alert-box">
         	{{ Session::get('message') }}
         	<a href="#" class="close">&times;</a>
         </div>
         @endif

         {!! Form::open(array('route' => 'contact_store', 'class' => 'form', 'method' => 'post')) !!}

	          <div class="contact-field form-group">
	            {!! Form::label('Your Name') !!}
	            {!! Form::text('name', null,
	            		 array('required',
	            		 'class' => 'form-control',
	            		 'placeholder' => 'Big Bob')) !!}
	          </div>

	          <div class="contact-field form-group">
	            <!-- <label><span>Email:</span></label>
	              <input type="text" placeholder="bigfoot@sasquatch.com"> -->
	              {!! Form::label('Your E-mail Address') !!}
	              {!! Form::text('email', null,
	            		 array('required',
	            		 'class' => 'form-control',
	            		 'placeholder' => 'bigfoot@sasquatch.com')) !!}
	          </div>

	          <div class="contact-field form-group">
	            {!! Form::label('Talk To Us') !!}
	            {!! Form::textarea('message', null,
	            		 array('required',
	            		 'class' => 'form-control',
	            		 'placeholder' => 'start talking...')) !!}
	          </div>
	         <br>
	         <div class="form-group">
	           {!! Form::submit('Contact Us!', array('class' => 'button')) !!}
	         </div>
	         {!! csrf_field() !!}
		{!! Form::close() !!}
        </fieldset>

      	
      </div>
    </div>
    <div class="row">
    	<div class="large-12 columns" style="text-align:center; min-height:100px;"><h4 class="callout"><em>Or, if you prefer...</em></h4></div>
    </div>
    <div class="row">
		<div class="large-12 columns panel box" >
			 <div class="large-6 columns">
			  <h3>Send old fashioned mail to:</h3>
			</div>
			<div class="large-6 columns right">
				<address>
					<strong class="logo">Relive Primitive </strong><br>
					7040 S. 800 E-92<br>
					Fort Wayne, IN  46814<br><br>
					<em>or contact Matthew at: </em>574-520-3166
				</address>
			</div>
		</div>
	</div>
</div>
@endsection

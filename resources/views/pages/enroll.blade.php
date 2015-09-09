@extends('app')

@section('content')
<div class="container">
    <div class="row">
      
    
      <div class="large-8 large-centered columns">
      <h1>Enroll in Wilderness 101.</h1>

        {!! Form::open(['id' => 'billing-form']) !!}
         <div class="form-row">
            <label>
              <span>Email:</span>

              <input type="email" id="email" name="email">

            </label>
          </div>

        <fieldset class="box">
          <legend>Payment Information:</legend>
          <div class="form-row">
            <label>
              <span>Card Number:</span>

              <input type="text" data-stripe="number">

            </label>
          </div>

          <div class="form-row">
            <label>
              <span>CVC:</span>

              <input type="text" data-stripe="cvc">

            </label>
          </div>

          <div class="form-row">
            <label>
              <span>Expiration Date:</span>

              {!! Form::selectMonth(null, null, ['data-stripe' => 'exp-month']) !!}
              {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, ['data-stripe' => 'exp-year']) !!}

            </label>
          </div>

          <button>
            {!! Form::submit('Buy Now') !!}
          </button>
          <!-- <a class="button" action="submit">Pay Now</a> -->
        </fieldset>

        <div class="payment-errors"></div>
        {!! Form::close() !!}

         
      </div>
    </div>
  </div>
@endsection

@section('footer')
  <script src="js/billing.js"> </script>
@endsection
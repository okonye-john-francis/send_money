@extends('layouts.app')
@section('content')
<!-- @include('includes.confirmation_modal') -->



<div class="card main-content ml-5">

    <div class="card-header"><h4>Step 1: Enter account details</h4></div>
    
    <div class="card-body">
    
    @include('includes.new_customer_form')


    
    <!-- @include('includes.returning_customer_form'); -->
    <div class="row mt-4 submit_button">
          <a  class="offset-md-2 col-md-3 btn btn-outline-danger" href="{{url('returning_customer')}}" href="{{url('page_2')}}" > Cancel </a>
          <button class="offset-md-2 col-md-3 btn btn-outline-primary submit"  type="submit" form="form1" value="Submit" >Proceed</button>
    </div>
    

    </div>
    
                
</div>
    




  <script type="text/javascript">
 

      
  </script> 


@endsection
                         








   

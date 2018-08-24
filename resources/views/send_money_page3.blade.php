
@extends('layouts.app')
@section('content')




<div class="card ml-5 main-content">

    <div class="card-header"><h4>Step 3: Select how to pay</h4></div>
    
    <div class="card-body">
   
     @include('includes.payment_methods') 
  
      <div class="row mt-4">
          <a  class="offset-md-2 col-md-3 btn btn-outline-danger" href="{{url('returning_customer')}}" > Previous </a>
          <a  class="offset-md-2 col-md-3 btn btn-outline-primary" href="{{url('page_3')}}">Complete Payment</a>
    </div>

    </div>
    
                
</div>
    




  <script type="text/javascript">
      
      
  </script>                      

                         






@endsection
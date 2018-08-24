
@extends('layouts.app')
@section('content')




<div class="card ml-5  main-content">

    <div class="card-header bg-light"><h4>Step 2: Verify you receiver  details</h4></div>
    
    <div class="card-body">

   <!--  @include('includes.register_new_reciever') -->
    @include('includes.confirmation_page')
    


    
    <!-- @include('includes.returning_customer_form'); -->
    <div class="row mt-4">
          <a  class="offset-md-2 col-md-3 btn btn-outline-danger" href="{{url('returning_customer')}}" > Previous </a>
          <a  class="offset-md-2 col-md-3 btn btn-outline-primary" href="{{url('page_3')}}">Proceed</a>
    </div>
    

    </div>
    
                
</div>
    




  <script type="text/javascript">
      
      
  </script>                      

                         

   
@endsection
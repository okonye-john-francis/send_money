
@extends('layouts.app')
@section('content')




<div class="card ml-5 main-content ">

    <div class="card-header"><h4>Step 1: Enter account details</h4></div>
    
    <div class="card-body">

    @include('includes.register_new_reciever')
    @include('includes.register_new_reciever_acc')
    @include('includes.returning_customer_form')
    


    
    <!-- @include('includes.returning_customer_form'); -->
    <div class="row mt-4">
          <a  class="offset-md-2 col-md-3 btn btn-outline-danger" href="{{url('returning_customer')}}" href="{{url('page_2')}}" > Cancel </a>
          <button class="offset-md-2 col-md-3 btn btn-outline-primary"  type="submit" form="form1" value="Submit" >Proceed</button>
    </div>
    

    </div>
    
                
</div>
    




  <script type="text/javascript">
      
      
  </script>                      

                         








     
   
@endsection

@extends('layouts.app')
@section('content')




<div class="card m-3 mt-1 col-md-8 mx-auto main-content">

    <div class="card-header">Enter account details</div>
    
    <div class="card-body">
    @include('includes.confirmation_modal')
    @include('includes.new_customer_form')


    <!-- @include('includes.register_reciever_account'); -->
    <!-- @include('includes.returning_customer_form'); -->
    

    </div>
    
                
</div>
    




  <script type="text/javascript">
      
      
  </script>                      

                         








      </div>
   
@endsection
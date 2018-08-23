
<div class="row">
<div class="col-md-8">
<form method="post" action="{{url('account')}}">
                    {{csrf_field()}}

        <input type="hidden" class="form-control" name="user_type" 
                value="new_user">
        
         <div class="form-group form-row  m-3">
            
         <label name="type" for="type">Send Money To</label>
         <select class="select2 form-control reciever_id" id="reciever_name"
                  name="reciever_id"  style="width: 100%; ">
            <option value="" selected>Choose receipients</option>
            <option value="new">New Receipient</option>
            <option value="reciever_1">Ronald Gurry</option>
            <option value="reciever_2">Ainekirabo Ester</option>
          </select>
          <div class="invalid-feedback">
            
          </div>
   
         </div>
         
         
       

       <div class="form-group form-row m-3"> 
       
            <label for="currency">Receivers Account Number</label>
            <div class="input-group">
                  <select class="select2 form-control" id="location_id"name="account_id" style="width: 100%; ">
                    <option value="">Choose receipients</option>
                    <option value="new">New Account</option>
                    <option value="account_id">089977784444</option>
                    <option value="account_id">089977784444</option>
                  </select>
            </div>
        </div>


        <div class="form-group form-row m-3"> 
       
            <label for="currency">Amount to Send</label>
            <div class="input-group">
                  <div class="input-group-prepend">
                      <select class="form-control" name="currency">
                          <option value="GBP">GBP</option>
                          <option value="UGX">UGX</option>
                      </select>
                  </div>
                  <input type="text" class="form-control" name="amount" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

      <div class="col-md-12 m-3">
            <a type="submit" href="{{url('page_2')}}" data-toggle="modal" data-target="#payment_confirmation" class="btn btn-primary w-25">Continue</a>
      </div>


       
     
    </form>
    </div>
    <div class="col-md-4 text-center">
      <p>Cost of transation</p>
      <p>Exchange Rate: 1 GBP -- 5000 UGX</p>   
    </div>
    </div>


    <script type="text/javascript">

      $(function(){


          $('.select2').select2();

         
          $('.reciever_id').on('change',function() {
              var reciever_id = this.value;
              alert(reciever_id);
              if(reciever_id =='new'){ 
              $('#new_receiver').modal();
              }

          });


          

          $('.recname').on('blur',function(){
              $('.receiver_name').value = this.value;
          });


        });




     
    </script>



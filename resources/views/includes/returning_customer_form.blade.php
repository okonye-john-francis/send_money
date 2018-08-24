


<form method="post" id="form1" name="form1" action="{{url('page2')}}">
                    {{csrf_field()}}

        <input type="hidden" class="form-control" name="user_type" 
                value="new_user">
        
         <div class="form-group form-row  m-3">
            
         <label name="type" for="type">Send Money To</label>
         <select class="select2 form-control reciever_id" id="reciever_name"
                  name="reciever_id"  style="width: 100%; " required>
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
                  <select class="select2 form-control" id="location_id"name="account_id" style="width: 100%; " required>
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
                  <input type="text" class="form-control" name="amount"  aria-describedby="basic-addon1" required>
            </div>
        </div>

      

       
     
    </form>
   
    


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



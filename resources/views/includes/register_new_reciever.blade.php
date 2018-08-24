 <div class="modal fade center " id="new_receiver" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Enter Receipient Data</h5>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" action="{{url('account')}}">
                    {{csrf_field()}}
        <div class="form-group form-row m-3"> 
                           
          <label name="type" for="type">Receiver's name</label>
          <input type="text" name="recname" class="form-control recname" id="amount" placeholder="eg Receipient Name"  required>
          <div class="invalid-feedback">
            
          </div>
      
        </div>

        


        <div class="form-row m-3">
              
            <label name="rec_account_type" class="rec_account_type" for="type">Type of account</label>
            <select class="rec_account_type form-control" name="rec_account_type">
                <option value="receiver_mobile_money">Mobile Money</option>
                <option value="receiver_bank_account" selected="selected">Bank Account</option>
            </select>
            <div class="invalid-feedback">
              
            </div>
             
        </div>

      
        <div  class="rec-mobile-money-fields"  id="rec-mobile-money-fields">
           <div class="form-row m-3">
                
                  <label name="type" for="receiver_number">Phone Number</label>
                  <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                   
                  </div>
               
             </div> 

             <div class="form-row m-3">
                
                  <label name="type" for="type">Reg User of this phone</label>
                  <input type="text" name="receiver_name" class="form-control receiver_name" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                    
                  </div>
               
             </div>  


          </div>
         

             <div class="rec-bank-fields" id="nav-bank">

              <div class="form-row m-3">
                    
                      <label name="type" for="receiver_number">Bank Name</label>
                      <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                      <div class="invalid-feedback">
                       
                      </div>
                   
             </div> 

            <div class="form-row m-3">
                    
                      <label name="type" for="type">Bank Account Number</label>
                      <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                      <div class="invalid-feedback">
                        
                      </div>
                   
            </div> 

             <div class="form-row m-3">
                
                  <label name="type" for="type">Account Holder</label>
                  <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                    
                  </div>
               
             </div> 
             <div class="form-row m-3">
               <div class="col-md-6">
                  
                    <label name="type" for="type">Bank Country</label>
                    <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                    <div class="invalid-feedback">
                      
                    </div>
                 
               </div>

               <div class="col-md-6">
                  
                    <label name="type" for="type">A/C Current</label>
                    <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                    <div class="invalid-feedback">
                      
                    </div>
                 
               </div>
             </div>
            

          </div>

          
         
        
    </form>

    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Cancel </button>
          <a type="submit" class="btn btn-primary col-md-3" form="form1" value="Submit" href="{{url('page_2')}}">Proceed</a>
         
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(function() {

     $('.rec-mobile-money-fields').hide();
          $('.rec-bank-fields').show();


     $('.rec_account_type').on('change',function() {

      var option_for_account = this.value;
      show_matching_fields(option_for_account);

     });

       function show_matching_fields(receiver_account_type)
      {

        if(receiver_account_type == 'receiver_bank_account')
        {
          $('.rec-mobile-money-fields').hide();
          $('.rec-bank-fields').show();
          console.log('receiver_bank_account');
          
        }

        if(receiver_account_type == 'receiver_mobile_money')
        {
          
          $('.rec-bank-fields').hide();
          $('.rec-mobile-money-fields').show();
          console.log('receiver_mobile_money');
          
          
        }
     }


    


    });
    
  </script>



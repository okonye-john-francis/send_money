
  <form method="post" action="{{url('account')}}">
                    {{csrf_field()}}
    <div class="row">
      <div class="col-md-6">
        <input type="hidden" class="form-control" name="user_type" value="new_user">
        <div class="form-group form-row m-3"> 
                           
          <label name="type" for="type">Send Money To</label>
          <input type="text" name="recname" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
          <div class="invalid-feedback">
            
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
              <input type="text" class="form-control" placeholder="eg 100000" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
      </div>
      <div class="col-md-6 text-center mt-5">
        <p>Cost of transation</p>
        <p>Exchange Rate: 1 GBP -- 5000 UGX</p>   
      </div>
    </div>



    <nav class="m-3">
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link" id="nav-bank-tab" data-toggle="tab" href="#nav-bank" role="tab" aria-controls="nav-bank" aria-selected="true">Send Money to Bank</a>
        <a class="nav-item nav-link" id="nav-mobile-money-tab" data-toggle="tab" href="#nav-mobile-money" role="tab" aria-controls="nav-mobile-money" aria-selected="false">Send money to Mobile Money</a>
      
      </div>
    </nav>
    <div class="tab-content m-3" id="nav-tabContent">
      <div class="tab-pane fade" id="nav-mobile-money" role="tabpanel" aria-labelledby="nav-mobile-money-tab">
        <div class="form-row">
        <div class="m-3 col-md-5">
            
          <label name="type" for="receiver_number">Phone Number</label>
          <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg 07778889"  required>
          <div class="invalid-feedback">
           
          </div>
           
        </div> 

        <div class="m-3 col-md-5">
            
          <label name="type" for="type">Reg User of this phone</label>
          <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg John Happy"  required>
          <div class="invalid-feedback">
            
          </div>
           
        </div> 
        <div class="m-3 col-md-12">
         <button type="submit" class="btn btn-primary">Continue</button>
        </div> 


      </div>
      </div>
     

        <div class="tab-pane fade" id="nav-bank" role="tabpanel" aria-labelledby="nav-bank-tab">
         <div class="form-row">
          <div class="col-md-5 m-3">
                
            <label name="type" for="receiver_number">Bank Name</label>
            <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
            <div class="invalid-feedback">
             
            </div>
               
          </div> 

          <div class="col-md-5 m-3">
                  
            <label name="type" for="type">Bank Account Number</label>
            <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg 9000099999445"  required>
            <div class="invalid-feedback">
              
            </div>
                 
          </div> 

          <div class="col-md-5 m-3">
            
            <label name="type" for="type">Account Holder</label>
            <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg James Wysocki"  required>
            <div class="invalid-feedback">
              
            </div>
           
          </div> 
     
          <div class="col-md-5 m-3">
              
            <label name="type" for="type">Bank Country</label>
            <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Britain"  required>
            <div class="invalid-feedback">
              
            </div>
             
          </div>

          <div class="col-md-5 m-3">
              
            <label name="type" for="type">A/C Currency</label>
            <select class="form-control" name="account_currency">
                      <option value="GBP">British Pounds</option>
                      <option value="UGX">Ugandan Shillings</option>
            </select>
            <div class="invalid-feedback">
              
            </div>
             
          </div>
          <div class="col-md-12 m-3">
            <a type="submit" href="{{url('page_2')}}" data-toggle="modal" data-target="#payment_confirmation" class="btn btn-primary">Continue</a>
          </div>
        
        
      </div>

       


      </div>

      
     
    </div>
  </form>
    
  

    <script type="text/javascript">

      $(function(){




      });
    </script>
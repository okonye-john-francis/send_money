 <div class="modal fade center " id="modify_carriers_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Modify Carrier Info</h5>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" action="{{url('account')}}">
                    {{csrf_field()}}

      


        <nav class="m-3">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link" id="nav-bank-tab" data-toggle="tab" href="#nav-bank" role="tab" aria-controls="nav-bank" aria-selected="true">Send Money to Bank</a>
            <a class="nav-item nav-link" id="nav-mobile-money-tab" data-toggle="tab" href="#nav-mobile-money" role="tab" aria-controls="nav-mobile-money" aria-selected="false">Send money to Mobile Money</a>
          
          </div>
        </nav>
        <div class="tab-content m-3" id="nav-tabContent">
             <div class="tab-pane fade" id="nav-mobile-money" role="tabpanel" aria-labelledby="nav-mobile-money-tab">
           <div class="col-md-6 m-3">
                
                  <label name="type" for="receiver_number">Phone Number</label>
                  <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                   
                  </div>
               
             </div> 

             <div class="col-md-6 m-3">
                
                  <label name="type" for="type">Reg User of this phone</label>
                  <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                    
                  </div>
               
             </div>  


          </div>
         

             <div class="tab-pane fade" id="nav-bank" role="tabpanel" aria-labelledby="nav-bank-tab">

              <div class="col-md-6 m-3">
                    
                      <label name="type" for="receiver_number">Bank Name</label>
                      <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                      <div class="invalid-feedback">
                       
                      </div>
                   
             </div> 

            <div class="col-md-6 m-3">
                    
                      <label name="type" for="type">Bank Account Number</label>
                      <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                      <div class="invalid-feedback">
                        
                      </div>
                   
            </div> 

             <div class="col-md-6 m-3">
                
                  <label name="type" for="type">Account Holder</label>
                  <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                  <div class="invalid-feedback">
                    
                  </div>
               
             </div> 
             <div class="form-row col-md-6 m-3">
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

          <div class="col-md-6 m-3">
             <button type="submit" class="btn btn-default">Complete Payment</button>
            </div>
         
        </div>
    </form>

    

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Exit </button>
          <a type="submit" class="btn btn-primary col-md-3" form="form1" value="Submit" href="{{url('show_c')}}">Update Info</a>
         
        </div>
      </div>
    </div>
  </div
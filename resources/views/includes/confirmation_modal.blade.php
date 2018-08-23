 <div class="modal fade center " id="payment_confirmation" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Payment Info</h5>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


    <form method="post" action="{{url('account')}}">
                    {{csrf_field()}}

        <input type="hidden" class="form-control" name="user_type" value="new_user">
        <div class="form-group form-row form-line p-1"> 
          
                
                  <label class="col-md-6" name="type" for="type">Send Money To</label>
                  <input type="text" name="recname" class="form-control col-md-6" id="amount" placeholder="eg Receipient Name"  readonly="readonly">
                  <div class="invalid-feedback">
                    
                  </div>
               
             
        </div>

      
         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Transaction Fees</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value=" UGX 75000"  readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>


         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Total to debit</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value=" UGX 825000"  readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>
        

        <hr class="my-3">
        <p class="text-center"><strong>Receiver</strong></p>
        <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Name</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="John Max Saali"  readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Bank</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="Stan Chart (UK)"  readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">A/C Number</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="0667895566"  readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>
         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">A/C Name</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="John Max Ssali" readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Phone</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="+44 278 1002795" readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <hr class="my-3">
        <p class="text-center"><strong>Transaction Fees</strong></p>

        <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Forex Rate (UGX -> GBD)</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="1 GBP = 4970" readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Transaction Fees</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="5% of amount sent" readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">Receiver will get</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="GBD 120" readonly="readonly">
              <div class="invalid-feedback">
                
              </div>
           
         </div>

         <div class="form-row form-group form-line p-1">
            
              <label class="col-md-6" name="type" for="type">You will be charged</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="UGX 810,000" readonly="readonly">
              <div class="invalid-feedback">
                
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
  </div
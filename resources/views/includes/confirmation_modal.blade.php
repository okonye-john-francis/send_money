 <div class="modal fade center " id="payment_confirmation" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >Please Verify payment details</h5>


          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


  
          
                
            <p class="col-md-6" >Send Money To</p>
            <p class=" col-md-6" id="amount" ><strong>James Oola</strong></p>
                  
            <p class="col-md-6" >Transaction Fees</p>
            <p type="text" name="recname" class="col-md-6"><strong>UGX 1234 </strong></p>
            <p class="col-md-6" >Total to debit</p>
            <p type="text" name="recname" class="col-md-6"><strong>UGX 825000 </strong></p>
            <hr class="my-3">
            
            <p class="text-center"><strong>Receiver</strong></p>
            
            <label class="col-md-6" name="type" for="type">Name</label>
            <input type="text" name="recname" class="form-control col-md-6" id="amount" value="John Max Saali"  readonly="readonly">

            <label class="col-md-6" name="type" for="type">Bank</label>
            <input type="text" name="recname" class="form-control col-md-6" id="amount" value="Stan Chart (UK)"  readonly="readonly">
            <div class="invalid-feedback">
              
              </div>
            
              <label class="col-md-6" name="type" for="type">A/C Number</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="0667895566"  readonly="readonly">

            
              <label class="col-md-6" name="type" for="type">A/C Name</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="John Max Ssali" readonly="readonly">
              
   
              <label class="col-md-6" name="type" for="type">Phone</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="+44 278 1002795" readonly="readonly">
              <div class="invalid-feedback">
             

              <hr class="my-3">
              <p class="text-center"><strong>Transaction Fees</strong></p>

            
              <label class="col-md-6" name="type" for="type">Forex Rate (UGX -> GBD)</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="1 GBP = 4970" readonly="readonly">

            
              <label class="col-md-6" name="type" for="type">Transaction Fees</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="5% of amount sent" readonly="readonly">
            
            
              <label class="col-md-6" name="type" for="type">Receiver will get</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="GBD 120" readonly="readonly">
              
            
              <label class="col-md-6" name="type" for="type">You will be charged</label>
              <input type="text" name="recname" class="form-control col-md-6" id="amount" value="UGX 810,000" readonly="readonly">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Cancel </button>
          <a type="submit" class="btn btn-primary col-md-3" form="form1" value="Submit" href="{{url('page_2')}}">Proceed</a>
         
        </div>
      </div>
    </div>
  </div>
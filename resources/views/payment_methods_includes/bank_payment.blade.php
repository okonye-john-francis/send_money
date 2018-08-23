         
      <div class="" >
      <ul class="nav nav-tabs " id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="enter-payment-details-tab" data-toggle="tab" href="#enter-payment-details" role="tab" aria-controls="enter-payment-details" aria-selected="true">Enter payment Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="upload-payment-slip-tab" data-toggle="tab" href="#upload-payment-slip" role="tab" aria-controls="upload-payment-slip" aria-selected="false">Upload payment slip</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent w-100">
        <div class="tab-pane fade show active" id="enter-payment-details" role="tabpanel" aria-labelledby="enter-payment-details-tab">

          


          <div class="p-3 form-row">
                  
                    <label name="type" for="receiver_number">Enter Ref Number</label>
                    <input type="text" name="receiver_number" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                    <div class="invalid-feedback">
                     
                    </div>
                 
          </div> 

          <div class="p-3">
                  
                    <label name="type" for="type">Amount</label>
                    <input type="text" name="receiver_name" class="form-control" id="amount" placeholder="eg Receipient Name"  required>
                    <div class="invalid-feedback">
                      
                    </div>
                 
          </div> 

          <div class="p-3">
              
                <label name="type" for="type">Date</label>
                <input type="text" name="receiver_name" class="form-control" id="amount"  required>
                <div class="invalid-feedback">
                  
                </div>
             
          </div>
          <div class=" ">
             <button type="submit" class="btn btn-default">Complete Payment</button>
          </div> 
    


        </div>
        <div class="tab-pane fade" id="upload-payment-slip" role="tabpanel" aria-labelledby="upload-payment-slip-tab">
          <div class="form-row m-3">
          
            <label name="type" for="type">Choose photo</label>
            <input type="text" name="receiver_name" class="form-control" id="amount"   required>
            <div class="invalid-feedback">
              
            </div>
         
          </div>
          <div class="form-row m-3">
            
              <button type="submit" class="btn btn-default">Send Photo</button>
           
          </div>

        </div>
      </div>
    </div>
        
         

          
         
       
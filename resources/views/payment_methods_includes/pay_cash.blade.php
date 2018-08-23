
<div class="">
  <form method="post" action="{{url('account')}}">
                    {{csrf_field()}}

        <input type="hidden" class="form-control" name="user_type" value="new_user">
       
         
       

       <div class="form-group form-row m-3"> 
       
            <label for="currency">Choose an account to pay from</label>
            <div class="input-group mb-3">
                  <select class="select2 form-control" id="location_id"name="account_name" style="width: 100%; ">
                    <option value="">Choose account</option>
                    <option value="">New Account</option>
                    <option value="account_id">089977784444, Standard Bank</option>
                    <option value="account_id">089977784444, Cairo Bank</option>
                  </select>
            </div>
        </div>




       
     
  </form>
</div>
   


   



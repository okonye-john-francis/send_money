
<div class="form-row m-3 col-md-10 mx-auto">
<label name="payment_method_label" for="type">Payment Method</label>
<select class="form-control payment_method_select" name="payment_method_select">
  <option value="pay-by-bank">Bank Deposit</option>
  <option value="pay-by-mobile-money">Mobile Money</option>
  <option value="pay-by-cheque">Cheque</option>
  <option value="pay-by-credit-card">Credit Card</option>
 </select>
</div>
<div class="all-options form-row m-3 col-md-10 mx-auto" >
  <div  class="pay-bank-fields payment_method" id="pay-bank" style="width:100% !important" >
  	@include('payment_methods_includes.bank_payment')
  </div>
  <div class="pay-mobile-money-fields payment_method" id="pay-mobile-money">@include('payment_methods_includes.pay_cash')
  </div>
  <div class="pay-credit-card-fields payment_method" id="pay-credit-card">
  @include('payment_methods_includes.pay_cash')
</div>
  <div class="pay-cheque-fields payment_method" id="pay-cheque">
  @include('payment_methods_includes.pay_by_check')
</div>
</div>

<script type="text/javascript">

	
	$(function() {
	    $('.payment_method_select').on('change',function() {
	        var selected_method = this.value;
	        show_fields(selected_method);
	    	


	    });

	    show_fields($('.payment_method_select').val()); 

	    function show_fields(selected_method)
	    {

	    	if(selected_method=='pay-by-bank')
	    	{
	    		$('.payment_method').hide();
	    		$('.pay-bank-fields').show();
	    	}

	    	if(selected_method=='pay-by-mobile-money')
	    	{
	    		$('.payment_method').hide();
	    		$('.pay-mobile-money-fields').show();
	    	}

	    	if(selected_method=='pay-by-cheque')
	    	{
	    		$('.payment_method').hide();
	    		$('.pay-cheque-fields').show();
	    	}

	    	if(selected_method=='pay-by-credit-card')
	    	{
	    		$('.payment_method').hide();
	    		$('.pay-credit-card-fields').show();
	    	}

	    }

   

	});
</script>

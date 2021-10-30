<!DOCTYPE html>
<html lang="en">
<head>
    
<body>
@include('includes.navbar')

<div class="title">
      <span>Success!</span>
    </div>

    <div class="col-lg-4">
<div class="success-left">
      <span>Order no.</span>
      <p>Total</p>
    </div>
</div>
<div class="col-lg-4">
<div class="success-right">
      <span>1234 4567 90</span>
      <p>Rp. 105.000</p>
    </div>
    </div>
<div class="success-details">
        <h1>{Product_Name}that costs {price} will be shipped to:</h1>
      <span>Shipping_Adress</span>
      <p>only after you pay</p>
    </div>
    </div>
</div>
      <button class="blue-button">
  <span>Pay Now</span>
  </button>
 </body>
</html>
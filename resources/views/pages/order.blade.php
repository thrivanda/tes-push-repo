<!DOCTYPE html>
<html lang="en">
<head>
    
<body>
@include('includes.navbar')

<div class="title">
      <span>Order History</span>
    </div>
         <div class="square-order">
            <div class="first-box-order">
            <p>Search by Order no.</p>
            </div>
          </div>
           <div class="container">
            <div class="row">
               <div class="col-lg-6">
             <div class="order-details">
                <p> 1234 5678 90</p>
                <span>Rp.105.000</span>
             </div>
            </div>

              <div class="order-sub">
              <span>{value} for {mobile_number}</span>
               </div>
               <button class="blue-button-order">
                  <span>Pay now</span>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
          <div class="order-details">
             <p> 1234 5678 90</p>
             <span>Rp.105.000</span>
          </div>
         </div>

           <div class="order-sub">
           <span>{value} for {mobile_number}</span>
            </div>
            <div class="failed-button-order">
               <span>Failed</span>
         </div>
       </div>
       
       <div class="row">
        <div class="col-lg-6">
      <div class="order-details">
         <p> 1234 5678 90</p>
         <span>Rp.105.000</span>
      </div>
     </div>

       <div class="order-sub">
       <span>{product_name} that costs {price}</span>
        </div>
        <div class="shipping-button-order">
           <span>shipping code GO4XLAFS</span>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-6">
  <div class="order-details">
     <p> 1234 5678 90</p>
     <span>Rp.105.000</span>
  </div>
 </div>

   <div class="order-sub">
   <span>{value} for {mobile_number}</span>
    </div>
    <div class="success-button-order">
       <span>Success</span>
 </div>
</div>
<div class="row">
  <div class="col-lg-6">
<div class="order-details">
   <p> 1234 5678 90</p>
   <span>Rp.105.000</span>
</div>
</div>

 <div class="order-sub">
 <span>{product_name} that costs {price}</span>
  </div>
  <div class="canceled-button-order">
     <span>Canceled</span>
</div>
</div>
<ul class="pagination">
      <li><a href="#">Previous</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </div>
</div>
</body>
</html>
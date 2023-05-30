<!DOCTYPE html>
<html>
<head>
  <title>Order Page</title>
  <link rel="stylesheet" href="order.css">
</head>
<body>
  <div class="container">
    <h1>Order Page</h1>
    <form action="order.php" method="post">
      <div class="form-group">
     
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>
      </div>
      <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" id="city" required>
      </div>
      <div class="form-group">
        <label for="state">State</label>
        <input type="text" name="state" id="state" required>
      </div>
      <div class="form-group">
        <label for="zip">Zip Code</label>
        <input type="text" name="zip" id="zip" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" required>
      </div>
      <div class="form-group">
        <label for="payment">Payment Method</label>
        <select name="payment" id="payment">
          <option value="credit">khalti</option>
          <!-- <option value="debit">Debit Card</option> -->
          
        </select>
      </div>
      <div class="form-group">
       
 
        <input type="submit" value="Place Order">
      </div>
    </form>
  </div>
</body>
</html>

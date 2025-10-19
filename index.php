
    <!DOCTYPE html>
      <html>
         <head>
             <title>Discount Calculator</title>
     </head>
      <body>
             <h2>Discount Calculator</h2>
          <form method="post">
       <label>Original Price (৳):</label>
        <input type="number" name="price" required><br><br>

<label>Discount (%):</label>
                 <input type="number" name="discount" required><br><br>

        <label>Tax (%):</label>
                  <input type="number" name="tax" value="0"><br><br>

         <input type="submit" name="calculate" value="Calculate">
     </form>

    <?php
    if (isset($_POST['calculate'])) {
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];

        // Calculate discount
        $discountAmount = ($price * $discount) / 100;
        $price -= $discountAmount;

        // Calculate tax
        $taxAmount = ($price * $tax) / 100;
        $price += $taxAmount;

        echo "<h3>Final Price: ৳" . number_format($price, 2) . "</h3>";
    }
    
// </body>
// </html>

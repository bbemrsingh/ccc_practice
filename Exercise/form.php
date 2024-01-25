
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <style>
    *{margin: 0; padding: 0; box-sizing: border-box; font-family: 'poppins',sans-serif;}
    body{display: flex; height: 100vh; justify-content: center; align-items: center;  background-color: linear-greadient(135deg,#71b7e6,#9b59b6);}
    .continer{max-width: 700px; width: 100%; background: #a61717; padding: 25px 30px; border-radius: 5px;}
    /* .input-box{  margin: 20px 0 12px 9;   width: calc(100% / 2 - 20px);  font-weight: 500;  margin-bottom: 5px;height: 45px;width: 100%;outline: none;border: 1px solid #ccc;padding-left: 15px;font-size: 16px;}  */
    </style>
     -->
    <title>Product Information</title>
</head>
<body>
    <div>
        <form action="form_connect.php" method="post">
          
        <div class="input-box">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product[product_name]" required><br>
            <br>
        </div>


        <div class="input-box">
            <label for="sku">SKU:</label>
            <input type="text" id="sku" name="product[sku]" required><br>
            <br>
        </div>     
        
        
        <div>    
            <label class="form-label">Product Type:</label>
            <input type="radio" id="simple" name="product[product_type]" value="Simple" checked>
            
            <label class="form-label" for="simple">Simple</label>
            <input type="radio" id="bundle" name="product[product_type]" value="Bundle">
            
            <label  class="form-label" for="bundle">Bundle</label><br>
            <br>
        </div>
    

        <div class="input-box">
            <label for="category">Category:</label>
            <select id="category" name="product[category]"  required>
                <option value="Bar_Game_Room">Bar & Game Room</option>
                <option value="Bedroom">Bedroom</option>
                <option value="Decor">Decor</option>
                <option value="Dining_Kitchen">Dining & Kitchen</option>
                <option value="Lighting">Lighting</option>
                <option value="Living_Room">Living Room</option>
                <option value="Mattresses">Mattresses</option>
                <option value="Office">Office</option>
                <option value="Outdoor">Outdoor</option>
            </select><br>
        </div class="input-box">
        <br>
    
            
        <div class="input-box">
            <label for="manufacturer_cost">Manufacturer Cost:</label>
            <input type="text" id="manufacturer_cost" name="product[manufacturer_cost]" required><br>    
        </div class="input-box">
        <br>

        
        <div>
            <label for="shipping_cost">Shipping Cost:</label>
            <input type="text" id="shipping_cost" name="product[shipping_cost]" required><br>
            
        </div>
        <br>
        
        
        <div class="input-box">
            <label for="total_cost">Total Cost:</label>
            <input type="text" id="total_cost" name="product[total_cost]" required><br>
        </div>
        <br>

        
        <div class="input-box">
            <label for="price">Price:</label>
            <input type="text" id="price" name="product[price]" required><br>
        </div>
        <br>
        

        <div class="input-box">    
            <label>Status:</label>
            <select id="status" name="product[status]" required>
                <option value="Enabled">Enabled</option>
                <option value="Disabled">Disabled</option>
            </select><br>
        </div>
        <br>
        <div>
            <label for="created_at">Created At:</label>
            <input type="date" id="created_at" name="product[created_at]" required><br>
            <br>

            <label for="updated_at">Updated At:</label>
            <input type="date" id="updated_at" name="product[updated_at]" required><br>
            <br>
            
            <button type="submit" name="Submit">Submit</button>
        </div>    
        </form>
    </div>
 
</body>
</html>
   

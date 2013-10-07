<html>
<head>
	<title>Osborn Store</title>
  <style type="text/css">
    input.hidden{display: none;};
  </style>
</head>
<body>
	<h1>Osborn Store</h1>
  <form method="post">
    <table>
        <tr>
            <th><input type="checkbox" name="all" value="all" id="all"></th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        <tr>
            <td><input type="checkbox" name="shoe" value="shoe" class="checkbox"></td>
            <td>Shoe</td>
            <td>
                <select id="unit_shoe" name="select_shoe">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
            </td>
            <td><p id="shoe_price">50.99</p></td>
            <td><p id="total_shoe">50.99</p></td>
        </tr>

         <tr>
            <td><input type="checkbox" name="dress" value="dress" class="checkbox"></td>
            <td>Dress</td>
            <td>
                <select id="unit_dress" name="select_dress">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
            </td>
            <td><p id="dress_price">60.99</p></td>
            <td><p id="total_dress">60.99</p></td>
        </tr>

         <tr>
            <td><input type="checkbox" name="bag" value="bag" class="checkbox"></td>
            <td>Bag</td>
            <td>
                <select id="unit_bag" name="select_bag">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
            </td>
            <td><p id="bag_price">70.99</p></td>
            <td><p id="total_bag">70.99</p></td>
        </tr>
    </table>
    
      <input value="Redirect Checkout with Mpower" type="submit" id="redirect"><br>
      <input type="checkbox" name="onsite-display" id="onsite-display">Click here if you want to do onsite checkout <br>
      <input type="text" placeholder="username or phone no." class="hidden" name="account_alias"><br>
      <input value="Onsite Checkout with Mpower" type="submit" id="onsite" class="hidden">
    </form>
</body>
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/osbornstore.js"></script>
</html>
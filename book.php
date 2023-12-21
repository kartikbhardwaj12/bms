<!DOCTYPE html>
<html>
<head>
    <title>Online Shopping</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

h1 {
    color: #333;
    text-align: center;
}

form {
    max-width: 500px;
    margin: 30px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
select {
    width: 100%;
    padding: 8px;
    margin-top: 6px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
    </style>
<body>
    
    <form action="submit.php" method="post">
        <h2>Add Product</h2>
        <label for="product">Product Name:</label>
        <input type="text" id="product" name="product">

        <label for="category">Select Category:</label>
        <select id="category" name="category">
            <option value="Product Return">Product Return</option>
            <option value="Shipped By SDF">Shipped By SDF</option>
            <option value="Self Ship">Self Ship</option>
        </select>

        <h2>Add Product Details</h2>
       


        <label for="payment">Payment Allowed:</label>
        <select id="payment" name="payment">
            <option value="Both">Both</option>
            <option value="Card">Card</option>
            <option value="Cash">Cash</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
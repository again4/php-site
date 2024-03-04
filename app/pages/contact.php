<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<body>	
	<style>
body {	
background-image: url("https://www.nastol.com.ua/pic/202004/1920x1080/nastol.com.ua-394912.jpg")
    }
	</style>
    <div class="container">
        <h1>Contact Us</h1>

        <!-- Review Form -->
        <h2>Submit a Review</h2>
        <form action="submit_review.php" method="POST">
            <label for="review">Your Review:</label><br>
            <textarea id="review" name="review" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit Review">
        </form>

        <!-- Order Form -->
        <h2>Place an Order</h2>
        <form action="place_order.php" method="POST">
            <label for="dish">Select Dish:</label>
            <select id="dish" name="dish">
                <option value="burger">Burger</option>
                <option value="spaghetti">Spaghetti Carbonara</option>
                <option value="pizza">Margherita Pizza</option>
                <option value="salad">Caesar Salad</option>
                <option value="tiramisu">Tiramisu</option>
                <!-- Add more options as needed -->
            </select><br>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1"><br>
            <label for="comments">Comments:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Place Order">
        </form>

        <button class="back-btn" onclick="goBack()">Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

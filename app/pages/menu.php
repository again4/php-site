<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu</title>
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
        <h1>Our Menu</h1>

        <!-- Menu Item: Burger -->
        <div class="menu-item">
            <h2>Burger</h2>
	    <p><img src="..\images\123.jpg" height="350" wigth="230"></p>
            <p>Our classic beef burger served with lettuce, tomato, onion, and pickles on a brioche bun.</p>
            <p class="price">$10</p>
            <p class="category">Main Course</p>
            <p class="description">Sink your teeth into our juicy beef patty, perfectly seasoned and grilled to perfection. Accompanied by fresh, crisp lettuce, ripe tomato slices, thinly sliced onion, and tangy pickles, all sandwiched between a soft, buttery brioche bun.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>

        <!-- Menu Item: Spaghetti Carbonara -->
        <div class="menu-item">
            <h2>Spaghetti Carbonara</h2>
            <p><img src="..\images\1234.jpg" height="350" wigth="230"></p>
            <p>Spaghetti pasta served with creamy carbonara sauce, bacon, and parmesan cheese.</p>
            <p class="price">$12</p>
            <p class="category">Main Course</p>
            <p class="description">Indulge in the ultimate comfort food with our spaghetti carbonara. Al dente spaghetti tossed in a rich and velvety carbonara sauce, made with eggs, cream, and parmesan cheese, and generously topped with crispy bacon pieces for that extra savory goodness.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>

        <!-- Menu Item: Margherita Pizza -->
        <div class="menu-item">
            <h2>Margherita Pizza</h2>
            <p><img src="..\images\1233.jpg" height="350" wigth="230"></p>
            <p>Classic pizza topped with tomato sauce, mozzarella cheese, and fresh basil leaves.</p>
            <p class="price">$15</p>
            <p class="category">Main Course</p>
            <p class="description">Enjoy the simplicity and freshness of our Margherita Pizza. Made with a thin, crispy crust, topped with tangy tomato sauce, creamy mozzarella cheese, and fragrant basil leaves, it's a timeless classic that never fails to please.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>

        <!-- Menu Item: Caesar Salad -->
        <div class="menu-item">
            <h2>Caesar Salad</h2>
            <p><img src="..\images\2135.jpg" height="350" wigth="230"></p>
            <p>Crisp romaine lettuce, croutons, parmesan cheese, and Caesar dressing.</p>
            <p class="price">$8</p>
            <p class="category">Appetizer</p>
            <p class="description">Savor the freshness of our classic Caesar Salad. Crisp romaine lettuce tossed with crunchy croutons, tangy parmesan cheese, and our signature Caesar dressing, it's the perfect way to start your meal.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>

        <!-- Menu Item: Tiramisu -->
        <div class="menu-item">
            <h2>Tiramisu</h2>
	    <p><img src="..\images\826.jpg" height="350" wigth="230"></p> 
            <p>Traditional Italian dessert made with layers of coffee-soaked ladyfingers and mascarpone cheese.</p>
            <p class="price">$7</p>
            <p class="category">Dessert</p>
            <p class="description">Indulge your sweet tooth with our decadent Tiramisu. Layers of delicate ladyfingers soaked in rich espresso, nestled between creamy layers of mascarpone cheese, dusted with cocoa powder, it's a dessert lover's dream come true.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>

        <!-- Cocktail: Mojito -->
        <div class="menu-item">
            <h2>Mojito</h2>
	    <p><img src="..\images\365.jpg" height="350" wigth="230"></p>
            <p>A refreshing cocktail made with white rum, fresh lime juice, mint leaves, sugar, and soda water.</p>
            <p class="price">$8</p>
            <p class="category">Cocktail</p>
            <p class="description">Cool off with our signature Mojito cocktail. Made with the finest white rum, tangy lime juice, muddled mint leaves, and a touch of sweetness from sugar, it's a refreshing drink that's perfect for any occasion.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>
        

        <!-- Cocktail: Cosmopolitan -->
        <div class="menu-item">
            <h2>Cosmopolitan</h2>
	    <p><img src="..\images\49.jpg" height="350" wigth="230"></p>
            <p>A classic cocktail made with vodka, triple sec, cranberry juice, and fresh lime juice.</p>
            <p class="price">$9</p>
            <p class="category">Cocktail</p>
            <p class="description">Sip on our stylish Cosmopolitan cocktail. Made with premium vodka, tangy cranberry juice, a splash of triple sec, and a twist of fresh lime juice, it's a sophisticated drink that's perfect for any celebration.</p>
            <a href="../pages/contact.php" class="buy-btn">Buy</a>
        </div>
        <!-- Add more dishes and cocktails -->

        <button class="back-btn" onclick="goBack()">Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>

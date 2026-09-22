```php
<?php
// Demo products
$products = [
    [
        "name" => "Smart Watch",
        "price" => 4999,
        "image" => "https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600"
    ],
    [
        "name" => "Wireless Headphones",
        "price" => 6999,
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600"
    ],
    [
        "name" => "Running Shoes",
        "price" => 8499,
        "image" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600"
    ],
    [
        "name" => "Premium Backpack",
        "price" => 3999,
        "image" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600"
    ],
    [
        "name" => "Sunglasses",
        "price" => 2499,
        "image" => "https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=600"
    ],
    [
        "name" => "Smartphone",
        "price" => 59999,
        "image" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ShopX - E-Commerce</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Arial, sans-serif;
    background: #f6f7fb;
    color: #222;
}

/* NAVBAR */
nav {
    width: 100%;
    padding: 18px 7%;
    background: #111827;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    color: white;
    font-size: 28px;
    font-weight: bold;
}

.logo span {
    color: #ff6b35;
}

nav ul {
    display: flex;
    list-style: none;
    gap: 30px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    transition: .3s;
}

nav ul li a:hover {
    color: #ff6b35;
}

.cart {
    color: white;
    font-size: 18px;
    cursor: pointer;
}

#cartCount {
    background: #ff6b35;
    padding: 3px 8px;
    border-radius: 20px;
    font-size: 13px;
}

/* HERO */
.hero {
    min-height: 500px;
    padding: 80px 7%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(120deg, #111827, #293548);
    color: white;
}

.hero-text {
    max-width: 550px;
    animation: slideLeft 1s ease;
}

.hero h1 {
    font-size: 58px;
    margin-bottom: 20px;
}

.hero h1 span {
    color: #ff6b35;
}

.hero p {
    font-size: 18px;
    color: #d1d5db;
    margin-bottom: 30px;
    line-height: 1.7;
}

.btn {
    display: inline-block;
    padding: 14px 28px;
    background: #ff6b35;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    transition: .3s;
}

.btn:hover {
    transform: translateY(-4px);
    background: #ff5120;
}

.hero-image img {
    width: 450px;
    max-width: 100%;
    border-radius: 20px;
    animation: float 3s infinite ease-in-out;
}

/* PRODUCTS */
.products-section {
    padding: 80px 7%;
}

.section-title {
    text-align: center;
    margin-bottom: 45px;
}

.section-title h2 {
    font-size: 40px;
    margin-bottom: 10px;
}

.section-title p {
    color: #777;
}

.products {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    transition: .4s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,.15);
}

.card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.card-content {
    padding: 20px;
}

.card h3 {
    font-size: 21px;
    margin-bottom: 10px;
}

.price {
    color: #ff6b35;
    font-size: 22px;
    font-weight: bold;
    margin: 12px 0;
}

.add-btn {
    width: 100%;
    padding: 12px;
    border: none;
    background: #111827;
    color: white;
    border-radius: 7px;
    cursor: pointer;
    font-size: 16px;
    transition: .3s;
}

.add-btn:hover {
    background: #ff6b35;
}

/* FEATURES */
.features {
    padding: 70px 7%;
    background: white;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.feature {
    text-align: center;
    padding: 30px;
}

.feature .icon {
    font-size: 45px;
    margin-bottom: 15px;
}

.feature h3 {
    margin-bottom: 10px;
}

.feature p {
    color: #777;
}

/* FOOTER */
footer {
    background: #111827;
    color: white;
    text-align: center;
    padding: 35px 20px;
}

footer p {
    color: #aaa;
    margin-top: 10px;
}

/* ANIMATIONS */
@keyframes slideLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-15px);
    }
}

/* RESPONSIVE */
@media(max-width: 900px) {

    .hero {
        flex-direction: column;
        text-align: center;
        gap: 40px;
    }

    .hero h1 {
        font-size: 42px;
    }

    .products {
        grid-template-columns: repeat(2, 1fr);
    }

    .features {
        grid-template-columns: 1fr;
    }
}

@media(max-width: 600px) {

    nav {
        padding: 15px 5%;
    }

    nav ul {
        display: none;
    }

    .hero {
        padding: 60px 5%;
    }

    .hero h1 {
        font-size: 35px;
    }

    .products {
        grid-template-columns: 1fr;
    }

    .products-section {
        padding: 60px 5%;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>

    <div class="logo">
        Shop<span>X</span>
    </div>

    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="cart">
        🛒 Cart
        <span id="cartCount">0</span>
    </div>

</nav>


<!-- HERO -->
<section class="hero" id="home">

    <div class="hero-text">

        <h1>
            Shop <span>Smart</span>
        </h1>

        <p>
            Discover modern products at amazing prices.
            Fast shopping, beautiful design and easy checkout.
        </p>

        <a href="#products" class="btn">
            Shop Now
        </a>

    </div>

    <div class="hero-image">

        <img
            src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800"
            alt="Shopping"
        >

    </div>

</section>


<!-- PRODUCTS -->
<section class="products-section" id="products">

    <div class="section-title">

        <h2>Our Products</h2>

        <p>
            Explore our latest products
        </p>

    </div>


    <div class="products">

        <?php foreach ($products as $product) { ?>

            <div class="card">

                <img
                    src="<?php echo htmlspecialchars($product['image']); ?>"
                    alt="<?php echo htmlspecialchars($product['name']); ?>"
                >

                <div class="card-content">

                    <h3>
                        <?php echo htmlspecialchars($product['name']); ?>
                    </h3>

                    <div class="price">
                        Rs. <?php echo number_format($product['price']); ?>
                    </div>

                    <button
                        class="add-btn"
                        onclick="addToCart()"
                    >
                        Add To Cart
                    </button>

                </div>

            </div>

        <?php } ?>

    </div>

</section>


<!-- FEATURES -->
<section class="features" id="features">

    <div class="feature">

        <div class="icon">🚚</div>

        <h3>Fast Delivery</h3>

        <p>
            Fast and reliable delivery.
        </p>

    </div>


    <div class="feature">

        <div class="icon">🔒</div>

        <h3>Secure Payment</h3>

        <p>
            Your payment information is protected.
        </p>

    </div>


    <div class="feature">

        <div class="icon">⭐</div>

        <h3>Quality Products</h3>

        <p>
            We provide quality products.
        </p>

    </div>

</section>


<!-- FOOTER -->
<footer id="contact">

    <h2>ShopX</h2>

    <p>
        Your modern online shopping store.
    </p>

    <p>
        © 2026 ShopX. All Rights Reserved.
    </p>

</footer>


<script>

let cart = 0;

function addToCart() {

    cart++;

    document.getElementById("cartCount").innerText = cart;

    alert("Product added to cart!");

}

</script>

</body>
</html>
```

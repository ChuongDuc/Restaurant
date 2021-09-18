<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div>
        <div id="header">
            <div id="nav">
                <div class="nav-logo">
                    <img src="./assets/img/logo/logo.png" alt="wowFood" class="logo-wowfood">
                </div>
                <ul class="nav-list">
                    <li><a href="index.php">Home</a> </li>
                    <li><a href="categorie.php">Categories</a> </li>
                    <li><a href="food.php">Foods</a> </li>
                    <li><a href="#contact.php">Contact</a> </li>
                </ul>
            </div>
        </div>
        
        
        <div id="content-order">
            <div class="container">
                <h2 class="title-order">Fill this form to confirm your order.</h2>
                <form action="#" class="form-order">
                    <fieldset>
                        <legend>Selected Food</legend>
                        <div class="imgbox-order">
                            <img src="./assets/img/menufood/menu-pizza.jpg" alt="" class="img-food-order">                              
                        </div>
                        <div class="food-order-infor">
                            <h2 class="food-order-title">Food Title</h2>
                            <p class="food-order-price">$2.3</p>
                            <div class="food-desc-order">Quantity</div>
                            <input type="number" name="inpqty" class="input-order" value="1" min="1" required>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Delivery Details</legend>

                        <div class="dlv-detail">Full Name</div>
                        <input type="text" name="" class="input-order" placeholder="E.g. Vijay Thapa">

                        <div class="dlv-detail">Phone Number</div>
                        <input type="pn" name="" class="input-order" placeholder="E.g. 9843xxxxxx">

                        <div class="dlv-detail">Full Name</div>
                        <input type="text" name="" class="input-order" placeholder="E.g. hi@vijaythampa.com">

                        <div class="dlv-detail">Address</div>
                        <textarea name="address" class="input-order" rows="10" placeholder="E.g. Street, City, Country" required></textarea>

                        <button class="order-btn">
                            Confirm Order
                        </button>
                    </fieldset>
                </form>
            </div>
            
        </div>
    </div>
</body>
</html>
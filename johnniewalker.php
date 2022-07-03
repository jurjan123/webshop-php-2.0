<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("index.php")
    ?>
    <div class="shop" id="shop">
    <div class="item">
        <img width="200" height="400" src="producten/johhniewalker70cl.png">
        <div class="details">
            <h3>johnnie walker black label 70cl</h3>
            <p>scotch whiskey</p>
            <div class="price-quantity">
                <h2>€21</h2>
                <div class="buttons">
                    <i class="bi bi-dash-lg"></i>
                    <div class="quantity">0</div>
                    <i class="bi bi-plus-lg"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
    <img width="200" height="400" src="producten/johnniewalkerbl70cl.png">
        <div class="details">
            <h3>johnnie walker blonde label 70cl</h3>
            <p>scotch whiskey</p>
            <div class="price-quantity">
                <h2>€21</h2>
                <div class="buttons">
                    <i class="bi bi-dash-lg"></i>
                    <div class="quantity">0</div>
                    <i class="bi bi-plus-lg"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
    <img width="200" height="400" src="producten/johnniewalkerrl70cl.png">
        <div class="details">
            <h3>johnnie walker </h3>
            <p>honey flavoured whiskey</p>
            <div class="price-quantity">
                <h2>€21</h2>
                <div class="buttons">
                    <i onclick="decrement()" class="bi bi-dash-lg"></i>
                    <div class="quantity">0</div>
                    <i onclick="increment()" class="bi bi-plus-lg"></i>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="script.js"></script>
</body>
</html>
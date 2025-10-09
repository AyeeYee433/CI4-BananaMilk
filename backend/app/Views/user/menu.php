<!DOCTYPE html>
<html>

<head style="background-color: Blue">
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            /* background-color: #FCE7C8; */
            margin: 0;
            background-image: url('https://static.vecteezy.com/system/resources/previews/047/137/304/non_2x/a-glass-of-coffee-with-whipped-cream-and-bananas-free-photo.jpg');
        }

        a:hover {
            background-color: #C2A68C;
            font-size: 10px;
            padding: 2px;
        }

        .hed {
            border: 1px;
            padding: 4px;
            background-color: #ede6ddff;
        }

        table th,
        td {
            width: 100%;
            border-collapse: collapse;
            padding: 10px;
            padding-left: 20px;

        }

        #h1-banana {
            text-align: left;
            color: black;
        }

        .heh1 a {
            align-content: right;
            /* margin-left: 70%; */
            color: black;
            font-size: 20px;
            word-spacing: 10px;
        }

        .menus {
            margin: 0 auto;
            padding: 40px 20px;
            max-width: 1200px;

        }

        .mmenu h1 {
            text-align: center;
            font-size: 50px;
            background-color: rgb(194, 166, 140, 0.5);
            padding: 10px;
            margin: 0 auto;
        }

        /* .mmenu {
            margin: 0 auto;
            justify-content: center;
            background-color: rgb(194, 166, 140, 0.5);
            width: 65%;
            padding: 10px;
            background-color: 0.5;
        } */

        .mcont {
            display: grid;
            margin-bottom: 40%;
            gap: 30px;
            margin-bottom: 40px;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }

        .mdrink:hover {
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transform: translate(-5px);
        }

        .mdrink img {
            width: 100%;
            height: 200px;
            display: block;
            object-fit: cover;
        }

        .mdrink {
            background-color: #ede6ddff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transition: transform 0.3s;
        }

        .desc {
            padding: 20px;
            text-align: center;
        }

        .desc h3 {
            color: #1d3557;
        }

        .desc p.des {
            color: #457b9d;

        }

        .desc p.price {
            color: #D97D55;
        }
    </style>
</head>

<body>


    <?php

    ?>

    <div class="hed">
        <div>
            <table class="table1">
                <td>
                    <h1 id="h1-banana">Banana Milk Cafe</h1>
                </td>
                <td class="heh1">
                    <a href="/">Home</a>
                </td>
                <td class="heh1">
                    <a href="/menu">Menu</a>
                </td>
                <td class="heh1">
                    <a href="/about">About</a>
                </td>
                <td class="heh1">
                    <a href="/login">Login</a>
                </td>
                <td class="heh1">
                    <a href="/signup">Sign Up</a>
                </td>
            </table>
        </div>
    </div>

    <!-- new menu -->
    <div class="menus">
        <div class="mmenu">
            <h1>Drinks</h1>
            <div class="mcont">
                <div class="mdrink">
                    <img src="https://www.allrecipes.com/thmb/tu_DSAmBUu_wlgQoTvfBM2MMH0c=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/7966165KoreanBananaMilkYoly4x3-96cb3d6ff7f34896bb099bb2203bc4cf.jpg" alt="Banana milk">
                    <div class="desc">
                        <h3>Banana Milk</h3>
                        <p class="des">Korean style sweet, creamy, and refreshing classic.</p>
                        <p class="price">₱55.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://plus.unsplash.com/premium_photo-1695035007016-f7976bbb64d3?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="shake">
                    <div class="desc">
                        <h3>Banana Shake</h3>
                        <p class="des">A cold drink made of banana, fruits, and milk</p>
                        <p class="price">₱65.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://www.allrecipes.com/thmb/MQ5v2ANXR_xwyukshYTGbDjRWLc=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/6605824-banana-milk-coffee-Yoly-4x3-1-2a809973838943abbb8baf7bf608f027.jpg" alt="coffee">
                    <div class="desc">
                        <h3>Banana Coffee</h3>
                        <p class="des">A blend with expresso, banana milk, and cream</p>
                        <p class="price">₱95.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://www.inspiredtaste.net/wp-content/uploads/2016/06/Banana-Smoothie-Recipe-4-1200.jpg" alt="smoothie">
                    <div class="desc">
                        <h3>Banana Smoothie</h3>
                        <p class="des">A smoothie made with banana, fruits, yogurt, and cream.</p>
                        <p class="price">₱85.00</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Food -->
        <div class="mmenu">
            <h1>Food</h1>
            <div class="mcont">
                <div class="mdrink">
                    <!-- di ko na pinalitan huhu -->
                    <img src="https://lilluna.com/wp-content/uploads/2021/11/banana-waffles-resize-5.jpg" alt="waffle">
                    <div class="desc">
                        <h3>Banana Waffle</h3>
                        <p class="des">A fluffy banana waffle with banana slices coated with syrup.</p>
                        <p class="price">₱105.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://www.allrecipes.com/thmb/bt3JVNVHPFWWrmA1A-aUFn1ca_Y=/0x512/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/20334-banana-pancakes-i-DDMFS-4x3-9f291f03044247d48c9ec26917952402.jpg" alt="Pancake">
                    <div class="desc">
                        <h3>Banana Pancake</h3>
                        <p class="des">A Banana pancake with banana slices coated in syrup</p>
                        <p class="price">₱105.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://www.allrecipes.com/thmb/Xas5YvLFIEd7itElrQ-hCazgcRg=/0x512/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ALR-8333-banana-cake-vi-VAT-4x3-2f3d18cde9a6438fa6701863aa4e4b7d.jpg" alt="cake">
                    <div class="desc">
                        <h3>Banana Cake</h3>
                        <p class="des">A banana cake with a creamy filling</p>
                        <p class="price">₱95.00</p>
                    </div>
                </div>

                <div class="mdrink">
                    <img src="https://www.thespruceeats.com/thmb/rRgACcJGrtpYOhAAkA4n-Ovsyi0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/perfect-banana-split-recipe-305712-hero-01-ef0482a539394da0b5ba64ade0c73b98.jpg" alt="sundae">
                    <div class="desc">
                        <h3>Banana Sundae</h3>
                        <p class="des">Classic ice-cream split with nuts, fruits and whipped cream</p>
                        <p class="price">₱105.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <body>

</html>
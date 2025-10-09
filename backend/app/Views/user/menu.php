<!DOCTYPE html>
<html>

<head style="background-color: Blue">
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
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

        .menu {
            text-align: center;
            background-color: rgba(194, 166, 140, 0.58);
            margin: 0 auto;
            justify-content: center;
            width: 100%;
            padding: 10px;
        }



        .mtable {
            margin: 0 auto;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            width: 30%;
            /* border: 1px solid black; */
            border-collapse: collapse;
            text-align: center;
        }

        .mtable img {
            margin: auto;
            max-width: 100%;
            height: auto;
            display: block;
        }

        .items {
            background-color: #E2A16F;
        }

        .item {
            font-size: large;
            background-color: #D97D55;
        }

        img {
            height: auto;
            width: auto;
        }
    </style>

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

    <!-- menu -->
    <div>
        <div>
            <table class="mtable">
                <!-- Drink -->
                <tr>
                    <td class="menu" colspan="2">
                        <h1>Drink</h1>
                    </td>
                </tr>

                <tr class="items">
                    <td><img src="https://www.allrecipes.com/thmb/tu_DSAmBUu_wlgQoTvfBM2MMH0c=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/7966165KoreanBananaMilkYoly4x3-96cb3d6ff7f34896bb099bb2203bc4cf.jpg" alt="Banana milk"></td>
                    <td class="item">Banana Milk</td>
                </tr>
                <tr class="items">
                    <td><img src="https://plus.unsplash.com/premium_photo-1695035007016-f7976bbb64d3?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="shake"></td>
                    <td class="item">Banana Shake</td>
                </tr>
                <tr class="items">
                    <td><img src="https://www.allrecipes.com/thmb/MQ5v2ANXR_xwyukshYTGbDjRWLc=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/6605824-banana-milk-coffee-Yoly-4x3-1-2a809973838943abbb8baf7bf608f027.jpg" alt="coffee" </td>
                    <td class="item">Banana Coffee</td>
                </tr>
                <tr class="items">
                    <td><img src="https://www.inspiredtaste.net/wp-content/uploads/2016/06/Banana-Smoothie-Recipe-4-1200.jpg" alt="smoothie"></td>
                    <td class="item">Banana Smoothie</td>
                </tr>

                <!-- food -->
                <tr>
                    <td class="menu" colspan="2">
                        <h1>Food</h1>
                    </td>
                </tr>
                <tr class="items">
                    <td><img src="https://lilluna.com/wp-content/uploads/2021/11/banana-waffles-resize-5.jpg" alt="waffle"></td>
                    <td class="item">Banana Waffle</td>
                </tr>
                <tr class="items">
                    <td><img src="https://www.allrecipes.com/thmb/bt3JVNVHPFWWrmA1A-aUFn1ca_Y=/0x512/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/20334-banana-pancakes-i-DDMFS-4x3-9f291f03044247d48c9ec26917952402.jpg" alt="Pancake"></td>
                    <td class="item">Banana Pancake</td>
                </tr>
                <tr class="items">
                    <td><img src="https://www.allrecipes.com/thmb/Xas5YvLFIEd7itElrQ-hCazgcRg=/0x512/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/ALR-8333-banana-cake-vi-VAT-4x3-2f3d18cde9a6438fa6701863aa4e4b7d.jpg" alt="cake"></td>
                    <td class="item">Banana Cake</td>
                </tr>
                <tr class="items">
                    <td><img src="https://www.thespruceeats.com/thmb/rRgACcJGrtpYOhAAkA4n-Ovsyi0=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/perfect-banana-split-recipe-305712-hero-01-ef0482a539394da0b5ba64ade0c73b98.jpg" alt="sundae"></td>
                    <td class="item">Banana Sundae</td>
                </tr>
            </table>
        </div>
    </div>





    <body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        body {
            /* background-color: #FCE7C8; */
            margin: 0;
            background-image: url('https://static.vecteezy.com/system/resources/previews/047/137/304/non_2x/a-glass-of-coffee-with-whipped-cream-and-bananas-free-photo.jpg');
            /* background-repeat: no-repeat; */
            background-attachment: fixed;
            /* background-position: center; */
            /* background-size: auto;s */
        }

        p {
            font-weight: bold;
            font-size: 700;
        }

        .moodi {
            margin: 0 auto;
            text-align: center;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
            max-width: 1000px;
            padding: 40px;
        }

        .moodi img {
            margin: auto;
            max-width: 100%;
            height: auto;
            display: block;
        }

        .moodi:hover {
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transform: translate(-5px);
            /* padding: 30px; */
            transition: transform 0.3s;
        }

        .moodcolor {
            margin: 0 auto;
            text-align: center;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
            max-width: 1000px;
        }

        .colors:hover {
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transform: translate(-5px);
        }



        .moodboard {
            margin: 0 auto;
            justify-content: center;
            background-color: rgb(194, 166, 140, 0.5);
            max-width: 65%;
            padding: 40px 10px;
        }

        .buttons {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?= view('Components/cards/header') ?>

    <!-- moodboard -->
    <div class="moodboard">
        <h1>Moodboard</h1>
        <div class="moodbI">
            <div class="moodcolor">
                <div class="colors" style="background-color: #FCE7C8; color: #1d3557;" title="Banana Cream">#FCE7C8</div>
                <div class="colors" style="background-color: #ede6ddff; color: #1d3557;" title="Oat Milk">#Ede6ddff</div>
                <div class="colors" style="background-color: #C2A68C; color: white;" title="Dark Coffee">#C2A68C</div>
                <div class="colors" style="background-color: #D97D55; color: white;" title="Blue Accent">#D97D55</div>
            </div>

            <!-- buttons -->
            <div class="mt-3 container">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn-outline-primary btn">Border</button>
                <button type="button" class="btn btn-primary" disabled>Disabled</button>
            </div>

            <div class="moodi">
                <h2>Soft Cafe Vibe</h2>
                <img src="https://anearthlyparadise.com/wp-content/uploads/2024/08/cardinal-interior.jpg" alt="Soft">
                <p>Focus on warm natural visuals</p>
            </div>

            <div class="moodi">
                <h2>Product Focus</h2>
                <img src="https://fooddaydreaming.com/wp-content/uploads/2021/07/Banana2-1.jpg" alt="Banana Treat">
                <p>Shows different food created with Banana</p>
            </div>

            <div class="moodi">
                <h2>Texture, Materials, and Environment</h2>
                <img src="https://images.adsttc.com/media/images/67e3/e20b/8da1/ef01/8749/5184/newsletter/thila-bistro-and-cafe-3fconcept_20.jpg?1742987804" alt="Texture">
                <p>Customer friendly cafe where natural materials like woods to create a soft and warm visual environment where cutomers, young and old can come and relax.</p>
            </div>


            <div class="moodi">
                <h2>Visual Element</h2>
                <img src="https://mindfuldesignconsulting.com/wp-content/uploads/2022/04/Boho-Style-Restaurant-Design-with-Plants.jpg" alt="visual">
                <p>Shows banana tree murals and plants for a open like scene</p>
            </div>
        </div>
    </div>


    <!-- footer -->
    <?= view('Components/cards/footer') ?>
</body>

</html>
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

        .roads {
            margin: 0 auto;
            text-align: center;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            flex-wrap: wrap;
            max-width: 1000px;
            display: grid;

        }

        .step {
            justify-content: center;
            text-align: center;
            font-weight: 100;
            border: 12px;
            border-radius: 10px;
            padding: 15px;
            background-color: #FFF0DD;
            margin: 20px;
            width: 1000px;
        }

        .step:hover {
            background-color: #D97D55;
            font-size: 18px;
            transition: transform 0.3s;
            box-shadow: 0 6px 12px rgba(29, 53, 87, 0.1);
            transform: translate(-5px);
        }

        .roadd {
            margin: 0 auto;
            justify-content: center;
            background-color: rgb(194, 166, 140, 0.5);
            width: 65%;
            padding: 10px;
            background-color: 0.5;
        }

        .roadd h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?= view('Components/cards/header') ?>

    <!-- roadmap -->

    <div class="roadd">
        <h1>Roadmap</h1>
        <div class="roads">
            <div class="step">
                <h2>Step 1: Brainstorming</h2>
                <p>Brainstorming ideas</p>
            </div>
            <div class="step">
                <h2>Step 2: Creation</h2>
                <p>Creation of brand, menu, food, drinks, and dessert</p>
            </div>
            <div class="step">
                <h2>Step 3: Store</h2>
                <p>Store creation</p>
            </div>
            <div class="step">
                <h2>Step 4: Opening</h2>
                <p>Shop opening</p>
            </div>
        </div>

    </div>

    <!-- footer -->

    <?= view('Components/cards/footer') ?>

</body>

</html>
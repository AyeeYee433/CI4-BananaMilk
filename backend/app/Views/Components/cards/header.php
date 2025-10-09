<style>
    header {
        text-align: center;
        justify-content: center;
        position: fixed;
        margin-top: 20px;
    }
</style>
<header>
    <div>
        <p>A Banana based beverages and food for those that like bananas</p>
        <div class="bbtn">
            <?= view('Components/buttons/primarybtn', ['label' => 'About', 'href' => '/about']) ?>
        </div>

    </div>

</header>
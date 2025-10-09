<footer>
    <p>Enjoy the bananas</p>
    <p>BANANAASSS</p>
    <div class="bbtn">
        <?= view('Components/buttons/borderbtn', ['label' => 'About', 'href' => '/about']) ?>
        <?= view('Components/buttons/primarybtn', ['label' => 'Home', 'href' => '/']) ?>
        <?= view('Components/buttons/secondarybtn', ['label' => 'Login', 'href' => '/login']) ?>
        <?= view('Components/buttons/secondarybtn', ['label' => 'Signup', 'href' => '/signup']) ?>
    </div>
</footer>
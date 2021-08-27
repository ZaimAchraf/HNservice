<nav>
    <div class="top-nav">
        <div class="left links">
            <ul>
                <?php if (isset($_SESSION['token'])){?>
                    <li class="drop-cont">
                        <img src="/Storage/uploads/users/<?= $_SESSION['token']['picture']?>" width="40px" height="40px" alt=""> <span class="username"><?= $_SESSION['token']['fullname'] ?></span>
                        <div class="drop-down">
                            <a href="/user/profile">Settings</a>
                            <a href="/logout">Logout</a>
                        </div>
                    </li>
                <?php }else{ ?>
                    <li><a href="/login"><i class="fas fa-sign-in-alt"></i> Sign in</a></li>
                <?php }?>
            </ul>
        </div>
        <div class="search-container">
            <form class="search-inputs" method="post" action="/products">
                <select name="column" id="">
                    <option value="title">Products</option>
                    <option value="person">Person</option>
                </select>
                <input type="text" name="SearchedValue" placeholder="Search...">
                <span onclick="document.querySelector('.search-inputs').submit()" class="search-icon"><i class="fas fa-search"></i></span>
            </form>

        </div>
        <div class="right links">
            <ul>
                <li><a href=""><i class="far fa-question-circle"></i> aide</a></li>
                <li><a class="chart-anchor" href="/chart"><i class="fas fa-shopping-cart"></i> chart <span class="nbr-chart" ><?= isset($_SESSION['chart']) ? count($_SESSION['chart']) : '' ?></span></a></li>
                <li><a href="">fr</a> | <a href="">en</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-nav">
        <div class="logo">
            <img src="/Storage/Statics/images/logo.png" width="42px" alt="">
            NosCommerce<span>.ma</span>
        </div>
        <ul>
            <li><a href="/products">All Products</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">Sell on NosCommerces</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</nav>
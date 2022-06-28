<main class="mt-5">
    <div class="container">
        <form class="row" action="./all-products-page.php" method="get">
            <div class="col-2">
                <select name="sort" class="form-select">
                    <option <?php
                            if ($sort == "") {
                                echo htmlspecialchars("Selected");
                            } ?> value="">None</option>
                    <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_ASC) {
                            } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_ASC); ?>">By price asc</option>
                    <option <?php if ($sort == \Models\Product\Product::ORDER_BY_PRICE_DESC) {
                                echo htmlspecialchars("Selected");
                            } ?> value="<?php echo htmlspecialchars(\Models\Product\Product::ORDER_BY_PRICE_DESC); ?>">By price desc</option>
                </select>
            </div>
            <div class="col-3"></div>
            <input class="col-5" type="text" name="term" value="<?php echo htmlspecialchars($term); ?>">
            <button type="submit" class="btn btn-light col-2">Search</button>
            <hr class="mt-3">
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <article class="single-product col-4 row mb-5">
                    <div class='col-12 text-center'>
                        <img src="<?php echo htmlspecialchars($product->img); ?>" alt="" width="200" height="200">
                    </div>
                    <div class='col-12 text-center'>
                        <h6><?php echo htmlspecialchars($product->title); ?></h6>
                        <p>PRICE: <?php echo htmlspecialchars($product->price); ?> dinara</p>
                        <a class="btn btn-primary" href="./single-product-page.php?product=<?php echo htmlspecialchars($product->id) ?>">Show Product</a>
                        <button form="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" class="btn btn-info">Add to Cart</button>
                        <form id="add-to-cart-<?php echo htmlspecialchars($product->id); ?>" action="./all-products-page.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product->id); ?>">
                        </form>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-flex justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="">1</a></li>
                    <li class="page-item"><a class="page-link" href="about-us-page.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</main>
<nav class="navbar">
    <div class="container-fluid">
        <h1 class="navbar-brand">Product List</h1>
        <span class="d-flex">
            <a href="/addproduct" class="btn btn-dark m-2" type="submit">Add</a>
            <form action="/delete-product" method="post" id="delete-form">
                <button class="btn btn-dark m-2" id="delete-product-btn" type="submit">Mass Delete</button>
            </form>
        </span>
    </div>
</nav>
<hr class="mx-3 py-2">

<div class="container p-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
      <?php foreach ($products as $product) : ?>
        <div class="col mt-2">
            <div class="card border-dark">
                <div class="card-input"> 
                    <input form="delete-form" type="checkbox" class="delete-checkbox form-check-input bg-dark m-2" name="<?= $product['sku'] ?>">
                </div>
                <div class="card-body">
                    <p class="card-text text-center"><?php echo $product['sku']; ?></p>
                    <p class="card-text text-center"><?php echo $product['name']; ?></p>
                    <p class="card-text text-center"><?php echo $product['price']; ?> $</p>
                    <p class="card-text text-center"><?php echo $product['value']; ?></p>

                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>
</div>

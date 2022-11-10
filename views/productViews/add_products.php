<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand">Product Add</a>
        <span class="d-flex">
            <button class="btn btn-dark m-2" type="submit">Save</button>
            <a href="/" class="btn btn-dark m-2" type="submit">Cancel</a>
        </span>
    </div>
</nav>
<hr class="mx-5 py-3">

<?php if (!empty($errors)) : ?>
<div class="container mb-5 alert alert-danger">
    <h5>Form validation</h5>
    <ul class="m-0">
        <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<div class="container-fluid p-5">
    <form method="post" id="product__form" class="needs-validation" novalidate>
        <div class="row mb-3">
            <label for="sku" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-2">
                <input required type="text" class="form-control" id="sku" value="<?php echo $product->data['sku']??''?>">
                <div class="invalid-feedback">
                    Please set the SKU
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="name" value="<?php echo $product->data['name']??''?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Price ($)</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="price" min="0.01" step="0.01" value="<?php echo $product->data['price']??''?>">
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Product Type</label>
            <div class="col-sm-2">
                <select class="form-select" id="productType" name="type">
                    <option <?php if (!($product->data['type'] ?? '')) echo "selected"; ?>>Type Switcher</option>

                    <?php foreach ($product::$validTypes ?? '' as $value) : ?>
                        <option <?php if (($product->data['type'] ?? '') === $value) echo "selected"; ?> value="<?= $value ?>"><?= $value ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <!--product types-->
        <fieldset class="d-none" id="dvd-description">
            <div class="row mb-3">
                <label for="size" class="col-sm-2 col-form-label">Size (MB)</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="size" min="1" step="1" value="<?php echo $product->data['size']??''?>">
                </div>
            </div>
        </fieldset>

        <fieldset class="d-none" id="book-description">
            <div class="row mb-3">
                <label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="weight" min="1" step="1" value="<?php echo $product->data['weight']??''?>">
                </div>
            </div>
        </fieldset>

        <fieldset class="d-none" id="furniture-description">
            <div class="row mb-3">
                <label for="height" class="col-sm-2 col-form-label">Height (CM)</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="height" min="1" step="1" value="<?php echo $product->data['height']??''?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="width" class="col-sm-2 col-form-label">Width (CM)</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="width" min="1" step="1" value="<?php echo $product->data['width']??''?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="length" class="col-sm-2 col-form-label">Length (CM)</label>
                <div class="col-sm-2">
                    <input type="number" class="form-control" id="length" min="1" step="1" value="<?php echo $product->data['length']??''?>">
                </div>
            </div>
        </fieldset>
    </form>
</div>
<nav class="navbar">
    <div class="container-fluid">
        <h1 class="navbar-brand">Product Add</h1>
        <span class="d-flex">
            <button class="btn btn-dark m-2" type="submit" form="product_form">Save</button>
            <a href="/" type="button" class="btn btn-dark m-2" type="submit">Cancel</a>
        </span>
    </div>
</nav>
<hr class="mx-3 py-1">

<div class="container-fluid p-5">
    <fieldset>
        <form method="POST" id="product_form" class="needs-validation" novalidate>
            <div class="row mb-3">
                <label for="sku" class="col-sm-2 col-form-label">SKU</label>
                <div class="col-sm-auto">
                    <input required type="text" class="form-control" id="sku" value="<?= $product->data['sku'] ?? '' ?>"
                        name="sku">
                    <div id="skuValidator" class="text-dark position-absolute d-none" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="invalid-feedback" id="skuFeedback">
                        Please provide the SKU
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-auto">
                    <input required type="text" class="form-control" id="name"
                        value="<?= $product->data['name'] ?? '' ?>" name="name">
                    <div class="invalid-feedback">
                        Please provide the name
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Price ($)</label>
                <div class="col-sm-auto">
                    <input required type="number" class="form-control" id="price" min="0.01" step="0.01"
                        value="<?= $product->data['price'] ?? '' ?>" name="price">
                    <div class="invalid-feedback">
                        Please provide the price
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Product Type</label>
                <div class="col-sm-auto">
                    <select required class="form-select" id="productType" name="type">
                        <option <?php if(!($product->data['type'])) echo"selected"; ?> value="">Type Switcher</option>
                        <?php foreach ($product::$validTypes ?? '' as $value) : ?>
                        <option <?php if(($product->data['type'] ?? '') === $value) echo "selected"; ?>
                            value="<?= $value ?>"><?= $value ?></option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        Please choose a product type
                    </div>
                </div>
            </div>
    </fieldset>

    <!--product types-->
    <div id="productDescription" class="mb-5">
        <fieldset class="d-none" id="dvdDescription">
            <div class="row mb-3">
                <label for="size" class="col-sm-2 col-form-label">Size (MB)</label>
                <div class="col-sm-auto">
                    <input type="number" class="form-control" id="size" min="1" step="1" name="size"
                        value="<?= $product->data['size'] ?? '' ?>">
                    <div class="invalid-feedback">
                        Please provide the size
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="d-none" id="bookDescription">
            <div class="row mb-3">
                <label for="weight" class="col-sm-2 col-form-label">Weight (KG)</label>
                <div class="col-sm-auto">
                    <input type="number" class="form-control" id="weight" min="1" step="1" name="weight"
                        value="<?= $product->data['weight'] ?? '' ?>">
                    <div class="invalid-feedback">
                        Please provide the weight
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="d-none" id="furnitureDescription">
            <div class="row mb-3">
                <label for="height" class="col-sm-2 col-form-label">Height (CM)</label>
                <div class="col-sm-auto">
                    <input type="number" class="form-control" id="height" min="1" step="1" name="height"
                        value="<?= $product->data['height'] ?? '' ?>">
                    <div class="invalid-feedback">
                        Please provide the height
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="width" class="col-sm-2 col-form-label">Width (CM)</label>
                <div class="col-sm-auto">
                    <input type="number" class="form-control" id="width" min="1" step="1" name="width"
                        value="<?= $product->data['width'] ?? '' ?>">
                    <div class="invalid-feedback">
                        Please provide the width
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="length" class="col-sm-2 col-form-label">Length (CM)</label>
                <div class="col-sm-auto">
                    <input type="number" class="form-control" id="length" min="1" step="1" name="length"
                        value="<?= $product->data['length'] ?? '' ?>">
                    <div class="invalid-feedback">
                        Please provide the length
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    </form>
</div>
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

<div class="container-fluid p-5">
    <form method="post" id="product__form" class="validation">
        <div class="row mb-3">
            <label for="sku" class="col-sm-2 col-form-label">SKU</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="sku">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-2">
                <input type="text" class="form-control" id="name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Price($)</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="price" min="0.01" step="0.01">
            </div>
        </div>
    </form>
</div>
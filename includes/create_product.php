<?php 
    include_once 'database.php';
    include_once 'product.php';

    $database = new Database();

    $product = new Product();

    include_once 'layout_header.php';
?>

<?php 
    if(isset($_POST['save'])) {
        $product->sku = $_POST['sku'];
        $product->name = $_POST['name'];
        $product->price = $_POST['price'];

        if($product->create()) {
            echo "<div class='alert alert-success' style='max-width: 1440px; widht: 100%; margin: auto;'>Product was created.</div>";
        } else {
            echo "<div class='alert alert-danger' style='max-width: 1440px; widht: 100%; margin: auto;'>Unable to create product.</div>";
        }
    }
?>

<section>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="input-form">
        <div class="input-group mb-3 input-width">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">SKU</span>
            </div>
            <input type="text" name="sku" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 input-width">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            </div>
            <input type="text" name="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3 input-width">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
            </div>
            <input type="text" name="price" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>

        <input type="submit" name="save" value="Save" class="btn-primary">
    </form>
</section>

<?php 
    include_once "layout_footer.php";
?>
<?php
// Start the session
session_start();
// session_destroy();
$favorite_products = $_SESSION["favorite_products"];
if (isset($_POST['add'])) {
    array_push(
        $favorite_products,
        [
            "id" => $_POST['id'],
            "size" => $_POST['size'],
            "name" => $_POST['name'],
            "image" => "https://placeimg.com/500/500",
            "about" => $_POST['about']
        ]
    );
};
$_SESSION["favorite_products"] = $favorite_products;
// 60 products array
include_once "arr.php";
// Add New Product start 
if (isset($_POST['name'])) {

    array_push(
        $products,
        [
            "id" => gen_uuid(),
            "size" => $_POST['size'],
            "name" => $_POST['name'],
            "image" => "https://placeimg.com/500/500",
            "about" => $_POST['about']
        ]
    );
};
// Add New Product end
// Search Products start 
$search_products = [];
if (isset($_POST['search'])) {
    $search_products = [];
    foreach ($products as $product) {
        if (array_search($_POST['search'], $product)) {
            array_push(
                $search_products,
                $product
            );
        };
    }
};
// Search Products end


?>
<html>

<head>
    <title>PHP End of Module Assignment</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Add New Product start -->
    <fieldset>
        <legend>Add New Product</legend>
        <form action="" method="POST">
            <label for="size">please choose a size : </label>
            <br />
            <select name="size">
                <option value="XLarge">XLarge</option>
                <option value="Large">Large</option>
                <option value="Medium">Medium</option>
                <option value="Small">Small</option>
            </select>
            <br />
            <label for="name">please write a name : </label>
            <br />
            <input type="text" name="name" required>
            <br />
            <label for="about">please write a about : </label>
            <br />
            <textarea rows="4" cols="50" name="about" placeholder="Enter text here..." style="resize: none" required>
            </textarea>
            <br />
            <input type="submit" value="Add">
        </form>

    </fieldset>
    <!-- Add New Product end -->
    <!-- Search Products start -->
    <fieldset>
        <legend>Search Products</legend>
        <form action="" method="POST">

            <input type="text" name="search" required>
            <br />

            <input type="submit" value="Search Products">
        </form>

    </fieldset>
    <!-- Search Products end -->
    <fieldset>
        <legend>Favorite Products</legend>
        <!-- Display Favorite Products start -->
        <div class="allProduct">

            <?php for ($i = 0; $i < count($_SESSION["favorite_products"]); $i++) : ?>
                <div class="product">
                    <ul>
                        <li>
                            <h3>
                                Product Num :
                            </h3>
                            <p>
                                <?php echo $i + 1; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product ID :
                            </h3>
                            <p>
                                <?php echo $_SESSION["favorite_products"][$i]["id"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Size :
                            </h3>
                            <p>
                                <?php echo $_SESSION["favorite_products"][$i]["size"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Name :
                            </h3>
                            <p>
                                <?php echo $_SESSION["favorite_products"][$i]["name"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Image :
                            </h3>
                            <p>
                                <img src=" <?php echo $_SESSION["favorite_products"][$i]["image"]; ?>">

                            </p>
                        </li>
                        <li>
                            <h3>
                                Product About :
                            </h3>
                            <p>
                                <?php echo $_SESSION["favorite_products"][$i]["about"]; ?>
                            </p>
                        </li>
                    </ul>
                </div>
            <?php endfor ?>
        </div>
    </fieldset>
    <!-- Display Favorite Products end -->
    <div class="allProduct">
        <!-- Display only 15 products start -->
        <?php if (isset($search_products)) : ?>
            <?php for ($i = 0; $i < count($search_products); $i++) : ?>
                <div class="product">
                    <ul>
                        <li>
                            <h3>
                                Product Num :
                            </h3>
                            <p>
                                <?php echo $i + 1; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product ID :
                            </h3>
                            <p>
                                <?php echo $search_products[$i]["id"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Size :
                            </h3>
                            <p>
                                <?php echo $search_products[$i]["size"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Name :
                            </h3>
                            <p>
                                <?php echo $search_products[$i]["name"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Image :
                            </h3>
                            <p>
                                <img src=" <?php echo $search_products[$i]["image"]; ?>">

                            </p>
                        </li>
                        <li>
                            <h3>
                                Product About :
                            </h3>
                            <p>
                                <?php echo $search_products[$i]["about"]; ?>

                            </p>
                        </li>
                        <li>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $search_products[$i]["id"] ?>">
                                <input type="hidden" name="size" value="<?php echo $search_products[$i]["size"] ?>">
                                <input type="hidden" name="name" value="<?php echo $search_products[$i]["name"] ?>">
                                <input type="hidden" name="about" value="<?php echo $search_products[$i]["about"] ?>">
                                <input type="submit" name="add" value="add to favorite">
                            </form>
                        </li>
                    </ul>
                </div>
            <?php endfor ?>
        <?php endif ?>
        <!-- Display search products end -->
        <!-- Display only 15 products start -->
        <?php if (!isset($_POST['search'])) : ?>
            <?php for ($i = 0; $i < 15; $i++) : ?>
                <div class="product">
                    <ul>
                        <li>
                            <h3>
                                Product Num :
                            </h3>
                            <p>
                                <?php echo $i + 1; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product ID :
                            </h3>
                            <p>
                                <?php echo $products[$i]["id"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Size :
                            </h3>
                            <p>
                                <?php echo $products[$i]["size"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Name :
                            </h3>
                            <p>
                                <?php echo $products[$i]["name"]; ?>
                            </p>
                        </li>
                        <li>
                            <h3>
                                Product Image :
                            </h3>
                            <p>
                                <img src=" <?php echo $products[$i]["image"]; ?>">

                            </p>
                        </li>
                        <li>
                            <h3>
                                Product About :
                            </h3>
                            <p>
                                <?php echo $products[$i]["about"]; ?>

                            </p>
                        </li>
                        <li>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $products[$i]["id"] ?>">
                                <input type="hidden" name="size" value="<?php echo $products[$i]["size"] ?>">
                                <input type="hidden" name="name" value="<?php echo $products[$i]["name"] ?>">
                                <input type="hidden" name="about" value="<?php echo $products[$i]["about"] ?>">
                                <input type="submit" name="add" value="add to favorite">
                            </form>
                        </li>
                    </ul>
                </div>
            <?php endfor ?>
        <?php endif ?>
        <!-- Display only 15 products end -->
    </div>
</body>

</html>

<!--[x] Add a static array that has 60 products. -->
<!--[x] Display only 15 products. -->
<!--[x] Search about and get a specific product using search. -->
<!--[x] Create a form for adding a new product. -->
<!--[x] Save/Store favorite's products using session. -->
<!--[ ] Save the last 3 products that the user searched about using Cookies. -->
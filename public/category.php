<?
	require_once("../libraries/config.lib.php");
	require_once("../libraries/database.lib.php");
	require_once("../libraries/model.lib.php");
	require_once("../libraries/form.lib.php");
	require_once("../libraries/cart.lib.php");
	require_once("../libraries/collection.lib.php");

	$products = new Collection("tb_products", "category_id", $_GET["id"]);

	include("../views/header.php");
	include("../views/product_list.php");
	include("../views/footer.php");
<?php
session_start();
require_once('database.php');
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$icon = $_POST['icon'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	// checking empty fields
	if (empty($icon) || empty($title) || empty($price)) {

		if (empty($icon)) {
			echo "<font color='red'>icon field is empty.</font><br/>";
		}

		if (empty($title)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}

		if (empty($price)) {
			echo "<font color='red'>price field is empty.</font><br/>";
		}
	} else {
		//updating the table
		$sql = "UPDATE products SET icon=:icon, title=:title, price=:price WHERE id=:id";
		$query = $db->prepare($sql);
		// die($sql);


		$query->bindparam(':id', $id);
		$query->bindparam(':icon', $icon);
		$query->bindparam(':title', $title);
		$query->bindparam(':price', $price);
		$query->execute();
		$_SESSION["update"] = "Product Updated Successfully!";
		header("Location: ../dashboard/view-all-products.php");
	}
}

<?php 
if (!isset($_SESSION['pseudo']) AND empty($_SESSION['pseudo'])) {
	header("Location:index.php");
}
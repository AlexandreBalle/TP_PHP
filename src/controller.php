<?php

	require('function.php');
	require_once('form.php');
	
	// ConnexionDB
	$PDO = connexionDB();
	// Login - Logout
	if(isset($_POST["loginBDD"])) {
		$userName = connexionUserDB($PDO, $_POST["uname"], $_POST["psw"]);
	} else if(isset($_POST["logoutBDD"])) {
		session_unset();
	} else if(isset($_POST["signupBDD"])) {
		$alert = addUser($PDO, $_POST["unamesignup"], $_POST["pswsignup"]); 
	}

	if (isset($_SESSION["connexion"]))
	{
		// New advert
		if(isset($_POST["advertPost"])) {
			addAdvert($PDO, $_POST["titleAdvert"], $_POST["contentAdvert"], $_SESSION["id"]);
		}

		// New Comment
		if(isset($_POST["advertComment"])) {
			addComment($PDO, $_POST["advertCommentUser"], $_POST["advertCommentContent"], $_POST["id"]);
			$myArrayComment = viewAllCommentByArticle($PDO, $_POST["id"]);
		}

		// View Advert
		if($_GET["article"] == "editOne" || $_GET["article"] == "showOne" && isset($_GET["id"]) && !empty($_GET["id"])) {
			$myadvert = viewAdvert($PDO, $_GET["id"]);

		// View all Advert
		} else if($_GET["article"] == "showAll" && isset($_GET['page'])) {
			$advertPerPage=5; 
			$pages=ceil(countAdvert($PDO)/$advertPerPage);

	     	$actualPage=intval($_GET['page']);
		 
		    if($actualPage>$pages) 
		    {
		          $actualPage=$pages;
		    }

			$pagePosition=($actualPage-1)*$advertPerPage;
			$myArrayAdvert = showAdvertByPage($PDO, $pagePosition, $advertPerPage);

		// Delete Advert
		} else if ($_GET["article"] == "deleteOne" && isset($_GET["id"]) && !empty($_GET["id"])) {
			deleteAdvert($PDO, $_GET["id"]);

		// Edit Advert
		} else if ($_GET["advertEdit"] == "true") {
			editAdvert($PDO, $_GET["titleAdvertEdit"], $_GET["contentAdvertEdit"], $_GET["id"]);
		}
	}

	
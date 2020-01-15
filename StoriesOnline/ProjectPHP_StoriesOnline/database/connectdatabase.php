<?php
	require '../model/user.php';
	require '../model/story.php';

    $db = new mysqli("localhost", "root", "", "storiesonline");

    //story
    $selectListStory = "SELECT * FROM products";
	$listStory = $db->query($selectListStory)->fetch_all();

	$story = array();
	for($i=0; $i<count($listStory); $i++){
	array_push($story,new Story($listStory[$i][0], $listStory[$i][1], $listStory[$i][2], $listStory[$i][3], $listStory[$i][4], $listStory[$i][5]));
	}
	//account
	$selectListAccount = "SELECT * FROM account";
	$listAccount = $db->query($selectListAccount)->fetch_all();

	$user = array();
	for($i=0; $i<count($listAccount); $i++){
	array_push($user,new User($listAccount[$i][0], $listAccount[$i][1], $listAccount[$i][2], $listAccount[$i][3]));
	}
	// content
	$selectContent = "SELECT * FROM content";
    $listContent = $db->query($selectContent)->fetch_all();

?>
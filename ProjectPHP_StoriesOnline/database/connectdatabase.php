<?php
	require '../model/user.php';
	require '../model/story.php';
	require '../model/content.php';

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
    $listChapter = $db->query($selectContent)->fetch_all();

    $content = array();
    for($i=0; $i<count($listChapter); $i++){
	array_push($content,new Content($listChapter[$i][0], $listChapter[$i][1], $listChapter[$i][2], $listChapter[$i][3],$listChapter[$i][4]));
	}
?>
<?php
	function onError($str) {
		exit(json_encode(array('error'=> $str)));
	}

	if(!array_key_exists('user', $_GET)) onError('User undefined');

	$mysqli = new mysqli('localhost', 'test_ng_php', 'test_ng_php', 'test_ng_php');
	$result = $mysqli->query($sql = sprintf(
		'SELECT `log` FROM `logs` WHERE `user` LIKE \'%s\'',
		$mysqli->real_escape_string($_GET['user'])
	));
	if(!$result) onError('Fail to query: ' . $sql);

	$logs = array_map(
		function($cols){return $cols[0];},
		$result->fetch_all()
	);

	echo json_encode(array('logs'=> $logs));
?>

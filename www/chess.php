<?php
//print_r("HERE!!!!!!");
require_once "../lib/dbconnect.php";
require_once "../lib/board.php";
require_once "../lib/game.php"; 

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
// $request = explode('/', trim($_SERVER['SCRIPT_NAME'],'/'));
// Σε περίπτωση που τρέχουμε php –S 
$input = json_decode(file_get_contents('php://input'),true);

# print_r($request );

 switch ($r=array_shift($request)) {
    case 'board' : 
	switch ($b=array_shift($request)) {
		case '': 
		case null: handle_board($method);break;
//		case 'piece': handle_piece($method, $request[0],$request[1],$input);
//					break;
	case 'player': handle_player($method, $request[0],$input);
//					break;
		default: header("HTTP/1.1 404 Not Found");
				break;
	}
		break;
	case 'status': 
		if(sizeof($request)==0) {handle_status($method);}
		else {header("HTTP/1.1 404 Not Found");}
		break;
//	case 'players': handle_player($method, $request,$input);
//			break;
    default: 	
	header("HTTP/1.1 404 Not Found");
    print "<h1>not FOUND</h1>";
	exit;
}


function handle_board($method) {
    if($method=='GET') {
            show_board();
    } else if ($method=='POST') {
           reset_board();
    } else {
        header('HTTP/1.1 405 Method Not Allowed');
    }
    
}

function handle_piece($method, $x,$y,$input) {
    ;
}

function handle_player($method, $p,$input) {
    ;
}

function handle_status($method) {
    if($method=='GET') {
        show_status();
    } else {
        header('HTTP/1.1 405 Method Not Allowed');
    }
}
?>
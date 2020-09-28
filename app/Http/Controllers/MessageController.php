<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send_message()
    {
    	$name=$_POST['name'];
    	$phone=$_POST['phone'];
    	
    	if (isset($_POST['msg'])) {
    		$msg=$_POST['msg'];
    	}else{
    		$msg='';
    	};

    	$message=new \App\Message();
    	$message->name=$name;
    	$message->phone=$phone;
    	$message->body=$msg;
    	$message->save();
    }

    public function send_question()
    {
    	$name=$_POST['name'];
    	$phone=$_POST['phone'];
    	$msg=$_POST['msg'];
    	
    	

    	$question=new \App\Question();
    	$question->username=$name;
    	$question->phone=$phone;
    	$question->question=$msg;
    	$question->save();
    }
}

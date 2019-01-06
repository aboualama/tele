<?php
 

if(!function_exists('responsejson')){

	function responsejson($status , $message , $date=null){     	
 
        $response = [ 
			'status'  => $status,
			'message' => $message,
			'date'    => $date,
        ];

        return response()->json($response); 
    }  
 
 
}
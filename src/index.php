<?php

namespace edev\helloWorld;

class say
{
	public function test($msg = "Hello World!")
	{
		return date("Y/m/d") . "- $msg";
	}
}	

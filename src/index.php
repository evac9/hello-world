<?php

namespace Edev\HelloWorld;

class Say
{
	public function test($msg = "Hello World!")
	{
		return date("Y/m/d") . "-$msg";
	}
}	

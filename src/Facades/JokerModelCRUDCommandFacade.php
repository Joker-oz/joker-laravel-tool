<?php


namespace OuZhou\JokerLaravelTool\Facades;


use Illuminate\Support\Facades\Facade;

class JokerModelCRUDCommandFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'JokerModelCRUDCommand';
	}
}
<?php


namespace OuZhou\OuZhouLaravelTool\Facades;


use Illuminate\Support\Facades\Facade;

class OuZhouModelCRUDCommandFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'OuZhouModelCRUDCommand';
	}
}
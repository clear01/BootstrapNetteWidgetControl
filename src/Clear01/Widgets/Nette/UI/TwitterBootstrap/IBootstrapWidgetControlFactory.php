<?php

namespace Clear01\Widgets\Nette\UI\TwitterBootstrap;

interface IBootstrapWidgetControlFactory
{
	/** @return \Clear01\Widgets\Nette\UI\TwitterBootstrap\BootstrapWidgetControl */
	public function create();
}
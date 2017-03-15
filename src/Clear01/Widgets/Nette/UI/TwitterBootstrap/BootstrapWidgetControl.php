<?php

namespace Clear01\Widgets\Nette\UI\TwitterBootstrap;

use \Clear01\Widgets\Nette\UI\BaseWidgetControl;
use Nette\Templating\ITemplate;

class BootstrapWidgetControl extends BaseWidgetControl
{

	protected function prepareTemplateRenderDashboardMode(ITemplate $template)
	{
		$this->template->setFile(__DIR__ . '/render.latte');
	}

	protected function prepareTemplateRenderEditMode(ITemplate $template)
	{
		$this->template->setFile(__DIR__ . '/edit.latte');
		$this->redrawControl('availableWidgets');
	}

	protected function prepareTemplateUpdateSingleWidget(ITemplate $template, $widgetIdToUpdate, $widgetWasSignalReceiver)
	{
		$this->template->setFile(__DIR__ . '/edit.latte');
		$this->redrawControl('updateWidget');
		if(!$widgetWasSignalReceiver) {	// widget combination could have been changed
			$this->redrawControl('availableWidgets');
		}
	}
}
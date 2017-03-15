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

	function handleRemoveWidget($widgetId)
	{
		parent::handleRemoveWidget($widgetId);
		$this->redrawControl('availableWidgets');
	}

	function handleInsertWidget($widgetTypeId, $beforeWidgetId = null)
	{
		parent::handleInsertWidget($widgetTypeId, $beforeWidgetId);
		$this->redrawControl('availableWidgets');
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
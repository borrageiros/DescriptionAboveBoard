<?php

namespace Kanboard\Plugin\DescriptionAboveBoard;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Helper\FormHelper;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:project:header:before', 'DescriptionAboveBoard:description/board');
        $this->route->addRoute('/project/:project_id/description/update', 'ProjectDescriptionController', 'update', 'DescriptionAboveBoard');
    }

    public function onStartup()
    {
    }

    public function getPluginName()
    {
        return 'Description above board';
    }

    public function getPluginDescription()
    {
        return t('Displays the projects description above the task board and allows for editing directly from there.');
    }

    public function getPluginAuthor()
    {
        return 'borrageiros';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/borrageiros/DescriptionAboveBoard';
    }
}


<?php

namespace Kanboard\Plugin\DescriptionAboveBoard;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Description above board';
    }

    public function getPluginDescription()
    {
        return t('Displays the project's description above the task board and allows for editing directly from there.');
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


<?php

namespace VV\T3visuellverstehen\ToolbarItems;

use TYPO3\CMS\Backend\Toolbar\ToolbarItemInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\View\StandaloneView;

class ContactToolbarItem implements ToolbarItemInterface
{
    /**
     * @return bool
     */
    public function checkAccess(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->getFluidTemplateObject('ContactToolbarItem.html')->render();
    }

    /**
     * @return string
     */
    public function getDropDown(): string
    {
        return $this->getFluidTemplateObject('ContactToolbarItemDropDown.html')->render();
    }

    /**
     * @return array
     */
    public function getAdditionalAttributes(): array
    {
        return [];
    }

    /**
     * @return bool
     */
    public function hasDropDown(): bool
    {
        return true;
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return 10;
    }

    /**
     * Returns a new standalone view, shorthand function
     *
     * @param string $filename
     * @return StandaloneView
     */
    protected function getFluidTemplateObject(string $filename): StandaloneView
    {
        $view = GeneralUtility::makeInstance(StandaloneView::class);
        $view->setLayoutRootPaths(['EXT:backend/Resources/Private/Layouts']);
        $view->setPartialRootPaths(['EXT:backend/Resources/Private/Partials/ToolbarItems']);
        $view->setTemplateRootPaths(['EXT:t3visuellverstehen/Resources/Private/Templates/ToolbarItems']);
        $view->setTemplate($filename);

        $view->getRequest()->setControllerExtensionName('Backend');
        return $view;
    }
}

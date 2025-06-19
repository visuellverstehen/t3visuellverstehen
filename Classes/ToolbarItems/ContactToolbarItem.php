<?php

namespace VV\T3visuellverstehen\ToolbarItems;

use Psr\Http\Message\ServerRequestInterface;
use TYPO3\CMS\Backend\Toolbar\ToolbarItemInterface;
use TYPO3\CMS\Backend\Toolbar\RequestAwareToolbarItemInterface;
use TYPO3\CMS\Backend\View\BackendViewFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\View\ViewInterface;

class ContactToolbarItem implements ToolbarItemInterface, RequestAwareToolbarItemInterface
{
    private ServerRequestInterface $request;

    public function __construct(private readonly BackendViewFactory $backendViewFactory) {}

    public function setRequest(ServerRequestInterface $request): void
    {
        $this->request = $request;
    }

    public function checkAccess(): bool
    {
        return true;
    }

    public function getItem(): string
    {
        return file_get_contents(GeneralUtility::getFileAbsFileName('EXT:t3visuellverstehen/Resources/Private/Templates/ToolbarItems/ContactToolbarItem.html'));
    }

    public function getDropDown(): string
    {
        return $this->backendViewFactory->create($this->request, ['t3visuellverstehen'])
            ->render('ToolbarItems/ContactToolbarItemDropDown.html');
    }

    public function getAdditionalAttributes(): array
    {
        return [];
    }

    public function hasDropDown(): bool
    {
        return true;
    }

    public function getIndex(): int
    {
        return 10;
    }
}

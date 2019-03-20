<?php
namespace Ksjogo\ReactStyled\ViewHelpers;

require_once "react.php";
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GravatarViewHelper extends AbstractViewHelper
{
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        return 'World';
    }
}

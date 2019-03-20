<?php
namespace Ksjogo\ReactStyled\ViewHelpers;

require_once "react.php";
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class ReactViewHelper extends AbstractViewHelper
{
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        list($err, $output) = PHPReact('./SSR/example.tsx');
        if ($err)
            return 'Could not SSR';
        else
            return $output;
    }
}

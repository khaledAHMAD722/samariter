<?php

class Standard_action_gallery_13be1ef1e68be420afafcc4db3fca81d906ed532 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'mask' => 
  array (
    0 => 'MASK\\Mask\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['as'] = NULL;
$arguments1['variants'] = NULL;
$arguments1['multiplier'] = NULL;
$arguments1['gutters'] = NULL;
$arguments1['corrections'] = NULL;
$arguments1['aspectRatio'] = NULL;
$arguments1['as'] = 'variants';
$array3 = array (
);$arguments1['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array3);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string4 = '{data.aspect_ratio as float}';
$array5 = array (
  0 => '{data.aspect_ratio as float}',
  1 => '{data.aspect_ratio as float}',
);
$arguments1['aspectRatio'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string4, $array5);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'itemsPerPage';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string8 = '{data.items_per_page as integer}';
$array9 = array (
  0 => '{data.items_per_page as integer}',
  1 => '{data.items_per_page as integer}',
);
$arguments6['value'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string8, $array9);
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['value'] = NULL;
$arguments15['name'] = NULL;
$arguments15['name'] = 'itemsPerPage';
$arguments15['value'] = 10;
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('itemsPerPage', $array13);
$array12['1'] = ' <= 0';

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 0);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = $renderChildrenClosure11;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\PaginateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['name'] = NULL;
$arguments27['name'] = 'files';
$array29 = array (
);$arguments27['value'] = $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems', $array29);
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['debug'] = true;
$arguments30['partial'] = 'Media/Gallery';
$arguments30['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
    ';
return $output26;
};
$arguments17 = array();
$arguments17['id'] = NULL;
$arguments17['objects'] = NULL;
$arguments17['configuration'] = array (
  'itemsPerPage' => 10,
  'insertAbove' => false,
  'insertBelow' => true,
);
$output19 = '';

$output19 .= 'gallery-';
$array20 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$arguments17['id'] = $output19;
$array21 = array (
);$arguments17['objects'] = $renderingContext->getVariableProvider()->getByPath('files', $array21);
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['itemsPerPage'] = $renderingContext->getVariableProvider()->getByPath('itemsPerPage', $array23);
$output24 = '';

$output24 .= 'c';
$array25 = array (
);
$output24 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array25);
$array22['section'] = $output24;
$arguments17['configuration'] = $array22;

$output0 .= BK2K\BootstrapPackage\ViewHelpers\Data\PaginateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output33 = '';

$output33 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'Default';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output33 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['as'] = NULL;
$arguments39['variants'] = NULL;
$arguments39['multiplier'] = NULL;
$arguments39['gutters'] = NULL;
$arguments39['corrections'] = NULL;
$arguments39['aspectRatio'] = NULL;
$arguments39['as'] = 'variants';
$array41 = array (
);$arguments39['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array41);
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string42 = '{data.aspect_ratio as float}';
$array43 = array (
  0 => '{data.aspect_ratio as float}',
  1 => '{data.aspect_ratio as float}',
);
$arguments39['aspectRatio'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string42, $array43);

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['value'] = NULL;
$arguments44['name'] = NULL;
$arguments44['name'] = 'itemsPerPage';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string46 = '{data.items_per_page as integer}';
$array47 = array (
  0 => '{data.items_per_page as integer}',
  1 => '{data.items_per_page as integer}',
);
$arguments44['value'] = \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string46, $array47);
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output38 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'itemsPerPage';
$arguments53['value'] = 10;
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('itemsPerPage', $array51);
$array50['1'] = ' <= 0';

$expression52 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 0);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output38 .= '
    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\PaginateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['value'] = NULL;
$arguments65['name'] = NULL;
$arguments65['name'] = 'files';
$array67 = array (
);$arguments65['value'] = $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems', $array67);
$renderChildrenClosure66 = ($arguments65['value'] !== null) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66;
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output64 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['debug'] = true;
$arguments68['partial'] = 'Media/Gallery';
$arguments68['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output64 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output64 .= '
    ';
return $output64;
};
$arguments55 = array();
$arguments55['id'] = NULL;
$arguments55['objects'] = NULL;
$arguments55['configuration'] = array (
  'itemsPerPage' => 10,
  'insertAbove' => false,
  'insertBelow' => true,
);
$output57 = '';

$output57 .= 'gallery-';
$array58 = array (
);
$output57 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array58);
$arguments55['id'] = $output57;
$array59 = array (
);$arguments55['objects'] = $renderingContext->getVariableProvider()->getByPath('files', $array59);
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['itemsPerPage'] = $renderingContext->getVariableProvider()->getByPath('itemsPerPage', $array61);
$output62 = '';

$output62 .= 'c';
$array63 = array (
);
$output62 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array63);
$array60['section'] = $output62;
$arguments55['configuration'] = $array60;

$output38 .= BK2K\BootstrapPackage\ViewHelpers\Data\PaginateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output38 .= '

';
return $output38;
};
$arguments36 = array();
$arguments36['name'] = NULL;
$arguments36['name'] = 'Main';

$output33 .= NULL;

$output33 .= '

';

return $output33;
}


}
#
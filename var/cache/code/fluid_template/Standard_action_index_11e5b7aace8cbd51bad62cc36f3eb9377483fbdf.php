<?php

class Standard_action_index_11e5b7aace8cbd51bad62cc36f3eb9377483fbdf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
    <nav role="navigation" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'pagination.aria.label';
$arguments9['extensionName'] = 'BootstrapPackage';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '">
        <ul class="pagination">

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                <li class="page-item page-item-previous">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'pagination.aria.goto.previous';
$arguments19['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);
};
$arguments17 = array();
$arguments17['value'] = NULL;
$arguments17['name'] = NULL;
$arguments17['name'] = 'ariaLabel';
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                        <span class="page-link-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'pagination.previous';
$arguments28['extensionName'] = 'BootstrapPackage';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '</span>
                    ';
return $output27;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['aria'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['paginationId'] = NULL;
$arguments21['paginationPage'] = NULL;
$arguments21['class'] = 'page-link';
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array24);
$arguments21['additionalAttributes'] = $array23;
$array25 = array (
);$arguments21['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array25);
$array26 = array (
);$arguments21['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array26);

$output16 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
                </li>
            ';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output8 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['key'] = NULL;
$arguments76['id'] = NULL;
$arguments76['default'] = NULL;
$arguments76['arguments'] = NULL;
$arguments76['extensionName'] = NULL;
$arguments76['languageKey'] = NULL;
$arguments76['alternativeLanguageKeys'] = NULL;
$arguments76['key'] = 'pagination.aria.current.page';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array79);
$arguments76['arguments'] = $array78;
$arguments76['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
};
$arguments74 = array();
$arguments74['value'] = NULL;
$arguments74['name'] = NULL;
$arguments74['name'] = 'ariaLabel';
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output73 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output73 .= '
                        <li class="page-item active">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
                                <span class="page-link-title">';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array87)]);

$output86 .= '</span>
                            ';
return $output86;
};
$arguments80 = array();
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['aria'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['paginationId'] = NULL;
$arguments80['paginationPage'] = NULL;
$arguments80['class'] = 'page-link';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array83);
$array82['aria-current'] = 'true';
$arguments80['additionalAttributes'] = $array82;
$array84 = array (
);$arguments80['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array84);
$array85 = array (
);$arguments80['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array85);

$output73 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output73 .= '
                        </li>
                    ';
return $output73;
};
$arguments71 = array();

$output70 .= '';

$output70 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'pagination.aria.goto.page';
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array96);
$arguments93['arguments'] = $array95;
$arguments93['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
};
$arguments91 = array();
$arguments91['value'] = NULL;
$arguments91['name'] = NULL;
$arguments91['name'] = 'ariaLabel';
$renderChildrenClosure92 = ($arguments91['value'] !== null) ? function() use ($arguments91) { return $arguments91['value']; } : $renderChildrenClosure92;
$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
                        <li class="page-item">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
                                <span class="page-link-title">';
$array104 = array (
);
$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array104)]);

$output103 .= '</span>
                            ';
return $output103;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['aria'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['paginationId'] = NULL;
$arguments97['paginationPage'] = NULL;
$arguments97['class'] = 'page-link';
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array100);
$arguments97['additionalAttributes'] = $array99;
$array101 = array (
);$arguments97['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array101);
$array102 = array (
);$arguments97['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array102);

$output90 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output90 .= '
                        </li>
                    ';
return $output90;
};
$arguments88 = array();
$arguments88['if'] = NULL;

$output70 .= '';

$output70 .= '
                ';
return $output70;
};
$arguments34 = array();
$arguments34['then'] = NULL;
$arguments34['else'] = NULL;
$arguments34['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array66 = array();
$array67 = array (
);$array66['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array67);
$array66['1'] = ' == ';
$array68 = array (
);$array66['2'] = $renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber', $array68);

$expression69 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments34['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array66)
					),
					$renderingContext
				);
$arguments34['__thenClosure'] = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['languageKey'] = NULL;
$arguments39['alternativeLanguageKeys'] = NULL;
$arguments39['key'] = 'pagination.aria.current.page';
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array42);
$arguments39['arguments'] = $array41;
$arguments39['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);
};
$arguments37 = array();
$arguments37['value'] = NULL;
$arguments37['name'] = NULL;
$arguments37['name'] = 'ariaLabel';
$renderChildrenClosure38 = ($arguments37['value'] !== null) ? function() use ($arguments37) { return $arguments37['value']; } : $renderChildrenClosure38;
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
                        <li class="page-item active">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                                <span class="page-link-title">';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array50)]);

$output49 .= '</span>
                            ';
return $output49;
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['aria'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['paginationId'] = NULL;
$arguments43['paginationPage'] = NULL;
$arguments43['class'] = 'page-link';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array46);
$array45['aria-current'] = 'true';
$arguments43['additionalAttributes'] = $array45;
$array47 = array (
);$arguments43['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array47);
$array48 = array (
);$arguments43['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array48);

$output36 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output36 .= '
                        </li>
                    ';
return $output36;
};
$arguments34['__elseClosures'][] = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'pagination.aria.goto.page';
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['0'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array57);
$arguments54['arguments'] = $array56;
$arguments54['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);
};
$arguments52 = array();
$arguments52['value'] = NULL;
$arguments52['name'] = NULL;
$arguments52['name'] = 'ariaLabel';
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
                        <li class="page-item">
                            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                                <span class="page-link-title">';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageNumber', $array65)]);

$output64 .= '</span>
                            ';
return $output64;
};
$arguments58 = array();
$arguments58['additionalAttributes'] = NULL;
$arguments58['data'] = NULL;
$arguments58['aria'] = NULL;
$arguments58['class'] = NULL;
$arguments58['dir'] = NULL;
$arguments58['id'] = NULL;
$arguments58['lang'] = NULL;
$arguments58['style'] = NULL;
$arguments58['title'] = NULL;
$arguments58['accesskey'] = NULL;
$arguments58['tabindex'] = NULL;
$arguments58['onclick'] = NULL;
$arguments58['paginationId'] = NULL;
$arguments58['paginationPage'] = NULL;
$arguments58['class'] = 'page-link';
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array61);
$arguments58['additionalAttributes'] = $array60;
$array62 = array (
);$arguments58['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array62);
$array63 = array (
);$arguments58['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pageNumber', $array63);

$output51 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output51 .= '
                        </li>
                    ';
return $output51;
};

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
            ';
return $output33;
};
$arguments30 = array();
$arguments30['each'] = NULL;
$arguments30['as'] = NULL;
$arguments30['key'] = NULL;
$arguments30['reverse'] = false;
$arguments30['iteration'] = NULL;
$array32 = array (
);$arguments30['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.allPageNumbers', $array32);
$arguments30['as'] = 'pageNumber';

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output8 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                <li class="page-item page-item-next">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['key'] = NULL;
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$arguments113['languageKey'] = NULL;
$arguments113['alternativeLanguageKeys'] = NULL;
$arguments113['key'] = 'pagination.aria.goto.next';
$arguments113['extensionName'] = 'BootstrapPackage';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);
};
$arguments111 = array();
$arguments111['value'] = NULL;
$arguments111['name'] = NULL;
$arguments111['name'] = 'ariaLabel';
$renderChildrenClosure112 = ($arguments111['value'] !== null) ? function() use ($arguments111) { return $arguments111['value']; } : $renderChildrenClosure112;
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                        <span class="page-link-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['key'] = NULL;
$arguments122['id'] = NULL;
$arguments122['default'] = NULL;
$arguments122['arguments'] = NULL;
$arguments122['extensionName'] = NULL;
$arguments122['languageKey'] = NULL;
$arguments122['alternativeLanguageKeys'] = NULL;
$arguments122['key'] = 'pagination.next';
$arguments122['extensionName'] = 'BootstrapPackage';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output121 .= '</span>
                    ';
return $output121;
};
$arguments115 = array();
$arguments115['additionalAttributes'] = NULL;
$arguments115['data'] = NULL;
$arguments115['aria'] = NULL;
$arguments115['class'] = NULL;
$arguments115['dir'] = NULL;
$arguments115['id'] = NULL;
$arguments115['lang'] = NULL;
$arguments115['style'] = NULL;
$arguments115['title'] = NULL;
$arguments115['accesskey'] = NULL;
$arguments115['tabindex'] = NULL;
$arguments115['onclick'] = NULL;
$arguments115['paginationId'] = NULL;
$arguments115['paginationPage'] = NULL;
$arguments115['class'] = 'page-link';
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['aria-label'] = $renderingContext->getVariableProvider()->getByPath('ariaLabel', $array118);
$arguments115['additionalAttributes'] = $array117;
$array119 = array (
);$arguments115['paginationId'] = $renderingContext->getVariableProvider()->getByPath('id', $array119);
$array120 = array (
);$arguments115['paginationPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array120);

$output110 .= BK2K\BootstrapPackage\ViewHelpers\Link\PaginateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output110 .= '
                </li>
            ';
return $output110;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber', $array108);

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = $renderChildrenClosure106;

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output8 .= '

        </ul>
    </nav>
';
return $output8;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('pagination.allPageNumbers', $array6);
};
$arguments4 = array();
$arguments4['subject'] = NULL;
$renderChildrenClosure5 = ($arguments4['subject'] !== null) ? function() use ($arguments4) { return $arguments4['subject']; } : $renderChildrenClosure5;$array3['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);
$array3['1'] = ' > 1';

$expression7 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#
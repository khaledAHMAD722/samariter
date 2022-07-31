<?php

class partial_Form_Navigation_08dae8d145e2950a71ac5a3dcf4ded99d1fbb05e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '
<nav class="form-navigation">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                <span class="btn-group previous">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['aria'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['respectSubmittedDataValue'] = true;
$arguments7['property'] = '__currentPage';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage.index', $array9);
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array10['0'] = 'false';

$expression11 = function($context) {return FALSE;};
$arguments7['respectSubmittedDataValue'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['element'] = NULL;
$arguments16['property'] = NULL;
$arguments16['renderingOptionProperty'] = NULL;
$array18 = array (
);$arguments16['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array18);
$arguments16['renderingOptionProperty'] = 'previousButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['name'] = NULL;
$arguments12['value'] = NULL;
$arguments12['property'] = NULL;
$arguments12['autofocus'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['form'] = NULL;
$arguments12['formaction'] = NULL;
$arguments12['formenctype'] = NULL;
$arguments12['formmethod'] = NULL;
$arguments12['formnovalidate'] = NULL;
$arguments12['formtarget'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['type'] = 'submit';
$arguments12['type'] = 'button';
$output14 = '';

$output14 .= 'document.forms[\'';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier', $array15);

$output14 .= '\'].submit();';
$arguments12['onclick'] = $output14;
$arguments12['class'] = 'btn btn-cancel';
$arguments12['formnovalidate'] = 'formnovalidate';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </span>
            ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['element'] = NULL;
$arguments48['property'] = NULL;
$arguments48['renderingOptionProperty'] = NULL;
$array50 = array (
);$arguments48['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array50);
$arguments48['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['aria'] = NULL;
$arguments45['name'] = NULL;
$arguments45['value'] = NULL;
$arguments45['property'] = NULL;
$arguments45['autofocus'] = NULL;
$arguments45['disabled'] = NULL;
$arguments45['form'] = NULL;
$arguments45['formaction'] = NULL;
$arguments45['formenctype'] = NULL;
$arguments45['formmethod'] = NULL;
$arguments45['formnovalidate'] = NULL;
$arguments45['formtarget'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['type'] = 'submit';
$arguments45['property'] = '__currentPage';
$array47 = array (
);$arguments45['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array47);
$arguments45['class'] = 'btn btn-primary';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                    </span>
                ';
return $output44;
};
$arguments42 = array();

$output41 .= '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['element'] = NULL;
$arguments60['property'] = NULL;
$arguments60['renderingOptionProperty'] = NULL;
$array62 = array (
);$arguments60['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array62);
$arguments60['renderingOptionProperty'] = 'submitButtonLabel';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
                        ';
return $output59;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['aria'] = NULL;
$arguments54['name'] = NULL;
$arguments54['value'] = NULL;
$arguments54['property'] = NULL;
$arguments54['autofocus'] = NULL;
$arguments54['disabled'] = NULL;
$arguments54['form'] = NULL;
$arguments54['formaction'] = NULL;
$arguments54['formenctype'] = NULL;
$arguments54['formmethod'] = NULL;
$arguments54['formnovalidate'] = NULL;
$arguments54['formtarget'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['type'] = 'submit';
$arguments54['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array58);
};
$arguments56 = array();
$arguments56['subject'] = NULL;
$renderChildrenClosure57 = ($arguments56['subject'] !== null) ? function() use ($arguments56) { return $arguments56['subject']; } : $renderChildrenClosure57;$arguments54['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
$arguments54['class'] = 'btn btn-primary';

$output53 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                    </span>
                ';
return $output53;
};
$arguments51 = array();
$arguments51['if'] = NULL;

$output41 .= '';

$output41 .= '
            ';
return $output41;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['element'] = NULL;
$arguments25['property'] = NULL;
$arguments25['renderingOptionProperty'] = NULL;
$array27 = array (
);$arguments25['element'] = $renderingContext->getVariableProvider()->getByPath('form.currentPage', $array27);
$arguments25['renderingOptionProperty'] = 'nextButtonLabel';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['aria'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['autofocus'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['form'] = NULL;
$arguments22['formaction'] = NULL;
$arguments22['formenctype'] = NULL;
$arguments22['formmethod'] = NULL;
$arguments22['formnovalidate'] = NULL;
$arguments22['formtarget'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['type'] = 'submit';
$arguments22['property'] = '__currentPage';
$array24 = array (
);$arguments22['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array24);
$arguments22['class'] = 'btn btn-primary';

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
                    </span>
                ';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['element'] = NULL;
$arguments35['property'] = NULL;
$arguments35['renderingOptionProperty'] = NULL;
$array37 = array (
);$arguments35['element'] = $renderingContext->getVariableProvider()->getByPath('form', $array37);
$arguments35['renderingOptionProperty'] = 'submitButtonLabel';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
                        ';
return $output34;
};
$arguments29 = array();
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['aria'] = NULL;
$arguments29['name'] = NULL;
$arguments29['value'] = NULL;
$arguments29['property'] = NULL;
$arguments29['autofocus'] = NULL;
$arguments29['disabled'] = NULL;
$arguments29['form'] = NULL;
$arguments29['formaction'] = NULL;
$arguments29['formenctype'] = NULL;
$arguments29['formmethod'] = NULL;
$arguments29['formnovalidate'] = NULL;
$arguments29['formtarget'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['type'] = 'submit';
$arguments29['property'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$array33 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array33);
};
$arguments31 = array();
$arguments31['subject'] = NULL;
$renderChildrenClosure32 = ($arguments31['subject'] !== null) ? function() use ($arguments31) { return $arguments31['subject']; } : $renderChildrenClosure32;$arguments29['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
$arguments29['class'] = 'btn btn-primary';

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                    </span>
                ';
return $output28;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
        </div>
    </div>
</nav>

';

return $output0;
}


}
#
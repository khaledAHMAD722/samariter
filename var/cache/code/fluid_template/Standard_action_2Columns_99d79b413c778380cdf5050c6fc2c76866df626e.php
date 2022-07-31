<?php

class Standard_action_2Columns_99d79b413c778380cdf5050c6fc2c76866df626e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$array5 = array (
);$array3['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array5);
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array10);
$array9['colPos'] = 8;
$array11 = array (
);$array9['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array11);
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['data'] = NULL;
$arguments12['typoscriptObjectPath'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$arguments12['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array15);
$array14['colPos'] = 0;
$array16 = array (
);$array14['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array16);
$arguments12['data'] = $array14;
$renderChildrenClosure13 = ($arguments12['data'] !== null) ? function() use ($arguments12) { return $arguments12['data']; } : $renderChildrenClosure13;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </main>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['data'] = NULL;
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 2;
$array21 = array (
);$array19['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.2.slide', $array21);
$arguments17['data'] = $array19;
$renderChildrenClosure18 = ($arguments17['data'] !== null) ? function() use ($arguments17) { return $arguments17['data']; } : $renderChildrenClosure18;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['data'] = NULL;
$arguments22['typoscriptObjectPath'] = NULL;
$arguments22['currentValueKey'] = NULL;
$arguments22['table'] = '';
$arguments22['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array25);
$array24['colPos'] = 9;
$array26 = array (
);$array24['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array26);
$arguments22['data'] = $array24;
$renderChildrenClosure23 = ($arguments22['data'] !== null) ? function() use ($arguments22) { return $arguments22['data']; } : $renderChildrenClosure23;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '

';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output27 = '';

$output27 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['debug'] = true;
$arguments28['partial'] = 'Structure/FooterContent';
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '

';

return $output27;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output31 = '';

$output31 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['name'] = NULL;
$arguments32['name'] = 'Default';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output31 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['data'] = NULL;
$arguments37['typoscriptObjectPath'] = NULL;
$arguments37['currentValueKey'] = NULL;
$arguments37['table'] = '';
$arguments37['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array39 = array();
$array40 = array (
);$array39['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array40);
$array39['colPos'] = 3;
$array41 = array (
);$array39['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array41);
$arguments37['data'] = $array39;
$renderChildrenClosure38 = ($arguments37['data'] !== null) ? function() use ($arguments37) { return $arguments37['data']; } : $renderChildrenClosure38;
$output36 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '

';
return $output36;
};
$arguments34 = array();
$arguments34['name'] = NULL;
$arguments34['name'] = 'Border';

$output31 .= NULL;

$output31 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['data'] = NULL;
$arguments45['typoscriptObjectPath'] = NULL;
$arguments45['currentValueKey'] = NULL;
$arguments45['table'] = '';
$arguments45['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array48);
$array47['colPos'] = 8;
$array49 = array (
);$array47['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array49);
$arguments45['data'] = $array47;
$renderChildrenClosure46 = ($arguments45['data'] !== null) ? function() use ($arguments45) { return $arguments45['data']; } : $renderChildrenClosure46;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['data'] = NULL;
$arguments50['typoscriptObjectPath'] = NULL;
$arguments50['currentValueKey'] = NULL;
$arguments50['table'] = '';
$arguments50['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array53);
$array52['colPos'] = 0;
$array54 = array (
);$array52['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array54);
$arguments50['data'] = $array52;
$renderChildrenClosure51 = ($arguments50['data'] !== null) ? function() use ($arguments50) { return $arguments50['data']; } : $renderChildrenClosure51;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output44 .= '
                </main>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['data'] = NULL;
$arguments55['typoscriptObjectPath'] = NULL;
$arguments55['currentValueKey'] = NULL;
$arguments55['table'] = '';
$arguments55['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array58);
$array57['colPos'] = 2;
$array59 = array (
);$array57['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.2.slide', $array59);
$arguments55['data'] = $array57;
$renderChildrenClosure56 = ($arguments55['data'] !== null) ? function() use ($arguments55) { return $arguments55['data']; } : $renderChildrenClosure56;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output44 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['data'] = NULL;
$arguments60['typoscriptObjectPath'] = NULL;
$arguments60['currentValueKey'] = NULL;
$arguments60['table'] = '';
$arguments60['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array63);
$array62['colPos'] = 9;
$array64 = array (
);$array62['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array64);
$arguments60['data'] = $array62;
$renderChildrenClosure61 = ($arguments60['data'] !== null) ? function() use ($arguments60) { return $arguments60['data']; } : $renderChildrenClosure61;
$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output44 .= '

';
return $output44;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Main';

$output31 .= NULL;

$output31 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '

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
$arguments68['partial'] = 'Structure/FooterContent';
$arguments68['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '

';
return $output67;
};
$arguments65 = array();
$arguments65['name'] = NULL;
$arguments65['name'] = 'Footer';

$output31 .= NULL;

$output31 .= '

';

return $output31;
}


}
#
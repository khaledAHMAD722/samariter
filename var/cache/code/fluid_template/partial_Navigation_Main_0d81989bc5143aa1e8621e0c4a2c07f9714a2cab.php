<?php

class partial_Navigation_Main_0d81989bc5143aa1e8621e0c4a2c07f9714a2cab extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments168 = array();

$output167 .= '';

$output167 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['then'] = NULL;
$arguments173['else'] = NULL;
$arguments173['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array175 = array();
$array176 = array (
);$array175['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array176);

$expression177 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments173['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression177(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array175)
					),
					$renderingContext
				);
$arguments173['then'] = ' active';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['then'] = NULL;
$arguments178['else'] = NULL;
$arguments178['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array180 = array();
$array181 = array (
);$array180['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array181);

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments178['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)
					),
					$renderingContext
				);
$arguments178['then'] = ' dropdown dropdown-hover';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output172 .= '">
                            <a href="';
$array183 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array183)]);

$output172 .= '" id="nav-item-';
$array184 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array184)]);

$output172 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array188);

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression189(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['then'] = ' dropdown-toggle';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output172 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = array();
$array193 = array (
);$array192['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array193);

$expression194 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$output195 = '';

$output195 .= ' target="';
$array196 = array (
);
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array196)]);

$output195 .= '"';
$arguments190['then'] = $output195;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array200);
$array199['1'] = ' == "_blank"';

$expression201 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['then'] = ' rel="noopener noreferrer"';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output172 .= ' title="';
$array202 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array202)]);

$output172 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array206 = array (
);$array205['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array206);

$expression207 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);
$arguments203['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output172 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['icon'] = NULL;
$arguments215['height'] = NULL;
$arguments215['width'] = NULL;
$array217 = array (
);$arguments215['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array217);
$array218 = array (
);$arguments215['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array218);
$array219 = array (
);$arguments215['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array219);

$output214 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
                                    </span>
                                ';
return $output214;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array211);
$array210['1'] = ' && ';
$array212 = array (
);$array210['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array212);

$expression213 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output172 .= '
                                <span class="nav-link-text">';
$array220 = array (
);
$output172 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array220)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output172 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array232 = array (
);
$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array232)]);

$output231 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments281 = array();

$output280 .= '';

$output280 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
                                                <li>
                                                    <a href="';
$array286 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array286)]);

$output285 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['then'] = NULL;
$arguments287['else'] = NULL;
$arguments287['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array289 = array();
$array290 = array (
);$array289['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array290);

$expression291 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments287['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression291(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)
					),
					$renderingContext
				);
$arguments287['then'] = ' active';

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);

$output285 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$output297 = '';

$output297 .= ' target="';
$array298 = array (
);
$output297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array298)]);

$output297 .= '"';
$arguments292['then'] = $output297;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array302);
$array301['1'] = ' == "_blank"';

$expression303 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['then'] = ' rel="noopener noreferrer"';

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output285 .= ' title="';
$array304 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array304)]);

$output285 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['icon'] = NULL;
$arguments312['height'] = NULL;
$arguments312['width'] = NULL;
$array314 = array (
);$arguments312['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array314);
$array315 = array (
);$arguments312['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array315);
$array316 = array (
);$arguments312['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array316);

$output311 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
                                                            </span>
                                                        ';
return $output311;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array308);
$array307['1'] = ' && ';
$array309 = array (
);$array307['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array309);

$expression310 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$arguments305['__thenClosure'] = $renderChildrenClosure306;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output285 .= '
                                                        <span class="dropdown-text">';
$array317 = array (
);
$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array317)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments318 = array();
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = array();
$array321 = array (
);$array320['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array321);

$expression322 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression322(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = $renderChildrenClosure319;

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output285 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output285;
};
$arguments283 = array();
$arguments283['if'] = NULL;

$output280 .= '';

$output280 .= '
                                        ';
return $output280;
};
$arguments237 = array();
$arguments237['then'] = NULL;
$arguments237['else'] = NULL;
$arguments237['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array278);

$expression279 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments237['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments237['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments237['__elseClosures'][] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
                                                <li>
                                                    <a href="';
$array240 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array240)]);

$output239 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['then'] = NULL;
$arguments241['else'] = NULL;
$arguments241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array243 = array();
$array244 = array (
);$array243['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array244);

$expression245 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array243)
					),
					$renderingContext
				);
$arguments241['then'] = ' active';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output239 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['then'] = NULL;
$arguments246['else'] = NULL;
$arguments246['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array248 = array();
$array249 = array (
);$array248['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array249);

$expression250 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments246['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression250(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array248)
					),
					$renderingContext
				);
$output251 = '';

$output251 .= ' target="';
$array252 = array (
);
$output251 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array252)]);

$output251 .= '"';
$arguments246['then'] = $output251;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$arguments253['then'] = NULL;
$arguments253['else'] = NULL;
$arguments253['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array255 = array();
$array256 = array (
);$array255['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array256);
$array255['1'] = ' == "_blank"';

$expression257 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments253['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression257(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array255)
					),
					$renderingContext
				);
$arguments253['then'] = ' rel="noopener noreferrer"';

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$output239 .= ' title="';
$array258 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array258)]);

$output239 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['icon'] = NULL;
$arguments266['height'] = NULL;
$arguments266['width'] = NULL;
$array268 = array (
);$arguments266['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array268);
$array269 = array (
);$arguments266['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array269);
$array270 = array (
);$arguments266['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array270);

$output265 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);

$output265 .= '
                                                            </span>
                                                        ';
return $output265;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array262 = array (
);$array261['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array262);
$array261['1'] = ' && ';
$array263 = array (
);$array261['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array263);

$expression264 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = $renderChildrenClosure260;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output239 .= '
                                                        <span class="dropdown-text">';
$array271 = array (
);
$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array271)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments272 = array();
$arguments272['then'] = NULL;
$arguments272['else'] = NULL;
$arguments272['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array275 = array (
);$array274['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array275);

$expression276 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments272['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments272['__thenClosure'] = $renderChildrenClosure273;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output239 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output239;
};

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output236 .= '
                                    ';
return $output236;
};
$arguments233 = array();
$arguments233['each'] = NULL;
$arguments233['as'] = NULL;
$arguments233['key'] = NULL;
$arguments233['reverse'] = false;
$arguments233['iteration'] = NULL;
$array235 = array (
);$arguments233['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array235);
$arguments233['as'] = 'child';

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output231 .= '
                                </ul>
                            ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output172 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output172 .= '
                        </li>
                    ';
return $output172;
};
$arguments170 = array();
$arguments170['if'] = NULL;

$output167 .= '';

$output167 .= '
                ';
return $output167;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array165);

$expression166 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array41);
$array40['1'] = ' == "_blank"';

$expression42 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['then'] = ' rel="noopener noreferrer"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output13 .= ' title="';
$array43 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array43)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array47);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['icon'] = NULL;
$arguments56['height'] = NULL;
$arguments56['width'] = NULL;
$array58 = array (
);$arguments56['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array58);
$array59 = array (
);$arguments56['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array59);
$array60 = array (
);$arguments56['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array60);

$output55 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
                                    </span>
                                ';
return $output55;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array52);
$array51['1'] = ' && ';
$array53 = array (
);$array51['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array53);

$expression54 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array61 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array61)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array73 = array (
);
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array73)]);

$output72 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments122 = array();

$output121 .= '';

$output121 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                                                <li>
                                                    <a href="';
$array127 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array127)]);

$output126 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array131);

$expression132 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['then'] = ' active';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output126 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$output138 = '';

$output138 .= ' target="';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array139)]);

$output138 .= '"';
$arguments133['then'] = $output138;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array143);
$array142['1'] = ' == "_blank"';

$expression144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['then'] = ' rel="noopener noreferrer"';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output126 .= ' title="';
$array145 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array145)]);

$output126 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['icon'] = NULL;
$arguments153['height'] = NULL;
$arguments153['width'] = NULL;
$array155 = array (
);$arguments153['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array155);
$array156 = array (
);$arguments153['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array156);
$array157 = array (
);$arguments153['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array157);

$output152 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '
                                                            </span>
                                                        ';
return $output152;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array149);
$array148['1'] = ' && ';
$array150 = array (
);$array148['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array150);

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$arguments146['__thenClosure'] = $renderChildrenClosure147;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output126 .= '
                                                        <span class="dropdown-text">';
$array158 = array (
);
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array158)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['__thenClosure'] = $renderChildrenClosure160;

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output126 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output121 .= '';

$output121 .= '
                                        ';
return $output121;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments78['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments78['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
                                                <li>
                                                    <a href="';
$array81 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array81)]);

$output80 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['then'] = ' active';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output80 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$output92 = '';

$output92 .= ' target="';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array93)]);

$output92 .= '"';
$arguments87['then'] = $output92;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array97);
$array96['1'] = ' == "_blank"';

$expression98 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression98(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);
$arguments94['then'] = ' rel="noopener noreferrer"';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output80 .= ' title="';
$array99 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array99)]);

$output80 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['icon'] = NULL;
$arguments107['height'] = NULL;
$arguments107['width'] = NULL;
$array109 = array (
);$arguments107['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array109);
$array110 = array (
);$arguments107['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array110);
$array111 = array (
);$arguments107['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array111);

$output106 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                                            </span>
                                                        ';
return $output106;
};
$arguments100 = array();
$arguments100['then'] = NULL;
$arguments100['else'] = NULL;
$arguments100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array103);
$array102['1'] = ' && ';
$array104 = array (
);$array102['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array104);

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
$arguments100['__thenClosure'] = $renderChildrenClosure101;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output80 .= '
                                                        <span class="dropdown-text">';
$array112 = array (
);
$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array112)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array116);

$expression117 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression117(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = $renderChildrenClosure114;

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output80 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output80;
};

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                    ';
return $output77;
};
$arguments74 = array();
$arguments74['each'] = NULL;
$arguments74['as'] = NULL;
$arguments74['key'] = NULL;
$arguments74['reverse'] = false;
$arguments74['iteration'] = NULL;
$array76 = array (
);$arguments74['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array76);
$arguments74['as'] = 'child';

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output72 .= '
                                </ul>
                            ';
return $output72;
};
$arguments67 = array();
$arguments67['then'] = NULL;
$arguments67['else'] = NULL;
$arguments67['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array70);

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments67['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression71(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)
					),
					$renderingContext
				);
$arguments67['__thenClosure'] = $renderChildrenClosure68;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

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

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output323 = '';

$output323 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$output326 = '';

$output326 .= 'bp-page-header navbar navbar-mainnavigation navbar-';
$array327 = array (
);
$output326 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array327);
return $output326;
};
$arguments324 = array();
$arguments324['value'] = NULL;
$arguments324['name'] = NULL;
$arguments324['name'] = 'headerClass';
$renderChildrenClosure325 = ($arguments324['value'] !== null) ? function() use ($arguments324) { return $arguments324['value']; } : $renderChildrenClosure325;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext)]);

$output323 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$output330 = '';
$array331 = array (
);
$output330 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array331);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['then'] = NULL;
$arguments332['else'] = NULL;
$arguments332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array335);

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array334)
					),
					$renderingContext
				);
$arguments332['then'] = ' navbar-has-image';

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);
return $output330;
};
$arguments328 = array();
$arguments328['value'] = NULL;
$arguments328['name'] = NULL;
$arguments328['name'] = 'headerClass';
$renderChildrenClosure329 = ($arguments328['value'] !== null) ? function() use ($arguments328) { return $arguments328['value']; } : $renderChildrenClosure329;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext)]);

$output323 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
$output339 = '';
$array340 = array (
);
$output339 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array340);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['else'] = ' navbar-top';
$output346 = '';

$output346 .= ' navbar-';
$array347 = array (
);
$output346 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array347);

$output346 .= ' navbar-fixed-';
$array348 = array (
);
$output346 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array348);
$arguments341['then'] = $output346;

$output339 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);
return $output339;
};
$arguments337 = array();
$arguments337['value'] = NULL;
$arguments337['name'] = NULL;
$arguments337['name'] = 'headerClass';
$renderChildrenClosure338 = ($arguments337['value'] !== null) ? function() use ($arguments337) { return $arguments337['value']; } : $renderChildrenClosure338;
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext)]);

$output323 .= '
<header id="page-header" class="';
$array349 = array (
);
$output323 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass', $array349)]);

$output323 .= '">
    <div class="small-header">
        <div class="container">
            <div class="contact-info">
                <a href="tel:+4317261902"><i class="fa fa-phone"></i>  +43 1 726 19 02</a>
                <a href="#"><i class="fa fa-location-arrow" aria-hidden="true"></i>  Große Stadtgutgasse 28 1020 Wien</a>
                <a href="mailto:office@samariter-leopoldstadt.at"><i class="fa fa-envelope" aria-hidden="true"></i>  office@samariter-leopoldstadt.at</a>
            </div>
            <div class="social-icons">
                <a><i class="fa fa-facebook" aria-hidden="true"></i>  Facebook</a>
                <a><i class="fa fa-instagram" aria-hidden="true"></i>  Instagram</a>
                <a><i class="fa fa-youtube" aria-hidden="true"></i>  Youtube</a>
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="container logos-container">
            <div class="samariterbund-leopold-logo-container">
                <div class="header-buttons spenden"><a href="/spenden-stiften"><i class=\'fa fa-arrow-right\'></i> SPENDEN</a></div>
                <div class="header-buttons mitarbeit"><a href="/ueber-uns/jobs"><i class=\'fa fa-arrow-right\'></i> MITARBEIT</a></div>
                <img alt="samariterbund leopold" class="samariterbund-leopold-logo" src="https://samariter.ddev.site/fileadmin/user_upload/samariterbund-leopold.svg">
            </div>
            <div class="samariterbund-logo-container">
               <h1><a href="/"><img alt="samariterbund" class="samariterbund-logo" src="https://samariter.ddev.site/fileadmin/user_upload/samariterbund.svg"></a></h1>
            </div>
        </div>
    </div>
    <div class="container">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['key'] = NULL;
$arguments356['id'] = NULL;
$arguments356['default'] = NULL;
$arguments356['arguments'] = NULL;
$arguments356['extensionName'] = NULL;
$arguments356['languageKey'] = NULL;
$arguments356['alternativeLanguageKeys'] = NULL;
$arguments356['key'] = 'togglenavigation';
$arguments356['extensionName'] = 'bootstrap_package';

$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output355 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['section'] = NULL;
$arguments358['partial'] = NULL;
$arguments358['delegate'] = NULL;
$arguments358['renderable'] = NULL;
$arguments358['arguments'] = array (
);
$arguments358['optional'] = false;
$arguments358['default'] = NULL;
$arguments358['contentAs'] = NULL;
$arguments358['debug'] = true;
$arguments358['partial'] = 'DropIn/Navigation/MainBefore';
$arguments358['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output355 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['section'] = NULL;
$arguments361['partial'] = NULL;
$arguments361['delegate'] = NULL;
$arguments361['renderable'] = NULL;
$arguments361['arguments'] = array (
);
$arguments361['optional'] = false;
$arguments361['default'] = NULL;
$arguments361['contentAs'] = NULL;
$arguments361['debug'] = true;
$arguments361['section'] = 'MainNavigation';
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array364);
$array365 = array (
);$array363['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array365);
$arguments361['arguments'] = $array363;

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output355 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments366 = array();
$arguments366['section'] = NULL;
$arguments366['partial'] = NULL;
$arguments366['delegate'] = NULL;
$arguments366['renderable'] = NULL;
$arguments366['arguments'] = array (
);
$arguments366['optional'] = false;
$arguments366['default'] = NULL;
$arguments366['contentAs'] = NULL;
$arguments366['debug'] = true;
$arguments366['partial'] = 'DropIn/Navigation/MainAfter';
$arguments366['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output355 .= '
            </nav>
        ';
return $output355;
};
$arguments350 = array();
$arguments350['then'] = NULL;
$arguments350['else'] = NULL;
$arguments350['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array352 = array();
$array353 = array (
);$array352['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array353);

$expression354 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments350['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array352)
					),
					$renderingContext
				);
$arguments350['__thenClosure'] = $renderChildrenClosure351;

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output323 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure379 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output538 = '';

$output538 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments539 = array();

$output538 .= '';

$output538 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments544 = array();
$arguments544['then'] = NULL;
$arguments544['else'] = NULL;
$arguments544['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array546 = array();
$array547 = array (
);$array546['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array547);

$expression548 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments544['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression548(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array546)
					),
					$renderingContext
				);
$arguments544['then'] = ' active';

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['then'] = NULL;
$arguments549['else'] = NULL;
$arguments549['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array551 = array();
$array552 = array (
);$array551['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array552);

$expression553 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments549['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression553(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array551)
					),
					$renderingContext
				);
$arguments549['then'] = ' dropdown dropdown-hover';

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);

$output543 .= '">
                            <a href="';
$array554 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array554)]);

$output543 .= '" id="nav-item-';
$array555 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array555)]);

$output543 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments556 = array();
$arguments556['then'] = NULL;
$arguments556['else'] = NULL;
$arguments556['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array558 = array();
$array559 = array (
);$array558['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array559);

$expression560 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments556['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression560(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array558)
					),
					$renderingContext
				);
$arguments556['then'] = ' dropdown-toggle';

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments556, $renderChildrenClosure557, $renderingContext);

$output543 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure562 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments561 = array();
$arguments561['then'] = NULL;
$arguments561['else'] = NULL;
$arguments561['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array563 = array();
$array564 = array (
);$array563['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array564);

$expression565 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments561['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression565(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array563)
					),
					$renderingContext
				);
$output566 = '';

$output566 .= ' target="';
$array567 = array (
);
$output566 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array567)]);

$output566 .= '"';
$arguments561['then'] = $output566;

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments561, $renderChildrenClosure562, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure569 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments568 = array();
$arguments568['then'] = NULL;
$arguments568['else'] = NULL;
$arguments568['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array570 = array();
$array571 = array (
);$array570['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array571);
$array570['1'] = ' == "_blank"';

$expression572 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments568['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression572(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array570)
					),
					$renderingContext
				);
$arguments568['then'] = ' rel="noopener noreferrer"';

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments568, $renderChildrenClosure569, $renderingContext);

$output543 .= ' title="';
$array573 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array573)]);

$output543 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['then'] = NULL;
$arguments574['else'] = NULL;
$arguments574['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array577 = array (
);$array576['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array577);

$expression578 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments574['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression578(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
$arguments574['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output543 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
$output585 = '';

$output585 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['icon'] = NULL;
$arguments586['height'] = NULL;
$arguments586['width'] = NULL;
$array588 = array (
);$arguments586['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array588);
$array589 = array (
);$arguments586['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array589);
$array590 = array (
);$arguments586['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array590);

$output585 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output585 .= '
                                    </span>
                                ';
return $output585;
};
$arguments579 = array();
$arguments579['then'] = NULL;
$arguments579['else'] = NULL;
$arguments579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array581 = array();
$array582 = array (
);$array581['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array582);
$array581['1'] = ' && ';
$array583 = array (
);$array581['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array583);

$expression584 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression584(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array581)
					),
					$renderingContext
				);
$arguments579['__thenClosure'] = $renderChildrenClosure580;

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output543 .= '
                                <span class="nav-link-text">';
$array591 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array591)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments592 = array();
$arguments592['then'] = NULL;
$arguments592['else'] = NULL;
$arguments592['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array595);

$expression596 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments592['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array594)
					),
					$renderingContext
				);
$arguments592['__thenClosure'] = $renderChildrenClosure593;

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output543 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$output602 = '';

$output602 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array603 = array (
);
$output602 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array603)]);

$output602 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
$output607 = '';

$output607 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure609 = function() use ($renderingContext, $self) {
$output651 = '';

$output651 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure653 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments652 = array();

$output651 .= '';

$output651 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
$output656 = '';

$output656 .= '
                                                <li>
                                                    <a href="';
$array657 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array657)]);

$output656 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['then'] = NULL;
$arguments658['else'] = NULL;
$arguments658['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array660 = array();
$array661 = array (
);$array660['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array661);

$expression662 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments658['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression662(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array660)
					),
					$renderingContext
				);
$arguments658['then'] = ' active';

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output656 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure664 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments663 = array();
$arguments663['then'] = NULL;
$arguments663['else'] = NULL;
$arguments663['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array665 = array();
$array666 = array (
);$array665['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array666);

$expression667 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments663['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression667(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array665)
					),
					$renderingContext
				);
$output668 = '';

$output668 .= ' target="';
$array669 = array (
);
$output668 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array669)]);

$output668 .= '"';
$arguments663['then'] = $output668;

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments663, $renderChildrenClosure664, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['then'] = NULL;
$arguments670['else'] = NULL;
$arguments670['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array672 = array();
$array673 = array (
);$array672['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array673);
$array672['1'] = ' == "_blank"';

$expression674 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments670['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression674(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array672)
					),
					$renderingContext
				);
$arguments670['then'] = ' rel="noopener noreferrer"';

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output656 .= ' title="';
$array675 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array675)]);

$output656 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['icon'] = NULL;
$arguments683['height'] = NULL;
$arguments683['width'] = NULL;
$array685 = array (
);$arguments683['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array685);
$array686 = array (
);$arguments683['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array686);
$array687 = array (
);$arguments683['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array687);

$output682 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext);

$output682 .= '
                                                            </span>
                                                        ';
return $output682;
};
$arguments676 = array();
$arguments676['then'] = NULL;
$arguments676['else'] = NULL;
$arguments676['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array678 = array();
$array679 = array (
);$array678['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array679);
$array678['1'] = ' && ';
$array680 = array (
);$array678['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array680);

$expression681 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments676['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression681(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array678)
					),
					$renderingContext
				);
$arguments676['__thenClosure'] = $renderChildrenClosure677;

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output656 .= '
                                                        <span class="dropdown-text">';
$array688 = array (
);
$output656 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array688)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments689 = array();
$arguments689['then'] = NULL;
$arguments689['else'] = NULL;
$arguments689['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array691 = array();
$array692 = array (
);$array691['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array692);

$expression693 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments689['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression693(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array691)
					),
					$renderingContext
				);
$arguments689['__thenClosure'] = $renderChildrenClosure690;

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext);

$output656 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output656;
};
$arguments654 = array();
$arguments654['if'] = NULL;

$output651 .= '';

$output651 .= '
                                        ';
return $output651;
};
$arguments608 = array();
$arguments608['then'] = NULL;
$arguments608['else'] = NULL;
$arguments608['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array648 = array();
$array649 = array (
);$array648['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array649);

$expression650 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments608['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression650(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array648)
					),
					$renderingContext
				);
$arguments608['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments608['__elseClosures'][] = function() use ($renderingContext, $self) {
$output610 = '';

$output610 .= '
                                                <li>
                                                    <a href="';
$array611 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array611)]);

$output610 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['then'] = NULL;
$arguments612['else'] = NULL;
$arguments612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array614 = array();
$array615 = array (
);$array614['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array615);

$expression616 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression616(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array614)
					),
					$renderingContext
				);
$arguments612['then'] = ' active';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output610 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['then'] = NULL;
$arguments617['else'] = NULL;
$arguments617['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array619 = array();
$array620 = array (
);$array619['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array620);

$expression621 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments617['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression621(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array619)
					),
					$renderingContext
				);
$output622 = '';

$output622 .= ' target="';
$array623 = array (
);
$output622 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array623)]);

$output622 .= '"';
$arguments617['then'] = $output622;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['then'] = NULL;
$arguments624['else'] = NULL;
$arguments624['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array626 = array();
$array627 = array (
);$array626['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array627);
$array626['1'] = ' == "_blank"';

$expression628 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments624['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array626)
					),
					$renderingContext
				);
$arguments624['then'] = ' rel="noopener noreferrer"';

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output610 .= ' title="';
$array629 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array629)]);

$output610 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
$output636 = '';

$output636 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['icon'] = NULL;
$arguments637['height'] = NULL;
$arguments637['width'] = NULL;
$array639 = array (
);$arguments637['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array639);
$array640 = array (
);$arguments637['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array640);
$array641 = array (
);$arguments637['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array641);

$output636 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);

$output636 .= '
                                                            </span>
                                                        ';
return $output636;
};
$arguments630 = array();
$arguments630['then'] = NULL;
$arguments630['else'] = NULL;
$arguments630['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array632 = array();
$array633 = array (
);$array632['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array633);
$array632['1'] = ' && ';
$array634 = array (
);$array632['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array634);

$expression635 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments630['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array632)
					),
					$renderingContext
				);
$arguments630['__thenClosure'] = $renderChildrenClosure631;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);

$output610 .= '
                                                        <span class="dropdown-text">';
$array642 = array (
);
$output610 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array642)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments643 = array();
$arguments643['then'] = NULL;
$arguments643['else'] = NULL;
$arguments643['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array645 = array();
$array646 = array (
);$array645['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array646);

$expression647 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments643['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression647(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array645)
					),
					$renderingContext
				);
$arguments643['__thenClosure'] = $renderChildrenClosure644;

$output610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output610 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output610;
};

$output607 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments608, $renderChildrenClosure609, $renderingContext);

$output607 .= '
                                    ';
return $output607;
};
$arguments604 = array();
$arguments604['each'] = NULL;
$arguments604['as'] = NULL;
$arguments604['key'] = NULL;
$arguments604['reverse'] = false;
$arguments604['iteration'] = NULL;
$array606 = array (
);$arguments604['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array606);
$arguments604['as'] = 'child';

$output602 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext);

$output602 .= '
                                </ul>
                            ';
return $output602;
};
$arguments597 = array();
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$arguments597['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array599 = array();
$array600 = array (
);$array599['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array600);

$expression601 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments597['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression601(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array599)
					),
					$renderingContext
				);
$arguments597['__thenClosure'] = $renderChildrenClosure598;

$output543 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output543 .= '
                        </li>
                    ';
return $output543;
};
$arguments541 = array();
$arguments541['if'] = NULL;

$output538 .= '';

$output538 .= '
                ';
return $output538;
};
$arguments382 = array();
$arguments382['then'] = NULL;
$arguments382['else'] = NULL;
$arguments382['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array535 = array();
$array536 = array (
);$array535['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array536);

$expression537 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments382['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression537(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array535)
					),
					$renderingContext
				);
$arguments382['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments382['__elseClosures'][] = function() use ($renderingContext, $self) {
$output384 = '';

$output384 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['then'] = NULL;
$arguments385['else'] = NULL;
$arguments385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array388);

$expression389 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments385['then'] = ' active';

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments390 = array();
$arguments390['then'] = NULL;
$arguments390['else'] = NULL;
$arguments390['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array392 = array();
$array393 = array (
);$array392['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array393);

$expression394 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments390['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array392)
					),
					$renderingContext
				);
$arguments390['then'] = ' dropdown dropdown-hover';

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output384 .= '">
                            <a href="';
$array395 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array395)]);

$output384 .= '" id="nav-item-';
$array396 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array396)]);

$output384 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['then'] = NULL;
$arguments397['else'] = NULL;
$arguments397['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments397['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments397['then'] = ' dropdown-toggle';

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);

$output384 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['then'] = NULL;
$arguments402['else'] = NULL;
$arguments402['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array405);

$expression406 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments402['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)
					),
					$renderingContext
				);
$output407 = '';

$output407 .= ' target="';
$array408 = array (
);
$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array408)]);

$output407 .= '"';
$arguments402['then'] = $output407;

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['then'] = NULL;
$arguments409['else'] = NULL;
$arguments409['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array411 = array();
$array412 = array (
);$array411['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array412);
$array411['1'] = ' == "_blank"';

$expression413 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments409['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression413(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array411)
					),
					$renderingContext
				);
$arguments409['then'] = ' rel="noopener noreferrer"';

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output384 .= ' title="';
$array414 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array414)]);

$output384 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array417 = array();
$array418 = array (
);$array417['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array418);

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array417)
					),
					$renderingContext
				);
$arguments415['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output384 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output426 = '';

$output426 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['icon'] = NULL;
$arguments427['height'] = NULL;
$arguments427['width'] = NULL;
$array429 = array (
);$arguments427['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array429);
$array430 = array (
);$arguments427['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array430);
$array431 = array (
);$arguments427['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array431);

$output426 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
                                    </span>
                                ';
return $output426;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
$array423 = array (
);$array422['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array423);
$array422['1'] = ' && ';
$array424 = array (
);$array422['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array424);

$expression425 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression425(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = $renderChildrenClosure421;

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output384 .= '
                                <span class="nav-link-text">';
$array432 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array432)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments433 = array();
$arguments433['then'] = NULL;
$arguments433['else'] = NULL;
$arguments433['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array435 = array();
$array436 = array (
);$array435['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array436);

$expression437 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments433['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array435)
					),
					$renderingContext
				);
$arguments433['__thenClosure'] = $renderChildrenClosure434;

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output384 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array444 = array (
);
$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array444)]);

$output443 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure446 = function() use ($renderingContext, $self) {
$output448 = '';

$output448 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments493 = array();

$output492 .= '';

$output492 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
$output497 = '';

$output497 .= '
                                                <li>
                                                    <a href="';
$array498 = array (
);
$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array498)]);

$output497 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['then'] = NULL;
$arguments499['else'] = NULL;
$arguments499['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array501 = array();
$array502 = array (
);$array501['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array502);

$expression503 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments499['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression503(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array501)
					),
					$renderingContext
				);
$arguments499['then'] = ' active';

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext);

$output497 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['then'] = NULL;
$arguments504['else'] = NULL;
$arguments504['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments504['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$output509 = '';

$output509 .= ' target="';
$array510 = array (
);
$output509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array510)]);

$output509 .= '"';
$arguments504['then'] = $output509;

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['then'] = NULL;
$arguments511['else'] = NULL;
$arguments511['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array513 = array();
$array514 = array (
);$array513['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array514);
$array513['1'] = ' == "_blank"';

$expression515 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments511['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression515(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array513)
					),
					$renderingContext
				);
$arguments511['then'] = ' rel="noopener noreferrer"';

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output497 .= ' title="';
$array516 = array (
);
$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array516)]);

$output497 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output523 = '';

$output523 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure525 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments524 = array();
$arguments524['icon'] = NULL;
$arguments524['height'] = NULL;
$arguments524['width'] = NULL;
$array526 = array (
);$arguments524['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array526);
$array527 = array (
);$arguments524['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array527);
$array528 = array (
);$arguments524['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array528);

$output523 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments524, $renderChildrenClosure525, $renderingContext);

$output523 .= '
                                                            </span>
                                                        ';
return $output523;
};
$arguments517 = array();
$arguments517['then'] = NULL;
$arguments517['else'] = NULL;
$arguments517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array519 = array();
$array520 = array (
);$array519['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array520);
$array519['1'] = ' && ';
$array521 = array (
);$array519['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array521);

$expression522 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression522(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array519)
					),
					$renderingContext
				);
$arguments517['__thenClosure'] = $renderChildrenClosure518;

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output497 .= '
                                                        <span class="dropdown-text">';
$array529 = array (
);
$output497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array529)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure531 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments530 = array();
$arguments530['then'] = NULL;
$arguments530['else'] = NULL;
$arguments530['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array532 = array();
$array533 = array (
);$array532['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array533);

$expression534 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments530['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression534(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array532)
					),
					$renderingContext
				);
$arguments530['__thenClosure'] = $renderChildrenClosure531;

$output497 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments530, $renderChildrenClosure531, $renderingContext);

$output497 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output497;
};
$arguments495 = array();
$arguments495['if'] = NULL;

$output492 .= '';

$output492 .= '
                                        ';
return $output492;
};
$arguments449 = array();
$arguments449['then'] = NULL;
$arguments449['else'] = NULL;
$arguments449['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array489 = array();
$array490 = array (
);$array489['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array490);

$expression491 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments449['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression491(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array489)
					),
					$renderingContext
				);
$arguments449['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments449['__elseClosures'][] = function() use ($renderingContext, $self) {
$output451 = '';

$output451 .= '
                                                <li>
                                                    <a href="';
$array452 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array452)]);

$output451 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments453 = array();
$arguments453['then'] = NULL;
$arguments453['else'] = NULL;
$arguments453['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array455 = array();
$array456 = array (
);$array455['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array456);

$expression457 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments453['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression457(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array455)
					),
					$renderingContext
				);
$arguments453['then'] = ' active';

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output451 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array461);

$expression462 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$output463 = '';

$output463 .= ' target="';
$array464 = array (
);
$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array464)]);

$output463 .= '"';
$arguments458['then'] = $output463;

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array467 = array();
$array468 = array (
);$array467['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array468);
$array467['1'] = ' == "_blank"';

$expression469 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array467)
					),
					$renderingContext
				);
$arguments465['then'] = ' rel="noopener noreferrer"';

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output451 .= ' title="';
$array470 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array470)]);

$output451 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
$output477 = '';

$output477 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['icon'] = NULL;
$arguments478['height'] = NULL;
$arguments478['width'] = NULL;
$array480 = array (
);$arguments478['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array480);
$array481 = array (
);$arguments478['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array481);
$array482 = array (
);$arguments478['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array482);

$output477 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output477 .= '
                                                            </span>
                                                        ';
return $output477;
};
$arguments471 = array();
$arguments471['then'] = NULL;
$arguments471['else'] = NULL;
$arguments471['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array473 = array();
$array474 = array (
);$array473['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array474);
$array473['1'] = ' && ';
$array475 = array (
);$array473['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array475);

$expression476 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments471['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array473)
					),
					$renderingContext
				);
$arguments471['__thenClosure'] = $renderChildrenClosure472;

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output451 .= '
                                                        <span class="dropdown-text">';
$array483 = array (
);
$output451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array483)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments484 = array();
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$arguments484['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array486 = array();
$array487 = array (
);$array486['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array487);

$expression488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments484['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array486)
					),
					$renderingContext
				);
$arguments484['__thenClosure'] = $renderChildrenClosure485;

$output451 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output451 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output451;
};

$output448 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output448 .= '
                                    ';
return $output448;
};
$arguments445 = array();
$arguments445['each'] = NULL;
$arguments445['as'] = NULL;
$arguments445['key'] = NULL;
$arguments445['reverse'] = false;
$arguments445['iteration'] = NULL;
$array447 = array (
);$arguments445['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array447);
$arguments445['as'] = 'child';

$output443 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments445, $renderChildrenClosure446, $renderingContext);

$output443 .= '
                                </ul>
                            ';
return $output443;
};
$arguments438 = array();
$arguments438['then'] = NULL;
$arguments438['else'] = NULL;
$arguments438['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array440 = array();
$array441 = array (
);$array440['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array441);

$expression442 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments438['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression442(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array440)
					),
					$renderingContext
				);
$arguments438['__thenClosure'] = $renderChildrenClosure439;

$output384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output384 .= '
                        </li>
                    ';
return $output384;
};

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
            ';
return $output381;
};
$arguments378 = array();
$arguments378['each'] = NULL;
$arguments378['as'] = NULL;
$arguments378['key'] = NULL;
$arguments378['reverse'] = false;
$arguments378['iteration'] = NULL;
$array380 = array (
);$arguments378['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array380);
$arguments378['as'] = 'item';

$output377 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments378, $renderChildrenClosure379, $renderingContext);

$output377 .= '
        </ul>
    ';
return $output377;
};
$arguments372 = array();
$arguments372['then'] = NULL;
$arguments372['else'] = NULL;
$arguments372['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array374 = array();
$array375 = array (
);$array374['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array375);

$expression376 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments372['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression376(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array374)
					),
					$renderingContext
				);
$arguments372['__thenClosure'] = $renderChildrenClosure373;

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
';
return $output371;
};
$arguments369 = array();
$arguments369['name'] = NULL;
$arguments369['name'] = 'MainNavigation';

$output323 .= NULL;

$output323 .= '

';

return $output323;
}


}
#
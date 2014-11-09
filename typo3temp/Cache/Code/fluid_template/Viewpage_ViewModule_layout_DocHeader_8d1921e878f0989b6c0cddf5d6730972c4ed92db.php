<?php
class FluidCache_Viewpage_ViewModule_layout_DocHeader_8d1921e878f0989b6c0cddf5d6730972c4ed92db extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper
$arguments0 = array();
// Rendering Boolean node
$arguments0['loadJQuery'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
// Rendering Array
$array1 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments2 = array();
$arguments2['path'] = 'JavaScript/jquery-ui-1.10.3.custom.min.js';
$arguments2['extensionName'] = NULL;
$arguments2['absolute'] = false;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper4->setArguments($arguments2);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array1['0'] = $viewHelper4->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments5 = array();
$arguments5['path'] = 'JavaScript/ExtDirect.StateProvider.js';
$arguments5['extensionName'] = 'backend';
$arguments5['absolute'] = false;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper7 = $self->getViewHelper('$viewHelper7', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper7->setArguments($arguments5);
$viewHelper7->setRenderingContext($renderingContext);
$viewHelper7->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array1['1'] = $viewHelper7->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments8 = array();
$arguments8['path'] = 'JavaScript/common.js';
$arguments8['extensionName'] = NULL;
$arguments8['absolute'] = false;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper10->setArguments($arguments8);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure9);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array1['2'] = $viewHelper10->initializeArgumentsAndRender();
$arguments0['includeJsFiles'] = $array1;
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments12 = array();
$arguments12['path'] = 'Css/ui-lightness/jquery-ui-1.10.3.custom.min.css';
$arguments12['extensionName'] = NULL;
$arguments12['absolute'] = false;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array11['0'] = $viewHelper14->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments15 = array();
$arguments15['path'] = 'Css/main.css';
$arguments15['extensionName'] = NULL;
$arguments15['absolute'] = false;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper17 = $self->getViewHelper('$viewHelper17', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper17->setArguments($arguments15);
$viewHelper17->setRenderingContext($renderingContext);
$viewHelper17->setRenderChildrenClosure($renderChildrenClosure16);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array11['1'] = $viewHelper17->initializeArgumentsAndRender();
$arguments0['includeCssFiles'] = $array11;
$arguments0['pageTitle'] = '';
$arguments0['enableJumpToUrl'] = true;
$arguments0['enableClickMenu'] = true;
$arguments0['loadPrototype'] = true;
$arguments0['loadScriptaculous'] = false;
$arguments0['scriptaculousModule'] = '';
$arguments0['loadExtJs'] = false;
$arguments0['loadExtJsTheme'] = true;
$arguments0['extJsAdapter'] = '';
$arguments0['enableExtJsDebug'] = false;
$arguments0['addCssFile'] = NULL;
$arguments0['addJsFile'] = NULL;
$arguments0['addJsInlineLabels'] = NULL;
$arguments0['includeCsh'] = true;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
	<div class="typo3-fullDoc">
		<div id="typo3-docheader">
			<div class="typo3-docheader-functions">
				<form>
					<label for="width">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments20 = array();
$arguments20['key'] = 'width';
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '
					</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$arguments23 = array();
$arguments23['options'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'widths', $renderingContext);
$arguments23['id'] = 'width';
$arguments23['name'] = 'width';
$arguments23['additionalAttributes'] = NULL;
$arguments23['value'] = NULL;
$arguments23['property'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['multiple'] = NULL;
$arguments23['size'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['optionValueField'] = NULL;
$arguments23['optionLabelField'] = NULL;
$arguments23['sortByOptionLabel'] = false;
$arguments23['selectAllByDefault'] = false;
$arguments23['errorClass'] = 'f3-form-error';
$arguments23['prependOptionLabel'] = NULL;
$arguments23['prependOptionValue'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper

$output19 .= $viewHelper25->initializeArgumentsAndRender();

$output19 .= '
				</form>
			</div>
			<div class="typo3-docheader-buttons">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments26 = array();
$arguments26['uri'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'url', $renderingContext);
// Rendering Array
$array27 = array();
$array27['onclick'] = 'window.open(this.href,\'newTYPO3frontendWindow\').focus();return false;';
$arguments26['additionalAttributes'] = $array27;
$arguments26['icon'] = 'actions-document-view';
$arguments26['title'] = '';
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper29 = $self->getViewHelper('$viewHelper29', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper29->setArguments($arguments26);
$viewHelper29->setRenderingContext($renderingContext);
$viewHelper29->setRenderChildrenClosure($renderChildrenClosure28);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output19 .= $viewHelper29->initializeArgumentsAndRender();

$output19 .= '
				</div>
				<div class="right">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper
$arguments30 = array();
$arguments30['uri'] = 'javascript:document.getElementById(\'tx_viewpage_iframe\').contentWindow.location.reload(true);';
$arguments30['icon'] = 'actions-system-refresh';
$arguments30['title'] = '';
$arguments30['additionalAttributes'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper32 = $self->getViewHelper('$viewHelper32', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper');
$viewHelper32->setArguments($arguments30);
$viewHelper32->setRenderingContext($renderingContext);
$viewHelper32->setRenderChildrenClosure($renderChildrenClosure31);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\IconViewHelper

$output19 .= $viewHelper32->initializeArgumentsAndRender();

$output19 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments33 = array();
$arguments33['getVars'] = array (
);
$arguments33['setVars'] = array (
);
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper');
$viewHelper35->setArguments($arguments33);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper

$output19 .= $viewHelper35->initializeArgumentsAndRender();

$output19 .= '
				</div>
			</div>
		</div>

		<div id="typo3-docbody">
			<div id="typo3-inner-docbody" class="tx_viewpage">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments36 = array();
$arguments36['section'] = 'Content';
$arguments36['partial'] = NULL;
$arguments36['arguments'] = array (
);
$arguments36['optional'] = false;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output19 .= $viewHelper38->initializeArgumentsAndRender();

$output19 .= '
			</div>
		</div>
	</div>
';
return $output19;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper');
$viewHelper39->setArguments($arguments0);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper

return $viewHelper39->initializeArgumentsAndRender();
}


}
#1415323281    12091     
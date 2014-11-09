<?php
class FluidCache_Extensionmanager_Download_partial_List_UnresolvedDependenciesMessage_html_c300a150477a024813e668862852a2408f02adc1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments0 = array();
$arguments0['key'] = 'dependencyCheck.unresolvedDependencies.message';
$arguments0['id'] = NULL;
$arguments0['default'] = NULL;
$arguments0['htmlEscape'] = NULL;
$arguments0['arguments'] = NULL;
$arguments0['extensionName'] = NULL;
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper2 = $self->getViewHelper('$viewHelper2', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper');
$viewHelper2->setArguments($arguments0);
$viewHelper2->setRenderingContext($renderingContext);
$viewHelper2->setRenderChildrenClosure($renderChildrenClosure1);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper

return $viewHelper2->initializeArgumentsAndRender();
}


}
#1415292048    1478      
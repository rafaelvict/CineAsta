<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory_ck_editor.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Form/Type/CKEditorType.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/PluginManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/PluginManager.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/StylesSetManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/StylesSetManager.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/TemplateManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Model/TemplateManager.php';

return $this->services['ivory_ck_editor.form.type'] = new \Ivory\CKEditorBundle\Form\Type\CKEditorType(${($_ = isset($this->services['ivory_ck_editor.config_manager']) ? $this->services['ivory_ck_editor.config_manager'] : $this->load('getIvoryCkEditor_ConfigManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.plugin_manager']) ? $this->services['ivory_ck_editor.plugin_manager'] : ($this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager())) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.styles_set_manager']) ? $this->services['ivory_ck_editor.styles_set_manager'] : ($this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager())) && false ?: '_'}, ${($_ = isset($this->services['ivory_ck_editor.template_manager']) ? $this->services['ivory_ck_editor.template_manager'] : ($this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager())) && false ?: '_'});

<?php  return array (
  'config' => 
  array (
    'allow_tags_in_post' => '1',
    'modRequest.class' => 'modManagerRequest',
  ),
  'aliasMap' => 
  array (
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'msOnChangeOrderStatus' => 
    array (
      3 => '3',
    ),
    'OnChunkFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnDocFormPrerender' => 
    array (
      4 => '4',
      5 => '5',
    ),
    'OnDocFormSave' => 
    array (
      4 => '4',
      6 => '6',
    ),
    'OnEmptyTrash' => 
    array (
      6 => '6',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnFileEditFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnHandleRequest' => 
    array (
      3 => '3',
    ),
    'OnLoadWebDocument' => 
    array (
      4 => '4',
      6 => '6',
      3 => '3',
    ),
    'OnManagerAuthentication' => 
    array (
      4 => '4',
    ),
    'OnManagerPageBeforeRender' => 
    array (
      2 => '2',
      5 => '5',
      4 => '4',
      7 => '7',
    ),
    'OnManagerPageInit' => 
    array (
      4 => '4',
    ),
    'OnMODXInit' => 
    array (
      1 => '1',
      3 => '3',
    ),
    'OnPageNotFound' => 
    array (
      6 => '6',
    ),
    'OnPluginFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnRichTextBrowserInit' => 
    array (
      7 => '7',
    ),
    'OnRichTextEditorInit' => 
    array (
      7 => '7',
    ),
    'OnRichTextEditorRegister' => 
    array (
      5 => '5',
      7 => '7',
    ),
    'OnSiteRefresh' => 
    array (
      1 => '1',
      6 => '6',
    ),
    'OnSnipFormPrerender' => 
    array (
      5 => '5',
    ),
    'OnTempFormPrerender' => 
    array (
      4 => '4',
      5 => '5',
    ),
    'OnUserSave' => 
    array (
      6 => '6',
      3 => '3',
    ),
    'OnWebPageComplete' => 
    array (
      6 => '6',
    ),
    'OnWebPageInit' => 
    array (
      3 => '3',
    ),
    'OnWebPagePrerender' => 
    array (
      1 => '1',
      6 => '6',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '1',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;

    case \'OnWebPagePrerender\':
        $parser = $modx->getParser();
        if ($parser instanceof pdoParser) {
            foreach ($parser->pdoTools->ignores as $key => $val) {
                $modx->resource->_output = str_replace($key, $val, $modx->resource->_output);
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    2 => 
    array (
      'id' => '2',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'FormIt',
      'description' => '',
      'editor_type' => '0',
      'category' => '3',
      'cache_type' => '0',
      'plugincode' => '/**
 * FormIt
 *
 * Copyright 2009-2017 by Sterc <modx@sterc.nl>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt plugin
 *
 * @package formit
 */

$formit = $modx->getService(
    \'formit\',
    \'FormIt\',
    $modx->getOption(\'formit.core_path\', null, $modx->getOption(\'core_path\').\'components/formit/\') .\'model/formit/\',
    array()
);

if (!($formit instanceof FormIt)) {
    return;
}

switch ($modx->event->name) {
    case \'OnManagerPageBeforeRender\':
        // If migration status is false, show migrate alert message bar in manager
        if (method_exists(\'FormIt\',\'encryptionMigrationStatus\')) {
            if (!$formit->encryptionMigrationStatus()) {
                $modx->lexicon->load(\'formit:mgr\');
                $properties = array(\'message\' => $modx->lexicon(\'formit.migrate_alert\'));
                $chunk = $formit->_getTplChunk(\'migrate/alert\');
                if ($chunk) {
                    $modx->regClientStartupHTMLBlock($chunk->process($properties));
                    $modx->regClientCSS($formit->config[\'cssUrl\'] . \'migrate.css\');
                }
            }
        }
}',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'miniShop2',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        // Load extensions
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $miniShop2->loadMap();
        }
        break;

    case \'OnHandleRequest\':
        // Handle ajax requests
        $isAjax = !empty($_SERVER[\'HTTP_X_REQUESTED_WITH\']) && $_SERVER[\'HTTP_X_REQUESTED_WITH\'] == \'XMLHttpRequest\';
        if (empty($_REQUEST[\'ms2_action\']) || !$isAjax) {
            return;
        }
        /** @var miniShop2 $miniShop2 */
        if ($miniShop2 = $modx->getService(\'miniShop2\')) {
            $response = $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            @session_write_close();
            exit($response);
        }
        break;

    case \'OnLoadWebDocument\':
        // Handle non-ajax requests
        if (!empty($_REQUEST[\'ms2_action\'])) {
            if ($miniShop2 = $modx->getService(\'miniShop2\')) {
                $miniShop2->handleRequest($_REQUEST[\'ms2_action\'], @$_POST);
            }
        }
        // Set product fields as [[*resource]] tags
        if ($modx->resource->get(\'class_key\') == \'msProduct\') {
            if ($dataMeta = $modx->getFieldMeta(\'msProductData\')) {
                unset($dataMeta[\'id\']);
                $modx->resource->_fieldMeta = array_merge(
                    $modx->resource->_fieldMeta,
                    $dataMeta
                );
            }
        }
        break;

    case \'OnWebPageInit\':
        // Set referrer cookie
        /** @var msCustomerProfile $profile */
        $referrerVar = $modx->getOption(\'ms2_referrer_code_var\', null, \'msfrom\', true);
        $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
        $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);

        if (!$modx->user->isAuthenticated() && !empty($_REQUEST[$referrerVar])) {
            $code = trim($_REQUEST[$referrerVar]);
            if ($profile = $modx->getObject(\'msCustomerProfile\', array(\'referrer_code\' => $code))) {
                $referrer = $profile->get(\'id\');
                setcookie($cookieVar, $referrer, time() + $cookieTime);
            }
        }
        break;

    case \'OnUserSave\':
        // Save referrer id
        if ($mode == modSystemEvent::MODE_NEW) {
            /** @var modUser $user */
            $cookieVar = $modx->getOption(\'ms2_referrer_cookie_var\', null, \'msreferrer\', true);
            $cookieTime = $modx->getOption(\'ms2_referrer_time\', null, 86400 * 365, true);
            if ($modx->context->key != \'mgr\' && !empty($_COOKIE[$cookieVar])) {
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    if (!$profile->get(\'referrer_id\') && $_COOKIE[$cookieVar] != $user->get(\'id\')) {
                        $profile->set(\'referrer_id\', (int)$_COOKIE[$cookieVar]);
                        $profile->save();
                    }
                }
                setcookie($cookieVar, \'\', time() - $cookieTime);
            }
        }
        break;

    case \'msOnChangeOrderStatus\':
        // Update customer stat
        if (empty($status) || $status != 2) {
            return;
        }

        /** @var modUser $user */
        if ($user = $order->getOne(\'User\')) {
            $q = $modx->newQuery(\'msOrder\', array(\'type\' => 0));
            $q->innerJoin(\'modUser\', \'modUser\', array(\'modUser.id = msOrder.user_id\'));
            $q->innerJoin(\'msOrderLog\', \'msOrderLog\', array(
                \'msOrderLog.order_id = msOrder.id\',
                \'msOrderLog.action\' => \'status\',
                \'msOrderLog.entry\' => $status,
            ));
            $q->where(array(\'msOrder.user_id\' => $user->get(\'id\')));
            $q->groupby(\'msOrder.user_id\');
            $q->select(\'SUM(msOrder.cost)\');
            if ($q->prepare() && $q->stmt->execute()) {
                $spent = $q->stmt->fetchColumn();
                /** @var msCustomerProfile $profile */
                if ($profile = $modx->getObject(\'msCustomerProfile\', $user->get(\'id\'))) {
                    $profile->set(\'spent\', $spent);
                    $profile->save();
                }
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minishop2/elements/plugins/plugin.minishop2.php',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'AdminTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '6',
      'cache_type' => '0',
      'plugincode' => '/** @var array $scriptProperties */
$path = $modx->getOption(\'admintools_core_path\', null, $modx->getOption(\'core_path\') . \'components/admintools/\').\'model/admintools/\';
/** @var AdminTools $AdminTools */
$AdminTools = $modx->getService(\'admintools\',\'AdminTools\',$path);
$elementType = null;
if ($AdminTools instanceof AdminTools) {
    switch ($modx->event->name) {
        case \'OnManagerPageBeforeRender\':
            if ($modx->user->id) $AdminTools->initialize();
            break;
        case \'OnDocFormSave\':
            if ($modx->getOption(\'admintools_clear_only_resource_cache\',null,false)) {
                if ($modx->event->params[\'mode\'] != \'upd\') {
                    return;
                }
                if ($resource->get(\'syncsite\')) {
                    $AdminTools->clearResourceCache($resource);
                }
                if (!empty($_POST[\'createCache\'])) {
                    $AdminTools->createResourceCache($resource->uri);
                }
            }
            break;
        case \'OnManagerPageInit\':
            if (!$modx->user->isAuthenticated(\'mgr\') && $modx->getOption(\'admintools_email_authorization\', null, false)) {
                $id = (int) $modx->getOption(\'admintools_loginform_resource\');
                if (!empty($id) && $modx->getCount(\'modResource\', array(\'id\'=>$id, \'published\'=>1, \'deleted\'=>0))) {
                    $url = $modx->makeUrl($id,\'\',\'\',\'full\');
                    $modx->setOption(\'manager_login_url_alternate\', $url);
                }
            }
            break;
        case \'OnManagerAuthentication\':
            if ($modx->getOption(\'admintools_user_can_login\', null, false)) {
                $modx->setOption(\'admintools_user_can_login\', false);
                $modx->event->output(array(\'true\'));
            }
            break;
        case \'OnLoadWebDocument\':
            if ($modx->user->isAuthenticated($modx->context->get(\'key\')) && (!$modx->user->active || $modx->user->Profile->blocked)) {
                $modx->runProcessor(\'security/logout\');
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, false) && !$AdminTools->hasPermissions()){
                $modx->sendUnauthorizedPage();
            }
            break;
        case \'OnTempFormPrerender\':
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/templates.js\');
            }
            break;
        case \'OnDocFormPrerender\':
            $_html = array();
            if ($modx->getOption(\'admintools_template_resource_relationship\', null, true)) {
                $_html[\'tpl_res_relationship\'] = \'
            var tmpl = Ext.getCmp("modx-resource-template");
            if (tmpl.getValue()) tmpl.label.update(_("resource_template") + "&nbsp;&nbsp;<a href=\\"?a=element/template/update&id=" + tmpl.getValue() + "\\"><i class=\\"icon icon-external-link\\"></i></a>");\';
            }
            if ($modx->getOption(\'admintools_clear_only_resource_cache\', null, true) && $resource instanceof modResource) {
                $_html[\'create_resource_cache\'] = \'
            var cb = Ext.create({
                xtype: "xcheckbox",
                boxLabel: _("admintools_create_resource_cache"),
                description: _("admintools_create_resource_cache_help"),
                hideLabel: true,
                name: "createCache",
                id: "createCache",
                checked: \'. intval($modx->getOption(\'admintools_create_resource_cache\', null, false)) .\'
            });
            if (Ext.getCmp("modx-page-settings-right-box-right")) {
                Ext.getCmp("modx-page-settings-right-box-right").insert(2,cb);
                Ext.getCmp("modx-page-settings-right-box-left").add(Ext.getCmp("modx-resource-uri-override"));
                Ext.getCmp("modx-panel-resource").on("success", function(o){
                    if (o.result.object.createCache != 0) {
                        cb.setValue(true);
                    }
                });
            }\';
            }
            $output = \'\';
            if (!empty($_html)) {
            $output .= \'
    Ext.onReady(function() {
        setTimeout(function(){\' . implode("\\n", $_html) . \'
        }, 200);
    });\';
            }
            if ($modx->getOption(\'admintools_alternative_permissions\', null, true) && $modx->hasPermission(\'access_permissions\')) {
                $modx->controller->addLastJavascript($AdminTools->getOption(\'jsUrl\') . \'mgr/permissions.js\');
                $output .= \'
    Ext.ComponentMgr.onAvailable("modx-resource-tabs", function() {
		this.on("beforerender", function() {
			this.add({
				title: _("admintools_permissions"),
				border: false,
				items: [{
					layout: "anchor",
					border: false,
					items: [{
						html: _("admintools_permissions_desc"),
						border: false,
						bodyCssClass: "panel-desc"
					}, {
						xtype: "admintools-grid-permissions",
						anchor: "100%",
						cls: "main-wrapper",
						resource: \' . $id . \'
					}]
				}]
			});
		});
	});
\';
            }
            if (!empty($output)) $modx->controller->addHtml(\'<script type="text/javascript">\' . $output . \'</script>\');
            break;
        /*case \'OnWebPagePrerender\':
            $output = &$modx->resource->_output;
            $replace = "";
            preg_replace(\'/</script>/\', $replace, $output, 1);
            break;*/
    }
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/admintools/elements/plugins/plugin.admintools.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => '0',
      'category' => '13',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnSiteRefresh\':
        if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
            $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
        }
        break;

    case \'OnDocFormSave\':
        /** @var Ticket $resource */
        if ($mode == \'new\' && $resource->class_key == "Ticket") {
            $modx->cacheManager->delete(\'tickets/latest.tickets\');
        }
        break;

    case \'OnWebPagePrerender\':
        $output = &$modx->resource->_output;
        $output = str_replace(
            array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
            array(\'[\', \']\', \'{\', \'}\'),
            $output
        );
        break;

    case \'OnPageNotFound\':
        // It is working only with friendly urls enabled
        $q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
        $matches = explode(\'/\', rtrim($q, \'/\'));
        if (count($matches) < 2) {
            return;
        }

        $ticket_uri = array_pop($matches);
        $section_uri = implode(\'/\', $matches) . \'/\';

        if ($section_id = $modx->findResource($section_uri)) {
            /** @var TicketsSection $section */
            if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
                if (is_numeric($ticket_uri)) {
                    $ticket_id = $ticket_uri;
                } elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
                    $ticket_id = $tmp[0];
                } else {
                    $properties = $section->getProperties(\'tickets\');
                    if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
                        $pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
                        $pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
                        if (@preg_match(\'#\' . trim($pcre, \'/\') . \'#\', $ticket_uri, $matches)) {
                            $ticket_id = $matches[1];
                        }
                    }
                }
                if (!empty($ticket_id)) {
                    if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
                        if ($ticket->published) {
                            $modx->sendRedirect($modx->makeUrl($ticket_id),
                                array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
                        } elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
                            $modx->sendForward($unp_id);
                        }
                    }
                }
            }
        }
        break;

    case \'OnLoadWebDocument\':
        $authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
        $key = \'Tickets_User\';

        if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
            return;
        }

        if (empty($_COOKIE[$key])) {
            if (!empty($_SESSION[$key])) {
                $guest_key = $_SESSION[$key];
            } else {
                $guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
            }
            setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
        } else {
            $guest_key = $_COOKIE[$key];
        }

        if (empty($_SESSION[$key])) {
            $_SESSION[$key] = $guest_key;
        }

        if ($authenticated) {
            /** @var TicketAuthor $profile */
            if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
                $profile = $modx->newObject(\'TicketAuthor\');
                $modx->user->addOne($profile);
            }
            $profile->set(\'visitedon\', time());
            $profile->save();
        }
        break;

    case \'OnWebPageComplete\':
        /** @var Tickets $Tickets */
        $Tickets = $modx->getService(\'tickets\');
        $Tickets->logView($modx->resource->get(\'id\'));
        break;

    case \'OnUserSave\':
        /** @var modUser $user */
        if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
            $profile = $modx->newObject(\'TicketAuthor\');
            $user->addOne($profile);
            $profile->save();
        }
        break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'CKEditor',
      'description' => 'CKEditor WYSIWYG editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '1',
      'static_file' => 'ckeditor/elements/plugins/ckeditor.plugin.php',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'mgr' => 
      array (
        0 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 9999,
          'policy' => 
          array (
            'mscategory_save' => true,
            'msproduct_save' => true,
            'msproduct_publish' => true,
            'msproduct_delete' => true,
            'msorder_save' => true,
            'msorder_view' => true,
            'msorder_list' => true,
            'mssetting_save' => true,
            'mssetting_view' => true,
            'mssetting_list' => true,
            'msproductfile_save' => true,
            'msproductfile_generate' => true,
            'msproductfile_list' => true,
          ),
        ),
      ),
    ),
  ),
);
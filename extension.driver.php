<?php
	
	class Extension_Form_Select2 extends Extension {
	/*-------------------------------------------------------------------------
		Extension definition
	-------------------------------------------------------------------------*/
		protected static $fields = array();

		public static $params = null;
				
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initaliseAdminPageHead'
				)
			);
		}
		
	/*-------------------------------------------------------------------------
		Fields:
	-------------------------------------------------------------------------*/

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/
		
		public function initaliseAdminPageHead($context) {
			$page = Administration::instance()->Page;
						
			$page->addScriptToHead(URL . '/extensions/form_select2/assets/select2.min.js');
			$page->addScriptToHead(URL . '/extensions/form_select2/assets/form_select2.publish.js');
			$page->addStylesheetToHead(URL . '/extensions/form_select2/assets/select2.css', 'screen', 9200);
			$page->addStylesheetToHead(URL . '/extensions/form_select2/assets/form_select2.publish.css', 'screen', 9200);
		}
	}
	
?>
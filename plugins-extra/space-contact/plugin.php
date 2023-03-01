<?php

class pluginSpaceContact extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'SpaceContact',
			'text'=>''
		);
	}

	public function form()
	{
		global $L;
		$html  = '<div class="alert alert-primary" role="alert">';
		$html .= $this->description();
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Title').'</label>';
		$html .= '<input name="label" type="text" value="'.$this->getValue('label').'">';
		$html .= '<span class="tip">'.$L->get('Input contact Title').'</span>';
		$html .= '</div>';		
		
		$html .= '<div>';
		$html .= '<label>'.$L->get('Contact Information').'</label>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '<span class="tip">'.$L->get('Input your address phone number detail in here').'</span>';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class="col-md-6 p-3 text-end">';
		$html .= '<div class="plugin-content">';
		$html .= '<h3><strong class="text-white">'.$this->getValue('label').'</strong></h3>';
		$html .= html_entity_decode(nl2br($this->getValue('text')));
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}
}
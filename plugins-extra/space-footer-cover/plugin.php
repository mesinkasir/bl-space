<?php

class pluginSpaceCoverFooter extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'Space Cover Footer',
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
		$html .= '<label>'.$L->get('Cover').'</label>';
		$html .= '<input name="label" type="text" value="'.$this->getValue('label').'">';
		$html .= '<span class="tip">'.$L->get('Insert URL Image').'</span>';
		$html .= '</div>';	

		$html .= '<div>';
		$html .= '<label>'.$L->get('Alt Image').'</label>';
		$html .= '<input name="text" type="text" value="'.$this->getValue('text').'">';
		$html .= '<span class="tip">'.$L->get('Insert Alt Image').'</span>';
		$html .= '</div>';		

		return $html;
	}

	public function siteSidebar()
	{
		$html  = '<div class="col-md-6 p-3 text-end">';
		$html .= '<div class="plugin-content">';
		$html .= '<img  alt="'.$this->getValue('text').'" width="100%" height="100%" class="img-fluid rounded-circle" src="'.$this->getValue('label').'"/>';
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}
}
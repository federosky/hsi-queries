<?php
/**
 * Enter description here ...
 * @package ext.web.widgets.pagers
 */
class CCustomLinkPager extends CLinkPager
{
	public $actionButtonLabel = '';
	public $enableActionButton = false;
	
	public function init()
	{
		parent::init();
		$this->header = '';
		$this->footer = '';
		$this->actionButtonLabel = Yii::t('translations', 'Not raced');
		$this->prevPageLabel = CHtml::image('images/pager/button-previous.png', '&lg;');
		$this->nextPageLabel = CHtml::image('images/pager/button-next.png', '&gt;');
	}
	
	/**
	 * Creates a custom element
	 * 
	 * @param unknown_type $label
	 * @param unknown_type $action
	 * @param unknown_type $class
	 * @param unknown_type $hidden
	 * @param unknown_type $selected
	 * @return string
	 */
	protected function createActionButton($label, $action, $class, $hidden, $selected)
	{
		if($hidden || $selected)
			$class.=' '.($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);
		$htmlOptions = array('id'=>$action);
		return '<li class="'.$class.'">'.CHtml::tag('span', $htmlOptions, '', true).'</li>';
	}
	
	/**
	 * Creates the page buttons.
	 * @return array a list of page buttons (in HTML code).
	 */
	protected function createPageButtons()
	{
		if(($pageCount=$this->getPageCount())<=1)
			return array();

		list($beginPage,$endPage)=$this->getPageRange();
		$currentPage=$this->getCurrentPage(false); // currentPage is calculated in getPageRange()
		$buttons=array();

		// first page
		$buttons[]=$this->createPageButton($this->firstPageLabel,0,self::CSS_FIRST_PAGE,$currentPage<=0,false);

		// prev page
		if(($page=$currentPage-1)<0)
			$page = $pageCount-1;
		$buttons[]=$this->createPageButton($this->prevPageLabel,$page,self::CSS_PREVIOUS_PAGE,$currentPage<0,false);

		// Action button/label
		if( $this->enableActionButton)
		{
			$action = 'visibility-toggler';
			$buttons[] = $this->createActionButton($this->actionButtonLabel, $action, 'controls', false, false);
		}

		// next page
		if(($page=$currentPage+1)>$pageCount-1)
			$page=0;
		$buttons[]=$this->createPageButton($this->nextPageLabel,$page,self::CSS_NEXT_PAGE,$currentPage>$pageCount-1,false);

		// last page
		$buttons[]=$this->createPageButton($this->lastPageLabel,$pageCount-1,self::CSS_LAST_PAGE,$currentPage>=$pageCount-1,false);

		return $buttons;
	}
}
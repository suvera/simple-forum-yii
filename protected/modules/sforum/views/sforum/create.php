<?php
/* @var $this SforumController */
/* @var $model Sforum */

$this->breadcrumbs=array(
	'Forums'=>array('default/index'),
	'Create',
);

?>

<h1>Create Forum</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
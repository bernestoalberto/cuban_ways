
<?php $this->title = 'Housing';?>

			<h3 class="page-title">		    Housing		    </h3>
		    <div class="page-bar">
		        <ul class="page-breadcrumb">
		            <li>
		                <i class="fa fa-home"></i>
		                <a href="<?php echo Yii::$app->homeUrl?>">Inicio</a>
		                <i class="fa fa-angle-right"></i>
		            </li>
		            <li>
		                <a href="#">Housing</a>
		            </li>
		        </ul>
		    </div>
				<div class="Housing-default-index">
				    <h1><?= $this->context->action->uniqueId ?></h1>
				    <p>
				        This is the view content for action "<?= $this->context->action->id ?>".
				        The action belongs to the controller "<?= get_class($this->context) ?>"
				        in the "<?= $this->context->module->id ?>" module.
				    </p>
				    <p>
				        You may customize this page by editing the following file:<br>
				        <code><?= __FILE__ ?></code>
				    </p>
				</div>

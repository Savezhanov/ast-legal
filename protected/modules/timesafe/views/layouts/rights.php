<?php $this->beginContent(Rights::module()->appLayout); ?>
<div id="rights">
	<div id="content">
		<div id="menu">
			<?php $this->renderPartial('/_menu'); ?>
		</div>
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>
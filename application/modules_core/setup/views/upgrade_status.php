<?php $this->load->view('header'); ?>

<div class="grid_11" id="content_wrapper">

	<div class="section_wrapper">

		<h3 class="title_black"><?php echo $this->lang->line('myclientbase') . ' ' . $this->lang->line('setup'); ?></h3>

		<div class="content toggle">

			<h3><?php echo $this->lang->line('upgrade_status'); ?></h3>

			<?php foreach ($upgrade_messages as $upgrade_message) { ?>
			<p style="margin-left: 20px; margin-right: 20px;"><?php echo $upgrade_message; ?></p>
			<?php } ?>

		</div>

	</div>

</div>

<?php $this->load->view('footer'); ?>
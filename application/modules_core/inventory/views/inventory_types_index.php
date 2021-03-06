<?php $this->load->view('header'); ?>

<div class="grid_8" id="content_wrapper">

	<div class="section_wrapper">

		<h3 class="title_black"><?php echo $this->lang->line('inventory_types'); ?></h3>

		<div class="content toggle no_padding">

			<table style="width: 100%;">
				<tr>
					<th scope="col" class="first"><?php echo $this->lang->line('id'); ?></th>
					<th scope="col"><?php echo $this->lang->line('inventory_type'); ?></th>
					<th scope="col" class="last"><?php echo $this->lang->line('actions'); ?>
				</tr>
				<?php foreach ($inventory_types as $inventory_type) { ?>
				<tr class="hoverall">
					<td class="first"><?php echo $inventory_type->inventory_type_id; ?></td>
					<td class="last"><?php echo $inventory_type->inventory_type; ?></td>
					<td class="last">
						<a href="<?php echo site_url('inventory/inventory_types/form/inventory_type_id/' . $inventory_type->inventory_type_id); ?>" title="<?php echo $this->lang->line('edit'); ?>">
							<?php echo icon('edit'); ?>
						</a>
						<a href="<?php echo site_url('inventory/inventory_types/delete/inventory_type_id/' . $inventory_type->inventory_type_id); ?>" title="<?php echo $this->lang->line('delete'); ?>" onclick="javascript:if(!confirm('<?php echo $this->lang->line('confirm_delete'); ?>')) return false">
							<?php echo icon('delete'); ?>
						</a>
					</td>
				</tr>
				<?php } ?>
			</table>

			<?php if ($this->mdl_inventory_types->page_links) { ?>
			<div id="pagination">
				<?php echo $this->mdl_inventory_types->page_links; ?>
			</div>
			<?php } ?>

		</div>

	</div>

</div>

<!-- $actions_panel contains actions_panel.tpl -->
<?php echo $actions_panel; ?>

<?php $this->load->view('footer'); ?>
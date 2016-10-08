
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php  echo __('Element'); ?></h3>
                <div class="box-tools pull-right">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $element['Element']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table id="Elements" class="table table-bordered table-striped">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($element['Element']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Alias'); ?></strong></td>
		<td>
			<?php echo h($element['Element']['alias']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menu'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($element['Menu']['name'], array('controller' => 'menus', 'action' => 'view', $element['Menu']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($element['Element']['id']); ?>
			&nbsp;
		</td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->

        
    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->


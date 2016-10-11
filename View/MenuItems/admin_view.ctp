
<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php  echo __('Menu Item'); ?></h3>
                <div class="box-tools pull-right">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $menuItem['MenuItem']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table id="MenuItems" class="table table-bordered table-striped">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Alias'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['alias']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent Menu Item'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($menuItem['ParentMenuItem']['name'], array('controller' => 'menu_items', 'action' => 'view', $menuItem['ParentMenuItem']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Lft'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['lft']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Rght'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['rght']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menu'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($menuItem['Menu']['name'], array('controller' => 'menus', 'action' => 'view', $menuItem['Menu']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Separator'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['separator']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Children'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['children']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Url'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['url']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('UlId'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['ulId']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('PartialMatch'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['partialMatch']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Permissions'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['permissions']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Class'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['class']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('IconTag'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['iconTag']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Level'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['level']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('IconShowChildrenTag'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['iconShowChildrenTag']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('ATagOtherAttibutes'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['aTagOtherAttibutes']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($menuItem['MenuItem']['id']); ?>
			&nbsp;
		</td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->

        
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Related Menu Items'); ?></h3>
                    <div class="box-tools pull-right">
    <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Child Menu Item'), array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>                    </div><!-- /.actions -->
                </div>
    <?php if (!empty($menuItem['ChildMenuItem'])): ?>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                		<th class="text-center"><?php echo __('Name'); ?></th>
		<th class="text-center"><?php echo __('Alias'); ?></th>
		<th class="text-center"><?php echo __('Parent Id'); ?></th>
		<th class="text-center"><?php echo __('Lft'); ?></th>
		<th class="text-center"><?php echo __('Rght'); ?></th>
		<th class="text-center"><?php echo __('Menu Id'); ?></th>
		<th class="text-center"><?php echo __('Separator'); ?></th>
		<th class="text-center"><?php echo __('Children'); ?></th>
		<th class="text-center"><?php echo __('Url'); ?></th>
		<th class="text-center"><?php echo __('UlId'); ?></th>
		<th class="text-center"><?php echo __('PartialMatch'); ?></th>
		<th class="text-center"><?php echo __('Permissions'); ?></th>
		<th class="text-center"><?php echo __('Class'); ?></th>
		<th class="text-center"><?php echo __('IconTag'); ?></th>
		<th class="text-center"><?php echo __('Level'); ?></th>
		<th class="text-center"><?php echo __('IconShowChildrenTag'); ?></th>
		<th class="text-center"><?php echo __('ATagOtherAttibutes'); ?></th>
		<th class="text-center"><?php echo __('Id'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php
										$i = 0;
										foreach ($menuItem['ChildMenuItem'] as $childMenuItem): ?>
		<tr>
			<td class="text-center"><?php echo $childMenuItem['name']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['alias']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['parent_id']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['lft']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['rght']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['menu_id']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['separator']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['children']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['url']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['ulId']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['partialMatch']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['permissions']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['class']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['iconTag']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['level']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['iconShowChildrenTag']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['aTagOtherAttibutes']; ?></td>
			<td class="text-center"><?php echo $childMenuItem['id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'menu_items', 'action' => 'view', $childMenuItem['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'menu_items', 'action' => 'edit', $childMenuItem['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'menu_items', 'action' => 'delete', $childMenuItem['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $childMenuItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                        </tbody>
                    </table><!-- /.table table-striped table-bordered -->
                </div><!-- /.table-responsive -->

    <?php endif; ?>



            </div><!-- /.related -->


    </div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->



<div class="row">
    <div class="col-xs-12">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><?php  echo __('Menu'); ?></h3>
                <div class="box-tools pull-right">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $menu['Menu']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                </div>
            </div>

            <div class="box-body table-responsive">
                <table id="Menus" class="table table-bordered table-striped">
                    <tbody>
                        <tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Alias'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['alias']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</td>
</tr>                    </tbody>
                </table><!-- /.table table-striped table-bordered -->
            </div><!-- /.table-responsive -->

        </div><!-- /.view -->

                        <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><?php echo __('Related Menu Settings'); ?></h3>
                        <div class="box-tools pull-right">
        <li><?php echo $this->Html->link(__('<i class="glyphicon glyphicon-plus"></i> Edit Menu Setting'), array('controller' => 'menu_settings', 'action' => 'edit', $menu['MenuSetting']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
         
                        </div>
                    </div>
        <?php if (!empty($menu['MenuSetting'])): ?>
                    <div class="box-body table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>		<td class="text-center"><strong><?php echo __('Menu Id'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['menu_id']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('ActiveClass'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['activeClass']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('FirstClass'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['firstClass']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('ChildrenClass'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['childrenClass']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('MenuClass'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['menuClass']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('EvenOdd'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['evenOdd']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('ItemFormat'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['itemFormat']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('WrapperFormat'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['wrapperFormat']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('WrapperClass'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['wrapperClass']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('NoLinkFormat'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['noLinkFormat']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('MenuVar'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['menuVar']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('AuthVar'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['authVar']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('AuthModel'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['authModel']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('AuthField'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['authField']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('IndentHtmlOutput'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['indentHtmlOutput']; ?>
&nbsp;</strong></td>
</tr><tr>		<td class="text-center"><strong><?php echo __('Id'); ?></strong></td>
		<td class="text-center"><strong><?php echo $menu['MenuSetting']['id']; ?>
&nbsp;</strong></td>
</tr>                        </table><!-- /.table table-striped table-bordered -->
                    </div>
                <?php endif; ?>
                </div><!-- /.related -->
                
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Related Elements'); ?></h3>
                    <div class="box-tools pull-right">
    <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Element'), array('controller' => 'elements', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>                    </div><!-- /.actions -->
                </div>
    <?php if (!empty($menu['Element'])): ?>

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                		<th class="text-center"><?php echo __('Name'); ?></th>
		<th class="text-center"><?php echo __('Alias'); ?></th>
		<th class="text-center"><?php echo __('Menu Id'); ?></th>
		<th class="text-center"><?php echo __('Id'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php
										$i = 0;
										foreach ($menu['Element'] as $element): ?>
		<tr>
			<td class="text-center"><?php echo $element['name']; ?></td>
			<td class="text-center"><?php echo $element['alias']; ?></td>
			<td class="text-center"><?php echo $element['menu_id']; ?></td>
			<td class="text-center"><?php echo $element['id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'elements', 'action' => 'view', $element['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'elements', 'action' => 'edit', $element['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'elements', 'action' => 'delete', $element['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $element['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
                        </tbody>
                    </table><!-- /.table table-striped table-bordered -->
                </div><!-- /.table-responsive -->

    <?php endif; ?>



            </div><!-- /.related -->


            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Related Menu Items'); ?></h3>
                    <div class="box-tools pull-right">
    <?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Menu Item'), array('controller' => 'menu_items', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>                    </div><!-- /.actions -->
                </div>
    <?php if (!empty($menu['MenuItem'])): ?>

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
		<th class="text-center"><?php echo __('IconShowChildrenTag'); ?></th>
		<th class="text-center"><?php echo __('Id'); ?></th>
                                <th class="text-center"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            	<?php
										$i = 0;
										foreach ($menu['MenuItem'] as $menuItem): ?>
		<tr>
			<td class="text-center"><?php echo $menuItem['name']; ?></td>
			<td class="text-center"><?php echo $menuItem['alias']; ?></td>
			<td class="text-center"><?php echo $menuItem['parent_id']; ?></td>
			<td class="text-center"><?php echo $menuItem['lft']; ?></td>
			<td class="text-center"><?php echo $menuItem['rght']; ?></td>
			<td class="text-center"><?php echo $menuItem['menu_id']; ?></td>
			<td class="text-center"><?php echo $menuItem['separator']; ?></td>
			<td class="text-center"><?php echo $menuItem['children']; ?></td>
			<td class="text-center"><?php echo $menuItem['url']; ?></td>
			<td class="text-center"><?php echo $menuItem['ulId']; ?></td>
			<td class="text-center"><?php echo $menuItem['partialMatch']; ?></td>
			<td class="text-center"><?php echo $menuItem['permissions']; ?></td>
			<td class="text-center"><?php echo $menuItem['class']; ?></td>
			<td class="text-center"><?php echo $menuItem['iconTag']; ?></td>
			<td class="text-center"><?php echo $menuItem['iconShowChildrenTag']; ?></td>
			<td class="text-center"><?php echo $menuItem['id']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'menu_items', 'action' => 'view', $menuItem['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'menu_items', 'action' => 'edit', $menuItem['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'menu_items', 'action' => 'delete', $menuItem['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $menuItem['id'])); ?>
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


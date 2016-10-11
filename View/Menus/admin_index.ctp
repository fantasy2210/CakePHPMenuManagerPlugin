<?php
$this->Paginator->options(array(
    'url' => array('action' => 'index'),
    'update' => '#datarows',
    'evalScripts' => true,
    'data' => http_build_query($this->request->data),
    'method' => 'POST',
));
?><div class="col-md-12 col-sm-12 col-xs-12">


    <div class="x_panel">
        <div class="x_title">
            <h2><?php echo __('Menus'); ?><?php echo $this->Html->link('Add new menu', array('action' => 'add'),array('class'=>'btn btn-info')) ?></h2>
        </div>

        <div class="x_content"> 
            <div class="row">
                <?php echo $this->Form->create('Menu', array('url' => array('action' => 'index'), 'class' => 'form-inline', 'role' => 'form')); ?>
                <div class="col-md-12">

                    <?php echo $this->Form->input('name', array('placeholder' => 'name', 'class' => 'form-control', 'div' => 'form-group', 'label' => array('class' => 'sr-only'))); ?>
                    <?php echo $this->Form->input('alias', array('placeholder' => 'alias', 'class' => 'form-control', 'div' => 'form-group', 'label' => array('class' => 'sr-only'))); ?>

                    <div class="form-group">
                        <?php echo $this->Form->button('Filter', array('type' => 'submit', 'class' => 'btn btn-primary btn-xs')); ?>
                        <?php echo $this->Form->button('Reset', array('type' => 'reset', 'class' => 'btn btn-warning btn-xs')); ?>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>            </div>
            <div class="table-responsive" id="datarows">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>

                        <tr class="headings">
                            

                            <th class="column-title"><?php echo $this->Paginator->sort('name'); ?></th>


                            <th class="column-title"><?php echo $this->Paginator->sort('alias'); ?></th>


                            <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

                            <th class="column-title no-link last"><span class="nobr"><?php echo __('Action')?></span></th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 0; ?><?php foreach ($menus as $menu): ?>
                            <?php $class = ($i++ % 2) ? "even" : "odd"; ?><tr class="<?php echo $class ?> pointer">                    
                                
                                <td class=""><?php echo h($menu['Menu']['name']); ?>&nbsp;</td>
                                <td class=""><?php echo h($menu['Menu']['alias']); ?>&nbsp;</td>
                                <td class=""><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
                                <td class="">
                                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $menu['Menu']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'view')); ?>
                                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $menu['Menu']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'edit')); ?>
                                    <?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $menu['Menu']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $this->element("pagination"); ?>  
            </div>
        </div>
    </div>
</div>

<?php
echo $this->Js->writeBuffer();

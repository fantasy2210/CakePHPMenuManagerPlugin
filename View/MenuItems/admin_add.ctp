<div class="well">
    <div class="x_title">
        <h2><?php echo __('Add Menu Item'); ?></h2>        
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br>
        <?php
        echo $this->Form->create('MenuItem', array(
            'data-parsley-validate' => '',
            'class' => 'form-horizontal form-label-left',
            'novalidate' => '',
            'inputDefaults' => array('div' => 'form-group', 'between' => '<div class="col-md-6 col-sm-6 col-xs-12">',
                'after' => '</div>')));
        ?>
        <?php echo $this->Form->input('name', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('alias', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('parent_id', array('escape' => false, 'options' => $parentMenuItems, 'empty' => '-- Select parent menu --', 'class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('menu_id', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('url', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('class', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('iconTag', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('iconShowChildrenTag', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('aTagOtherAttibutes', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>

        <?php echo $this->Form->input('partialMatch', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>
        <?php echo $this->Form->input('permissions', array('class' => 'form-control col-md-7 col-xs-12', 'label' => array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'))); ?>

        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <?php echo $this->Html->link("Cancel", array("action" => "index"), array("class" => "btn btn-primary")); ?>                
                <?php echo $this->Form->button('Lưu', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
            </div>
        </div>

        <?php echo $this->Form->end(); ?>
    </div>
</div>

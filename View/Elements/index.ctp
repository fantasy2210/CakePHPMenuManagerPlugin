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
            <h2><?php echo __('Elements'); ?></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/export/excel">Xuất excel 1</a>
                        </li>
                        <li><a href="/export/word">Xuất word</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php echo $this->Html->link('<i class="fa fa-plus"></i>',array("action"=>"add"),array("class"=>"add-link","escape"=>false));?>                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content"> 
            <!--Filter example form
            <form role="form" class="form-inline">
                <div class="form-group">
                    <label for="exampleInputEmail2" class="sr-only">Email address</label>
                    <input type="email" placeholder="Enter email" id="exampleInputEmail2" class="form-control"> </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" class="sr-only">Password</label>
                    <input type="password" placeholder="Password" id="exampleInputPassword2" class="form-control"> </div>
                <label class="mt-checkbox">
                    <input type="checkbox"> Remember me
                    <span></span>
                </label>
                <button class="btn btn-default" type="submit">Sign in</button>
            </form>
            -->

            <div class="row">
                <?php echo $this->Form->create('Element',array('url'=>array('action'=>'index'),'class'=>'form-inline','role'=>'form'));?>
                <div class="col-md-12">

                                                                        <?php echo $this->Form->input('name',array('placeholder'=>'name','class'=>'form-control','div' => 'form-group','label'=>array('class'=>'sr-only')));?>
                                                                                                <?php echo $this->Form->input('alias',array('placeholder'=>'alias','class'=>'form-control','div' => 'form-group','label'=>array('class'=>'sr-only')));?>
                                                                                                <?php echo $this->Form->input('menu_id',array('placeholder'=>'menu_id','class'=>'form-control','div' => 'form-group','label'=>array('class'=>'sr-only')));?>
                                                                                                            
                    <div class="form-group">
                        <?php echo $this->Form->button('Filter',array('type'=>'submit','class'=>'btn btn-primary btn-xs'));?>
                        <?php echo $this->Form->button('Reset',array('type'=>'reset','class'=>'btn btn-warning btn-xs'));?>
                    </div>
                </div>
                <?php echo $this->Form->end();?>            </div>
            <div class="table-responsive" id="datarows">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>

                        <tr class="headings">
                            <th><input type="checkbox" id="check-all" class="flat"></th>
                            
                                <th class="column-title"><?php echo $this->Paginator->sort('name'); ?></th>

                            
                                <th class="column-title"><?php echo $this->Paginator->sort('alias'); ?></th>

                            
                                <th class="column-title"><?php echo $this->Paginator->sort('menu_id'); ?></th>

                            
                                <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

                                                        <th class="column-title no-link last"><span class="nobr">Hành động</span></th>
                            <th class="bulk-actions" colspan="<?php echo (count($elements[0]["Element"])+2)?>" >
                                <div class="dropdown">
                                    <button class="antoo btn btn-success " style="color:#fff; font-weight:500;" data-toggle="dropdown">
                                        Hành động hàng loạt ( <span class="action-cnt">trên 10 dòng đã chọn</span> ) 
                                        <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a id="deleteSeleted" href="#">Xóa dòng đã chọn</a></li>
                                        <li><a id="exportSeleted" href="#" >Xuất báo cáo</a></li>

                                    </ul>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i = 0;?><?php foreach ($elements as $element): ?>
<?php $class = ($i++%2)?"even":"odd";?><tr class="<?php echo $class ?> pointer">                    <td class = "a-center ">
                        <input type = "checkbox" class = "flat" name = "table_records" value="<?php echo $element['Element']['id'] ?>">
                    </td>
                    		<td class=""><?php echo h($element['Element']['name']); ?>&nbsp;</td>
		<td class=""><?php echo h($element['Element']['alias']); ?>&nbsp;</td>
		<td class="">
			<?php echo $this->Html->link($element['Menu']['name'], array('controller' => 'menus', 'action' => 'view', $element['Menu']['id'])); ?>
		</td>
		<td class=""><?php echo h($element['Element']['id']); ?>&nbsp;</td>
		<td class="">
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $element['Element']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
			<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $element['Element']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
			<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $element['Element']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $element['Element']['id'])); ?>
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
<script>
    $('#deleteSeleted').click(function () {
        if (confirm("This action cannot undo, are you sure ?")) {
            var selectedRecord = $(".bulk_action input[name='table_records']:checked").serializeArray();
            $.post('http://localhost/elements/delete', {selectedRecord: selectedRecord}, function (response) {
                if (response) {

                } else {
                    alert('Something went wrong!!!');
                    return false;
                }
            });
            return true;
        } else {
            return false;
        }

    });
</script>

<?php echo $this->Js->writeBuffer();
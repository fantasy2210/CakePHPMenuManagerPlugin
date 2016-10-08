<?php
$this->Paginator->options(array(
    'url' => array('action' => 'index'),
    'update' => '#datarows',
    'evalScripts' => true,
    'data' => http_build_query($this->request->data),
    'method' => 'POST',
));
?><div class="col-md-12 col-sm-12 col-xs-12">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php
            $top_menu = $this->requestAction(array('plugin' => 'menu_manager', 'controller' => 'menu_items', 'action' => 'renderMenu'), array('menu_id' => 1));

            echo $this->MenuBuilder->build($top_menu[0], array('class' => 'nav navbar-nav', 'wrapperClass' => 'dropdown-menu'), $top_menu[1]);
            ?>
        </div><!--/.nav-collapse -->
    </div>

    <div class="x_panel">
        <div class="x_title">
            <h2><?php echo __('Menus'); ?></h2>
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
                <?php echo $this->Html->link('<i class="fa fa-plus"></i>', array("action" => "add"), array("class" => "add-link", "escape" => false)); ?>                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
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
                            <th><input type="checkbox" id="check-all" class="flat"></th>

                            <th class="column-title"><?php echo $this->Paginator->sort('name'); ?></th>


                            <th class="column-title"><?php echo $this->Paginator->sort('alias'); ?></th>


                            <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

                            <th class="column-title no-link last"><span class="nobr">Hành động</span></th>
                            <th class="bulk-actions" colspan="<?php echo (count($menus[0]["Menu"]) + 2) ?>" >
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
                        <?php $i = 0; ?><?php foreach ($menus as $menu): ?>
                            <?php $class = ($i++ % 2) ? "even" : "odd"; ?><tr class="<?php echo $class ?> pointer">                    
                                <td class = "a-center ">
                                    <input type = "checkbox" class = "flat" name = "table_records" value="<?php echo $menu['Menu']['id'] ?>">
                                </td>
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
<script>
    $('#deleteSeleted').click(function () {
        if (confirm("This action cannot undo, are you sure ?")) {
            var selectedRecord = $(".bulk_action input[name='table_records']:checked").serializeArray();
            $.post('http://localhost/menus/delete', {selectedRecord: selectedRecord}, function (response) {
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

<?php
echo $this->Js->writeBuffer();

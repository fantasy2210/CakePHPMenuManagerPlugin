<?php
$this->Paginator->options(array(
    'url' => array('action' => 'index'),
    'update' => '#datarows',
    'evalScripts' => true,
    'data' => http_build_query($this->request->data),
    'method' => 'POST',
));
?><table class="table table-striped jambo_table bulk_action">
    <thead>

        <tr class="headings">
            <th><input type="checkbox" id="check-all" class="flat"></th>

            <th class="column-title"><?php echo $this->Paginator->sort('name'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('alias'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('parent_id'); ?></th>


            <th class="column-title"><?php echo $this->Paginator->sort('menu_id'); ?></th>

            <th class="column-title"><?php echo $this->Paginator->sort('id'); ?></th>

            <th class="column-title no-link last"><span class="nobr">Hành động</span></th>
            <th class="bulk-actions" colspan="<?php echo (count($menuItems[0]["MenuItem"]) + 2) ?>" >
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
        <?php $i = 0; ?><?php foreach ($menuItems as $menuItem): ?>
            <?php $class = ($i++ % 2) ? "even" : "odd"; ?><tr class="<?php echo $class ?> pointer">                    <td class = "a-center ">
                    <input type = "checkbox" class = "flat" name = "table_records" value="<?php echo $menuItem['MenuItem']['id'] ?>">
                </td>
                <td class=""><?php echo h($menuItem['MenuItem']['name']); ?>&nbsp;</td>
                <td class=""><?php echo h($menuItem['MenuItem']['alias']); ?>&nbsp;</td>
                <td class="">
                    <?php echo $this->Html->link($menuItem['ParentMenuItem']['name'], array('controller' => 'menu_items', 'action' => 'view', $menuItem['ParentMenuItem']['id'])); ?>
                </td>
                <td class="">
                    <?php echo $this->Html->link($menuItem['Menu']['name'], array('controller' => 'menus', 'action' => 'view', $menuItem['Menu']['id'])); ?>
                </td>
                <td class=""><?php echo h($menuItem['MenuItem']['id']); ?>&nbsp;</td>
                <td class="">
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('action' => 'view', $menuItem['MenuItem']['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'view')); ?>
                    <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('action' => 'edit', $menuItem['MenuItem']['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'edit')); ?>
                    <?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('action' => 'delete', $menuItem['MenuItem']['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle' => 'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $menuItem['MenuItem']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->element("pagination"); ?>  
<script>
    $('#deleteSeleted').click(function () {
        if (confirm("This action cannot undo, are you sure ?")) {
            var selectedRecord = $(".bulk_action input[name='table_records']:checked").serializeArray();
            $.post('http://localhost/menuItems/delete', {selectedRecord: selectedRecord}, function (response) {
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

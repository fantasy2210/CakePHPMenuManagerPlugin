<!-- Static navbar -->
<nav class="navbar navbar-default">
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
            
            echo $this->MenuBuilder->build($menu_id, array('class' => 'nav navbar-nav', 'wrapperClass' => 'dropdown-menu'), $menu) ?>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>




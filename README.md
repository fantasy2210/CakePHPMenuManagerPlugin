# CakePHP 2.x dynamic menu manager plugin

If you want to store and render your menu dynamically, this plugin is your solution.

##Intallation

Download and extract to `app/Plugin/MenuManager`
Open bootstrap.php and add this line:

`CakePlugin::load('MenuManager');`

Open AppController.php add component and renderMenu function:

        public $components = array('MenuManager.MenuGatherer','Flash');
        public function renderMenu() {
                $menu = array();
                $menu_id = "";
                /* Check if requestAction */
                if ($this->params->params['bare']) {
                    if ($this->params->params['named']['menu_id']) {
                        $menu_id = $this->params->params['named']['menu_id'];
                        $menu = $this->MenuGatherer->render($menu_id);
                    }
                }
                return $menu;
            }

Create plugin database: this action will create 2 table menus and menu_items to current database.
`cake schema create -p MenuManager`

Add fun

##Using:
1. What are your menu look like ? You must identify it. For examle, I need a menu like:<br/>
<p>
[![Menu demo image, click here to see the menu, if the image not show]( https://lh4.googleusercontent.com/NjN4eGxYSZtsnF2LE0yrPAWYrjLCBlxHxT_uvP4k_VOZLsk-jMjW2VgIzGlRzk_oOOdRI5mawC1JV_M=w1366-h657 )](https://getbootstrap.com/examples/navbar/ )

###The code of above menu:
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
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                  <li class="dropdown open">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li role="separator" class="divider"></li>
                      <li class="dropdown-header">Nav header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>            
              </div><!--/.nav-collapse -->
            </div>`
</p>
2. create Menu and menu Items:

Open http://yourcakephpappurl/menu_manager/menus/add and add menu: name: Top menu; alias: top-menu

Open http://yourcakephpappurl/menu_manager/menu_items/add and add some menu items.

4. Insert to view or element
You need menu_id to render it. For example, top_menu has menu_id is 2 and here is my top_menu element code:


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


#Remember:

This plugin prepare data for [MenuBuilder Helper]( https://github.com/torifat/cake-menu_builder ) generate. Therefore, you should know how to generate menu in [MenuBuilder Helper]( https://github.com/torifat/cake-menu_builder )

I have custom [MenuBuilder Helper]( https://github.com/torifat/cake-menu_builder ):

I add iconTag (icon of menu item),iconShowChildrenTag(icon of show down menu children),aTagOtherAttibutes( other a tag css attribute)

Special thanks to author of [MenuBuilder Helper]( https://github.com/torifat/cake-menu_builder ), [CakePHP]( http://cakephp.org)


The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
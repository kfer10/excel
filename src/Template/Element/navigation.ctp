<?php $this->request->session()->check('Auth.User'); ?>

<?php if($this->request->session()->read('Auth.User.user_type_id') == 2) { ?>
<i class="fa fa-user"></i> <?php echo $this->Html->link('Profile', ['prefix'=>false,'controller'=>'users','action'=>'profile',$this->request->session()->read('Auth.User.id')]); ?> |
<?php echo $this->Html->link('Logout', ['prefix'=>false,'controller'=>'users','action'=>'logout']);
} ?>

<?php if($this->request->session()->read('Auth.User.user_type_id') == 1) { ?>
<i class="fa fa-user"></i> <?php echo $this->Html->link('Admin Panel', ['controller'=>'users','action'=>'profile',$this->request->session()->read('Auth.User.id')]); ?> |
<?php echo $this->Html->link('Logout', ['prefix'=>false,'controller'=>'users','action'=>'logout']);
} ?>




<!--

        <div class="moduletable_leftmenu">
          <ul class="nav navbar-nav" id="noDesign">
            <?php if($this->request->session()->check('Auth.User')){ ?>
              <?php if($this->request->session()->read('Auth.User.user_type_id') == 1) { ?>
              <h5>Signed in as: Admin</h5>

              <li><?php echo $this->Html->link('Admin Panel', ['controller' => 'users', 'action' => 'index', 'prefix' => 'admin', '_full' => true]);
              } ?>
              </li>

              <?php $count = $this->request->session()->read('count') ?>


             <li><?php echo $this->Html->link('Home', ['controller' => 'users', 'action' => 'home', '_full' => true]); ?></li>
              <li><?php echo $this->Html->link('My Profile', ['controller' => 'users', 'action' => 'viewprofile', $this->request->session()->read('Auth.User.id')]); ?></li>
              <li> <?php if($this->request->session()->read('Auth.User.user_type_id') != 1){
                        echo $this->Html->link('Subscriptions', ['controller' => 'mailing', 'action' => 'index', 'prefix' => false]); } ?></li>
              <li><?php echo $this->Html->link('Library Catalogue', ['controller' => 'items', 'action' => 'search']); ?></li>

              <li><?php echo $this->Html->link('My Library Cart'.' ('.$count.')', ['controller' => 'items', 'action' => 'librarycart']);  ?></li>

              <li><?php echo $this->Html->link('My Reserves', ['controller' => 'reserves', 'action' => 'viewReserves']); ?></li>

              <li> <?php if($this->request->session()->read('Auth.User.user_type_id') != 1){
                        echo $this->Html->link('Make an Enquiry', ['controller' => 'users', 'action' => 'enquiry']); } ?></li>

              <li> </li><br>
              <li> <?php echo $this->Html->link( "Logout", ['action' => '../users/logout'] ); } ?></li>

          </ul>
        </div>
-->



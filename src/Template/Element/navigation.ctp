<?php $this->request->session()->check('Auth.User'); ?>

<?php if($this->request->session()->read('Auth.User.user_type_id') == 2) { ?>
<i class="fa fa-user"></i> <?php echo $this->Html->link('Profile', ['prefix'=>false,'controller'=>'users','action'=>'profile',$this->request->session()->read('Auth.User.id')]); ?> |
<?php echo $this->Html->link('Logout', ['prefix'=>false,'controller'=>'users','action'=>'logout']);
} ?>

<?php if($this->request->session()->read('Auth.User.user_type_id') == 1) { ?>
<i class="fa fa-user"></i> <?php echo $this->Html->link('Admin', ['controller'=>'users','action'=>'profile',$this->request->session()->read('Auth.User.id')]); ?> |
<?php echo $this->Html->link('Logout', ['prefix'=>false,'controller'=>'users','action'=>'logout']);
} ?>





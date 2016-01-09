<?php echo $this->Html->css(['login.css']); ?>
<br>
<center>
    <div class="login">
      <h1>Login</h1>
      <?= $this->Flash->render('auth') ?>
      <?= $this->Form->create('login',['novalidate'=>true]) ?>
        <p><?= $this->Form->input('email',['label'=>false,'placeholder'=>'Email Address']); ?><br>
        <?= $this->Form->input('password',['label'=>false,'placeholder'=>'Password']); ?></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login &raquo;"></p>
      <?= $this->Form->end() ?>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>
</center>

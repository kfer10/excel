<?php $this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']); ?>

<div class="users-view">
    <center><h3>Edit Profile</h3></center> <span class="id">ID: #<?= h($user->id) ?></span>
    <?= $this->Form->create($user,['novalidate'=>true,'class'=>'register']) ?>
        <fieldset class="edit">
            <legend></legend><br>
            <p>Personal Information</p>
            <?php echo $this->Form->input('givenname',['label'=>'First Name: ']); ?><br><br>
            <?php echo $this->Form->input('familyname',['label'=>'Last Name: ']); ?><br><br><br>
            <?php echo $this->Form->input('gender',['label'=>'Gender: ']); ?><br><br>
            <?php echo $this->Form->input('birthday',['label'=>'Birthday: ']); ?><br><br><br>


            <p>Address</p>
            <?php echo $this->Form->input('address',['label'=>'Address: ']); ?><br><br>
            <?php echo $this->Form->input('suburb',['label'=>'Suburb: ']); ?><br><br>
            <?php echo $this->Form->input('state',['label'=>'State: ']); ?><br><br>
            <?php echo $this->Form->input('postcode',['label'=>'Postcode: ']); ?><br><br>
            <?php echo $this->Form->input('country_id',['label' => 'Country','class'=>'long','options'=>$countries]); ?><br><br><br>

            <p>Contact Information</p>
            <?php echo $this->Form->input('email',['label'=>'Email Address: ']); ?><br><br>
            <?php echo $this->Form->input('phone',['label'=>'Phone: ']); ?><br><br>
            <?php echo $this->Form->input('mobile',['label'=>'Mobile: ']); ?><br><br><br>

            <?= $this->Form->button(__('Submit')) ?><Br><br>
        </fieldset>
    <?= $this->Form->end() ?>
</div>


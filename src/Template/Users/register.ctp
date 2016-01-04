
<div>
    <?= $this->Form->create($user,['class'=>'register', 'novalidate' => true]) ?>
        <h1>Registration</h1> <label class="required">* required fields</label>
        <fieldset class="row1">
            <legend>Account Details</legend>
            <p>
                <?php echo $this->Form->input('email',['label' => 'Email *','class'=>'email']); ?> <br><br>
                <?php echo $this->Form->input('confirm_email',['label' => 'Confirm email *','class'=>'email','type'=>'email']); ?>
            </p>
            <p>
                <?php echo $this->Form->input('password',['label' => 'Password *','class'=>'password','type'=>'password']); ?>
                <?php echo $this->Form->input('confirm_password',['label' => 'Confirm password *','class'=>'password','type'=>'password']); ?>
            </p>
        </fieldset>

        <fieldset class="row2">
            <legend>Personal Details
            </legend>
            <p>
                <?php echo $this->Form->input('givenname',['label' => 'First Name *','class'=>'long']); ?><br><br>
                <?php echo $this->Form->input('familyname',['label' => 'Last Name *','class'=>'long']); ?><br><br>
            </p>
            <p>
                <?php echo $this->Form->input('birthday',['label' => 'D.O.B *','class'=>'date']); ?>
            </p>
            <p>
            <?php
                $option = ['Male'=>'Male','Female'=>'Female'];
                echo $this->Form->input('gender',['type'=>'radio','options'=>$option,'label'=>''],['class'=>'gender']);
            ?>
            </p>
            <p>
                <?php echo $this->Form->input('phone',['label' => 'Phone *','class'=>'password']); ?><br><br>
                <?php echo $this->Form->input('mobile',['label' => 'Mobile *','class'=>'password']); ?>
            </p>
        </fieldset>


        <fieldset class="row3">
            <legend>Address</legend>

            <p>
                <?php echo $this->Form->input('address',['label' => 'Address *','class'=>'long']); ?><br><br>
                <?php echo $this->Form->input('suburb',['label' => 'Suburb *','class'=>'long']); ?><br><br>
                <?php echo $this->Form->input('state',['label' => 'State *','class'=>'long']); ?><br><br>
                <?php echo $this->Form->input('postcode',['label' => 'Postcode *','class'=>'short-long']); ?><br><br>
                <?php echo $this->Form->input('country_id',['label' => 'Country *','class'=>'long','options'=>$countries]); ?><br><br>
            </p>
            <div class="infobox"><h4>Extra Information</h4>
                <p>Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
        </fieldset>

        <fieldset class="row4">
            <legend>Terms and Mailing</legend>
            <p class="agreement">
                <input type="checkbox" value=""/>
                <label>*  I accept the <a href="#">Terms and Conditions</a></label>
            </p>
        </fieldset>
        <br>
        <div><button class="button">Register &raquo;</button></div>
        <?= $this->Form->end() ?>
</div>

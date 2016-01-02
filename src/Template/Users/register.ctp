<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="register">
<?= $this->Form->create($user,['class'=>'register', 'novalidate' => true]) ?>
    <fieldset>
        <legend><?= __('Registration Form') ?></legend>
        <table>
            <tr>
                <td>Email: </td>
                <td><?php echo $this->Form->input('email',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><?php echo $this->Form->input('password',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Given Name: </td>
                <td><?php echo $this->Form->input('givenname',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Family Name: </td>
                <td><?php echo $this->Form->input('familyname',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><?php echo $this->Form->input('address',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Suburb: </td>
                <td><?php echo $this->Form->input('suburb',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Postcode: </td>
                <td><?php echo $this->Form->input('postcode',['label'=>false]); ?></td>
            </tr>
            <tr>
                <td>Country: </td>
                <td><?php echo $this->Form->input('country',['label'=>false]); ?></td>
            </tr>
        </table>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>



</div>

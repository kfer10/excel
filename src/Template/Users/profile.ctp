
<div class="users-view">
    <center><h3>User Profile</h3></center>
    <span class="id">ID: #<?= h($user->id) ?></span>
    <form class="view">
        <fieldset class="view">
            <legend><?= h($user->givenname . ' ' . $user->familyname) ?> <span class="editButton"><?= $this->Html->link('Edit <i class="fa fa-edit"></i>', ['controller'=>'users', 'action' => 'edit', $user->id],['escapeTitle' => false]) ?></legend><br>
            <p>Address</p>
            <?= h($user->address) ?>,  <?= h($user->suburb) ?><br>
            <?= h($user->state) ?> <?= h($user->postcode) ?><br>
            <?= h($user->country->country_name) ?><br><br>


            <p>Personal Information</p>
            <b>Gender:</b> <?= h($user->gender) ?><br>
            <b>Birthday:</b> <?= h($user->birthday) ?><br><br><br>

            <p>Contact Information</p>
            <b>Email Address:</b> <?= h($user->email) ?><br>
            <b>Home Phone:</b> <?= h($user->phone) ?><br>
            <b>Mobile Phone:</b> <?= h($user->mobile) ?><br><br><br>
        </fieldset>
    </form>
</div>


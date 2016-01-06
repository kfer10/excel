<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Givenname') ?></th>
            <td><?= h($user->givenname) ?></td>
        </tr>
        <tr>
            <th><?= __('Familyname') ?></th>
            <td><?= h($user->familyname) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Suburb') ?></th>
            <td><?= h($user->suburb) ?></td>
        </tr>
        <tr>
            <th><?= __('State') ?></th>
            <td><?= h($user->state) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Postcode') ?></th>
            <td><?= $this->Number->format($user->postcode) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $this->Number->format($user->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= $this->Number->format($user->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= $this->Number->format($user->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
    </table>
</div>

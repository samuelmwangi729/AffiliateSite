<li>
    <a href="/home"><i class="fa fa-tachometer">Dashboard</i></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-sort"></i><span>User Roles</span></a>
</li>

<li class="{{ Request::is('refsLevels*') ? 'active' : '' }}">
    <a href="{!! route('refsLevels.index') !!}"><i class="fa fa-arrow-down"></i><span>Referal Levels</span></a>
</li>

<li class="{{ Request::is('refsCategories*') ? 'active' : '' }}">
    <a href="{!! route('refsCategories.index') !!}"><i class="fa fa-edit"></i><span>Referal Sites</span></a>
</li>
<li>
    <a href="#"><i class="fa fa-cog">Withdraw Cash</i></a>
</li>
<li>
    <a href="#"><i class="fa fa-cog">Add New Member</i></a>
</li>
<li>
    <a href="#"><i class="fa fa-cog">Upgrade Membership</i></a>
</li>
<li>
    <a href="#"><i class="fa fa-cog">Payment Method</i></a>
</li>
<li>
    <a href="#"><i class="fa fa-cog">Account Status</i></a>
</li>
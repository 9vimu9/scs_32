<li class="dropdown user user-menu" id="user_menu">
    <!-- Menu Toggle Button -->
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <!-- The user image in the navbar-->
        <img src="{{ Gravatar::get($user->email) }}" class="user-image" alt="User Image"/>
        <!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu">
        <!-- The user image in the menu -->
        <li class="user-header">
            <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
            <p>
                {{ Auth::user()->name }}
                <small>{{ trans('adminlte_lang::message.login') }} Nov. 2012</small>
            </p>
        </li>
        <!-- Menu Body -->
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">{{ trans('adminlte_lang::message.followers') }}</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">{{ trans('adminlte_lang::message.sales') }}</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">{{ trans('adminlte_lang::message.friends') }}</a>
            </div>
        </li>
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="{{ url('/user/profile') }}" class="btn btn-default btn-flat">{{ trans('adminlte_lang::message.profile') }}</a>
            </div>
            <div class="pull-right">
                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat" id="logout"
                   onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    {{ trans('adminlte_lang::message.signout') }}
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="submit" value="logout" style="display: none;">
                </form>

            </div>
        </li>
    </ul>
</li>

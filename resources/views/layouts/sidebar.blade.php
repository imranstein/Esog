<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material/img/sidebar-1.jpg') }}">

    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Esog Admin
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('/') ? 'active' :'' }}">

                <a class="nav-link" href="/">

                    <i style="color:black;" class="material-icons">dashboard</i>
                    <p style="color:black;">Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('users') ? 'active' :'' }}">

                <a class="nav-link" href="users">


                    <i style="color:black;" class="material-icons">people</i>


                    <p style="color:black;">Users</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('roles') ? 'active' :'' }}">

                <a class="nav-link" href="roles">


                    <i style="color:black;" class="material-icons">work</i>


                    <p style="color:black;">Roles</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('member') ? 'active' :'' }}">

                <a class="nav-link" href="/member">


                    <i style="color:black;" class="material-icons">groups</i>

                    <p style="color:black;">Member</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('team') ? 'active' :'' }}">

                <a class="nav-link" href="/team">


                    <i style="color:black;" class="material-icons">groups</i>

                    <p style="color:black;">Team</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('news') ? 'active' :'' }}">

                <a class="nav-link" href="/news">


                    <i style="color:black;" class="material-icons">groups</i>

                    <p style="color:black;">News</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('publication') ? 'active' :'' }}">

                <a class="nav-link" href="/publication">


                    <i style="color:black;" class="material-icons">groups</i>

                    <p style="color:black;">Publication</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('guidelines') ? 'active' :'' }}">

                <a class="nav-link" href="/guidelines">


                    <i style="color:black;" class="material-icons">groups</i>

                    <p style="color:black;">Guidelines</p>
                </a>
            </li>




            {{-- <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/roles">
                    <i style="color:black;" class="material-icons">work</i>

                    <p style="color:black;">Role List</p>

                </a>
            </li> --}}



        </ul>
    </div>
</div>
<script>
    $(document).ready(function() {

        $('ul.nav > li')
            .click(function(e) {
                $('ul.nav > li')
                    .removeClass('active');
                $(this).addClass('active');
            });
    });

</script>


<ul class="side-nav black-text" id="mobile-demo">
    <li>
        <div class="perfil">
            <img  class="responsive-img circle img-perfil" src="">
        </div>
    </li>

    <li>
        <ul class="collapsible collapsible-accordion">

            <li id="menu-usuario">
                <a id="nome-perfil" class="collapsible-header waves-effect bold ">
                    <i class="material-icons right">add</i>
                    <span class="nome"> {{ Auth::user()->name }}</span>
                </a>

                <div class="collapsible-body" style="">

                    <ul>
                        <li>
                            <a href="/perfil" class="waves-effect waves-light modal-trigger">

                                <i class="material-icons left">perm_identity</i>
                                 Perfil
                            </a>
                        </li>

                        <li>
                            <a href="#" class="waves-effect waves-light modal-trigger" >

                                <i class="material-icons left">settings</i>
                                Redefinir Senha
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="material-icons left">power_settings_new</i>
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="/" class="collapsible-header waves-effect bold active">
                    <i class="material-icons left">dashboard</i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="/campus" class="collapsible-header waves-effect bold">
                    <i class="material-icons">account_balance</i>Campus
                </a>
            </li>

            <li>
                <a href="/bloco" class="collapsible-header waves-effect bold">
                    <i class="material-icons">business</i>Bloco
                </a>
            </li>

            <li>
                <a href="/sala" class="collapsible-header waves-effect bold">
                    <i class="material-icons">vpn_key</i>Sala
                </a>
            </li>

            <li>
                <a href="/rota" class="collapsible-header waves-effect bold">
                    <i class="material-icons">room</i>Rota
                </a>
            </li>

            <li>
                <a href="/grade" class="collapsible-header waves-effect bold">
                    <i class="material-icons">insert_invitation</i>Grade
                </a>
            </li>

            <li>
                <a href="/disciplina" class="collapsible-header waves-effect bold">
                    <i class="material-icons">assignment</i>Disciplinas
                </a>
            </li>


        </ul>
    </li>
</ul>

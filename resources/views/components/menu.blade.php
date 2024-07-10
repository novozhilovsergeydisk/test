<div class="menu-wrapper c x q ea xb hc pd af lf zj zm an kn mn zn ho jo mp sp">
    <div class="hc zd">
        <nav>
            <ul class="navbar hb ld od pd wd lh wn zn ao bo">
                <li>
                    <a href="/" class="{{ request()->is('') ? 'active' : ''}} menu-scroll ib od pd lh mh sh gi cj ik">Главная</a>
                </li>

                <li>
                    <a href="{{ url('/billboard') }}" class="{{ request()->is('billboard') ? 'active' : ''}} menu-scroll ib od pd lh mh sh gi cj ik">Доска объявлений</a>
                </li>

                <li>
                    <a href="{{ url('/login') }}" class="{{ request()->is('login') ? 'active' : ''}} menu-scroll ib od pd lh mh sh gi cj ik">Личный кабинет</a>
                </li>

                <li>
                    <a href="{{ url('/contacts') }}" class="{{ request()->is('contacts') ? 'active' : ''}} menu-scroll ib od pd lh mh sh gi cj ik">Контакты </a>
                </li>

            </ul>
        </nav>
    </div>
    <!--<div class="d m q hb hc od qd ud yd lf an tn co jo">
        <a href="signup.html" class="hc ce de ye zf tf lh mh ii bj tn">
            Вход
        </a>
        <a href="signup.html" class="hc ce de se zf tf lh mh ii bj tn">
            Sign Up
        </a>
    </div>-->
</div>

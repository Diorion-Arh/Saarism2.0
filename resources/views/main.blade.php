<section class="main_content">
    <script src="{{asset ("js/app.js")}}"></script>
    <section class="posts">
        <div class="toggle_posts">
            <button class="lent_creators" onclick="ToggleButton(1)">Лента деятелей</button>
            <button class="lent_listeners"onclick="ToggleButton(2)">Лента слушателей</button>
        </div>
        <section class="INCLUDE-doers">
        @include('post')
        @include('post')
        @include('post')
        @include('post')
        @include('post')  
        </section>
        <section class="INCLUDE-listeners">
        @include('post')
        </section>        
    </section>
    <section class="navigation">
      <div class="n__wrapper">
      <span class="n__w__sub">категории:</span>
          <ul id="accordion" class="accordion">
              <li>
                  <div class="link"><i class="fa fa-database"></i>Деятели<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">1 Диорион Арх</a></li>
                      <li><a href="#">2 Аногиаст Демон</a></li>
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-code"></i>Философия<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">Природный свет Жизни</a></li>
                      <li><a href="#">О мировых религиях</a></li>
                      <li><a href="#">Социальные отношения</a></li>
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-mobile"></i>Вопрос/ответ<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Космология<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Практики<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Миры<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Технологии<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Видеоконференции<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Сообщество Азеркинов<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                  </ul>
              </li>
          </ul>
          <span class="n__w__sub">Отфильтровать по:</span>
          <ul id="accordion2" class="accordion">
              <li>
                  <div class="link"><i class="fa fa-database"></i>Дате публикации<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">Самые новые записи</a></li>
                      <li><a href="#">за последние 3 дня</a></li>
                      <li><a href="#">выбрать период</a></li>
                      <li><a href="#">указать конкретную дату</a></li>
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-code"></i>Вероучению<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">Анимакотрикс</a></li>
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-mobile"></i>Деятелям<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">1 Диорион Арх</a></li>
                      <li><a href="#">2 Аногиаст Демон</a></li>
                  </ul>
              </li>
              <li>
                  <div class="link"><i class="fa fa-globe"></i>Обсуждаемости<i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu">
                      <li><a href="#">Самые обсуждаемые</a></li>
                  </ul>
              </li>
          </ul>
      </div>
    </section>
</section>

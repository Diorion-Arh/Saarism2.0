@section('registration-selection')
<section class="registration_selection">
    <div class="r_s__position">
    <span class="r_s__p__heading">
        SAARISM
    </span>
        <span class="r_s__p__register_as">
            Зарегистрироваться как:
        </span>
        <div class="r_s__p__group_button">
            <form action="reg_doer">
            <button href="" class="r_s__p__g_b__doer">
                Деятель
            </button >
            </form>
            <form action="reg_listener">
            <button class="r_s__p__g_b__listener">
                Слушатель
            </button>
            </form>
        </div>
        <span class="r_s__p__entry"><a href="sign">Войти</a> </span>
    </div>
    </section>
@endsection

@section('reg-doer')

<section class="registration_selection">
    <div class="r_s__filling">
    <div class="registration_filling ">
<span class="r_s__p__filling">SAARISM</span>
    <form action="" method="post">    
<div class="form-group">       
    <label   label for="">ФИО/ник</label>
    <input class="form-control" type="text" placeholder="введите ФИО, либо никнейм">
</div>
<div class="form-group">       
    <label for="" >Электронная почта</label>
    <input class="form-control" type="text" placeholder="Электронная почта">
    <small id="" class="form-text text-muted">На эту почту будут приходить письма для подтверждения и регистрационного тестирования</small>
</div>

<div class="form-group">       
    <label for="exampleInputPassword1">Пол</label>
    <div class="form-row">
    <div class="col-6"><input class="form-control" type="text" placeholder="Пол"></div>
     <div class="col-5">
      <select class="form-control" id="">
      <option>не определено</option>   
      <option>мужской</option>
      <option>женский</option>
    </select>
    </div>
</div>
    <small id="" class="form-text text-muted">Вы можете указать свой пол или выбрать из списка</small>
</div>
<div class="form-group">       
    <label for="" >Номер телефона</label>
    <input class="form-control" type="text" placeholder="+7 xxx xxx xx xx">
</div>
  <div class="form-group">       
 <small id="" class="form-text text-muted">После успешного прохождения теста, мы вышлем вам на электронную почту <b><a href="">код связи</a></b>, который
     вы будете использовать для авторизации.
 </small>
</div>          
<div class="form-group">
    <label for="">Цель регистрации</label>
    <textarea class="form-control" id="" rows="3" placeholder="не менее 100 символов"></textarea>
  </div>
<div class="form-group">
 <small id="" class="form-text text-muted">регистрируясь, вы соглашаетесь с <a href="">условиями проекта</a> 
 </small>
  </div>  

</form>
</div>


</div>  <div class="form-group">   
<div class="r_s__submit">  
<button class="">Отправить</button>
</div>  
</div> 
</section>
@endsection

@section('reg-listener')
    {{-- заполнить --}}
@endsection

@section('sign-selection')
<section class="registration_selection">
    <div class="r_s__position">
    <span class="r_s__p__heading">
        SAARISM
    </span>
        <span class="r_s__p__register_as">
            Войти как:
        </span>
        <div class="r_s__p__group_button">
            <form action="sign_doer">
            <button class="r_s__p__g_b__doer">Деятель</button >
            </form>
            <form action="sign_listener">
            <button class="r_s__p__g_b__listener">Слушатель</button>
            </form>
        </div>
        <span class="r_s__p__entry"><a href="register">Зарегистрироваться</a> </span>
    </div>
    </section>
@endsection

@section('sign-doer')

<section class="registration_activist">
    <div class="r_a__position">
        <span class="r_a__p__heading">SAARISM</span>
        <span class="r_s__p__submit_as">Войти как:</span>
        <button class="r_a__p__activist" data-title="Вы можете создать свое Учение, концепции которого вы сможете свободно продвигать.">Деятель</button>
        <span class="r_s__p__input_data_form">
            <input class="r_s__p__i_d_f__ID_card" type="text" placeholder="Идентификатор вашей членской карты"/>
            <input class="r_s__p__i_d_f__name" type="text" placeholder="Ваше имя"/>
            <div class="r_s__p__i_d_f__pass_field">
                <input class="r_s__p__i_d_f__p_f__code" type="text" placeholder="Код связи (если есть)"/>
                <a href="#" class="r_s__p__i_d_f__p_f__recovery ">Забыли код?</a>
            </div>
            <input type="submit" value="Войти" class="r_s__p__i_d_f__submit">
            <span class="r_s__p__i_d_f__registration r_s__p__entry"><a href="reg_doer" class="">Зарегистрироваться</a></span>
        </form>
    </div>
    
</section>
<!-- <img class="r_a__p__background" src="https://image.freepik.com/free-vector/leaves-background-with-metallic-foil_79603-956.jpg" alt=""> -->
@endsection

@section('sign-listener')

<section class="registration_activist">
    <div class="r_a__position">
        <span class="r_a__p__heading">SAARISM</span>
        <span class="r_s__p__submit_as">Войти как:</span>
        <button class="r_a__p__activist" data-title="Вы можете изучать другие Учения и заводить общение лично с деятелями, задавать им вопросы, а также многое другое">Слушатель</button>
        <span class="r_s__p__input_data_form">
            <input class="r_s__p__i_d_f__ID_card" type="text" placeholder="Идентификатор вашей членской карты"/>
            <input class="r_s__p__i_d_f__name" type="text" placeholder="Ваше имя"/>
            <div class="r_s__p__i_d_f__pass_field">
                <input class="r_s__p__i_d_f__p_f__code" type="text" placeholder="Код связи (если есть)"/>
                <a href="#" class="r_s__p__i_d_f__p_f__recovery">Забыли код?</a>
            </div>
            <input type="submit" value="Войти" class="r_s__p__i_d_f__submit">
            <span class="r_s__p__i_d_f__registration r_s__p__entry"><a href="#" class="">Зарегистрироваться</a></span>
            </form>
    </div>
</section>
@endsection

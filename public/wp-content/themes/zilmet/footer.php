          </div>
        </div>
      </div>
    </div>

  <footer role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <a href="/bak/rasshiritelnye/cal-pro/" title="Расширительные баки">Расширительные баки</a><br>
          <a href="/baki/gidroakkumulyatory-ultra-pro/" title="Гидроаккумуояторы">Гидроаккумуляторы</a><br>
          <a href="/podbor-voda/" title="Подбор бака для водоснабжения">Подбор бака для водоснабжения</a><br>
          <a href="/podbor-otopol/" title="Подбор бака для отопления">Подбор бака для отопления</a>
        </div>
        <div class="col-12 col-md-3">
          <a href="/help/politika-konfidencialnosti/" title="Политика конфиденциальности">Политика конфиденциальности</a><br>
          <a href="/help/" title="Оплата и доставка">Оплата и доставка</a><br>
          <a href="/articles/">Статьи</a><br>
          <a href="/help/service/" title="сервисный центр">Сервисный центр</a>
        </div>
        <div class="col-12 col-md-6">
          <p class="address text-right">
            +7 (495) 981-92-44, 8 800 100 00 77
            <br>
            <small>141707, МО, г. Долгопрудный, Лихачевский проезд, д.8 <br>
            OOO "Электропомпа" <br>
            ИНН 5047194022 КПП 772901001<br>
            ОГРН 1175029003665</small>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <small>&copy; 2014 - <?=date('Y')?> ГК Электропомпа - Официальный сайт Zilmet в России</small>
        </div>
      </div>
    </div>
  </footer>
  <div id="banner_zapchasti">
      <a href="//zapchasti-kotla.ru/" target="_blank">
          <img src="/images/banner-zapchasti-kotla.jpg" alt="Интернет-магазин запчастей для газовых котлов">
      </a>
  </div>
</div><!-- #container для PUSHY -->

<?php if ( is_active_sidebar( 'true_side' ) ) : ?>

  <div id="true-side" class="sidebar">
    <?php dynamic_sidebar( 'true_side' ); ?>
  </div>

<?php endif; ?>
<?php 
require 'includes/footer_scripts.php';
wp_footer();
?>



<!-- Modal -->
<div class="modal fade" id="questionForm" tabindex="-1" role="dialog" aria-labelledby="directorModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="directorModalCenterTitle">Написать письмо директору</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="/wp-content/themes/zilmet/mail.php" name="questionForm" id="sendQuestionForm" method="POST">
              <div class="modal-body">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Имя <span class="red">*</span></label>
                      <input type="text" class="form-control" id="inputName" name="questionName" aria-describedby="nameHelp" placeholder="Введите имя" required="true">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Email <span class="red">*</span></label>
                      <input type="email" class="form-control" id="inputEmail" name="questionEmail" aria-describedby="emailHelp" placeholder="Введите email" required="true">
                      <small id="emailHelp" class="form-text text-muted">Ответ придет к вам на email</small>
                  </div>
                  <div class="form-group">
                      <label for="formControlTextarea">Ваш вопрос <span class="red">*</span></label>
                      <textarea class="form-control" id="formControlTextarea" name="questionText" rows="3" required="true"></textarea>
                      <small id="emailHelp" class="form-text text-muted">* Все поля являются обязательными для заполнения</small>
                  </div>
              </div>
              <div class="modal-footer">
                  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                  <button type="button" class="btn red-button-inverse" data-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn red-button">Отправить</button>
              </div>
          </form>
          <div class="form-result text-center my-5">Письмо отправлено!</div>
      </div>
  </div>
</div>

</body>
</html>
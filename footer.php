    
    <footer>
        <section class="contact container animated-block" id="footer">
            <div class="contact_content">
                <div class="contact_content_text">
                    <h3>Контакты</h3>
                    <p>Вы можете связаться с нами любым удобным способом</p>
                    <p>Strada Vlaicu Pârcălab 52, Chișinău, Молдова</p>
                    <a href="tel:+37360925505">+373 (60) 925505</a> <br>
                    <a href="mailto:nikita.ursulenko@gmail.com">nikita.ursulenko@gmail.com</a>
                    <div class="social">
                        <a href="#"><img src="<?php echo B_IMG_DIR; ?>/socials/share.png" alt=""></a>
                        <a href="#"><img src="<?php echo B_IMG_DIR; ?>/socials/facebook.png" alt=""></a>
                        <a href="#"><img src="<?php echo B_IMG_DIR; ?>/socials/linkedin.png" alt=""></a>
                        <a href="#"><img src="<?php echo B_IMG_DIR; ?>/socials/twitter.png" alt=""></a>
                    </div>
                </div>
                <div class="contact_content_map">
                    <iframe id="myIframe"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5439.719022555043!2d28.83200279022078!3d47.023362596734955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c313348aa0d%3A0xa28a12dcf677dfd8!2z0JzQtdC20LTRg9C90LDRgNC-0LTQvdGL0Lkg0J3QtdC30LDQstC40YHQuNC80YvQuSDQo9C90LjQstC10YDRgdC40YLQtdGCINCc0L7Qu9C00L7QstGL!5e0!3m2!1sru!2sde!4v1710701319458!5m2!1sru!2sde" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="contact_call">
                <div class="contact_call_text">
                    <h3>Заказать звонок</h3>
                    <p>Введите данные для заказа обратного звонка</p>
                </div>
                <form id="myForm" action="<?php echo admin_url('admin-ajax.php?action=callback_mail') ?>" method="post">
                    <p id="inputName">Имя</p>
                    <input type="text" id="name" name="name">
                    <p id="inputPhone">Телефон</p>
                    <input type="tel" id="phone_end" name="phone_end">
                    <p id="inputMail">E-Mail</p>
                    <input type="email" id="email" name="email">
                    <p>Выберите тип услуги:</p>
                    <select name="work" id="work">
                        <option value="Косметический ремонт">Косметический ремонт</option>
                        <option value="Капитальный ремонт">Капитальный ремонт</option>
                        <option value="Комплексный ремонт">Комплексный ремонт</option>
                    </select>
                    <label id="checkboxLabel">
                        <input type="checkbox" id="agreement" name="agreement" class="real-checkbox">
                        <span class="custom_checkbox"></span>
                        <p> Я согласен на обработку моих </p><a id="inputCheckbox" href="privacy-policy.html">персональных данных  </a>
                    </label>
                    <button type="submit" id="submitForm" class="button_a">Заказать</button>
                </form>
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span class="close" id="closePopup">&times;</span>
                        <p>Мы вам перезвоним</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
<?php wp_footer(); ?>
</html>
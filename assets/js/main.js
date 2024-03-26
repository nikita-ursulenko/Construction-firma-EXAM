new Splide( '.splide',{
    width: '80%',
    type: 'loop',
    autoplay: 'true',
    interval: 3000,
    wheel: 'true',
    perPage: 3,
    perMove: 1,
    gap: '1rem',
    pagination: false,
    focus    : 'center',
    pauseOnFocus: 'true',
    wheel: false,
} ).mount();




document.addEventListener("DOMContentLoaded", function() {
  //Плавность прокрутки
    // Выбор всех ссылок с атрибутом href, начинающимся с символа #.
  const links = document.querySelectorAll('a[href^="#"]');

  // Итерация по всем найденным ссылкам.
  links.forEach(link => {
    // Добавление обработчика события клика на каждую ссылку.
    link.addEventListener("click", function(e) {
      // Предотвращение стандартного поведения ссылки (перехода по якорю).
      e.preventDefault();

      // Получение идентификатора целевого элемента из атрибута href.
      const targetId = this.getAttribute("href").substring(1);
      
      // Получение ссылки на целевой элемент по его идентификатору.
      const targetElement = document.getElementById(targetId);

      // Найдем высоту всего документа (включая прокрутку) и прокрутим страницу вниз
      var totalHeight = Math.max(
        document.body.scrollHeight,
        document.body.offsetHeight,
        document.documentElement.clientHeight,
        document.documentElement.scrollHeight,
        document.documentElement.offsetHeight
      );
      if (targetId === "footer") {
        console.log("Прокрутка к футеру");
        window.scrollTo({
          top: totalHeight
        });
      } else {
        // Плавная прокрутка к целевому элементу с учетом верхнего отступа.
        window.scrollTo({
          top: targetElement.offsetTop - 50, // Подстраивайте по необходимости.
          behavior: "smooth" // Добавление плавности прокрутки.
        });
      }
    });
  });


  //------

  //АНИМАЦИЯ ВСПЛЫВАЕТ СНИЗУ ВВЕРХ
  // Получаем все блоки с классом 'animated-block'
  const animatedBlocks = document.querySelectorAll('.animated-block');

  // Функция для проверки, находится ли элемент в области видимости
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
  
    // Проверяем, что центральная точка блока находится в верхней половине видимой области
    return rect.top <= windowHeight * 1 && rect.bottom >= windowHeight / 2;
  }

  // Функция для анимации блоков при прокрутке
  function animateBlocksOnScroll() {
    animatedBlocks.forEach((block, index) => {
      // Проверяем, находится ли блок в области видимости и еще не виден
      if (isElementInViewport(block) && !block.classList.contains('visible')) {
        // Добавляем класс 'visible', чтобы запустить анимацию
        block.classList.add('visible');
      }
    });
  }

  // Вызываем функцию анимации при загрузке страницы
  animateBlocksOnScroll();

  // Добавляем обработчик события прокрутки страницы для дополнительной анимации
  window.addEventListener("scroll", function() {
    animateBlocksOnScroll();
  });
//------


  //MAPS SIZE 
  function resizeIframe() {
    var iframe = document.getElementById('myIframe');
    var pageWidth = window.innerWidth;
    let medium_screen = 768;
    if (pageWidth <= medium_screen) {
      // Уменьшаем размер iframe на 50%, если ширина страницы <= 600px
      iframe.style.width = '100%';
      iframe.style.height = '300px'
    } else {
      // Увеличиваем размер iframe на 50%, если ширина страницы > 600px
      iframe.style.height = '350px'
      iframe.style.width = '100%';
    }
  }

  //Контент в зависимости от ширины 
  window.addEventListener('resize', function() {
    var pContent = document.getElementById('pContent');
    var windowWidth = window.innerWidth;
    if(windowWidth <= 375) {
      pContent.textContent = 'Сила и Надежность в Вашем Ремонте.';
    } else {
      pContent.textContent = 'Сила и Надежность в Вашем Ремонте. Уют Гарантирован!';
    }
  });
  window.dispatchEvent(new Event('resize'));
  //--------


  // Вызываем функцию при загрузке страницы и при изменении размера окна
  window.onload = resizeIframe;
  window.onresize = resizeIframe;
  //------


  //Бургер меню-----
  var myBurger = document.getElementById('clickBurger');
  var navList = document.getElementById('navList')
  function burgerClick() {
    // Переключаем класс при каждом клике
    myBurger.classList.toggle('burger_active')
    // Если класс 'burger_active' присутствует, убираем display: none
    if (myBurger.classList.contains('burger_active')) {
      navList.style.opacity = '1';
      navList.style.display = 'flex'
    } else {
      navList.style.opacity = '0';
      navList.style.display = 'none'
    }


  }
  myBurger.addEventListener('click', burgerClick);
  //------
  // Input Phone
  const input = document.querySelector("#phone_end");
  const iti = window.intlTelInput(input, {
    initialCountry: "auto",
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    geoIpLookup: callback => {
      fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback("us"));
    },
  });


  // Получаем все элементы span с классом .iti__country-name
  let countryName = document.querySelectorAll(".iti__country span");
  //Изменяем стиль для каждого элемента
  countryName.forEach(function(span) {
    span.style.color = 'gray'; // Устанавливаем цвет текста в синий
  });
  let inputDiv = document.querySelector(".iti");
  inputDiv.style.width = "100%";
  //Input Notification-----
  var myForm = document.getElementById('myForm');
  
  myForm.addEventListener('submit', function(e){
    e.preventDefault();
    var isFormValid = true;
    if (!iti.isPossibleNumber()) {
      isFormValid = false;
    }
    var action = this.getAttribute('action');
    var th = this;
    var formData = new FormData(th);

    // Функция для отправки формы асинхронно
    function submitForm() {
      // Создаем объект FormData для удобства работы с данными формы
      const number = iti.getNumber();
      // Заменяем 'phone_end' на 'number'
      formData.set('phone_end', number);

      // Создаем объект XMLHttpRequest для отправки данных на сервер
      var xhr = new XMLHttpRequest();
      // Устанавливаем метод и адрес серверa
      xhr.open('POST', action, true);

      // Функция, которая будет вызвана при изменении состояния запроса
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Отправлено!');
        }
    };
      // Отправляем данные формы на сервер
      xhr.send(formData);
      myForm.reset();
      // Показываем всплывающее окно
      document.getElementById('popup').style.display = 'block';
    
      // Автоматически закрываем всплывающее окно через 3 секунды
      setTimeout(function() {
        document.getElementById('popup').style.display = 'none';
      }, 3000);
    
      // Закрытие всплывающего окна при клике на крестик
      document.getElementById('closePopup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
      });
    }

    function validateField(inputValue, pElement){
      // Проверяем, пустое ли значение поля
      var hasError = inputValue === '';
      if (pElement.id === 'inputPhone') {
        if (!iti.isPossibleNumber()) {
          hasError = true;
        }
      }
      // Добавляем или убираем класс 'notification_eror' в зависимости от наличия ошибки
      pElement.classList.toggle('notification_eror', hasError);
      // Создаем элемент <span> для отображения звездочки уведомления об ошибке
      var errorSpan = document.createElement('span');
      errorSpan.textContent = '*';
      errorSpan.style.position = 'absolute'
      errorSpan.classList.add('error-message');
      var errorSpanItem = pElement.querySelector('span')
      // Если есть ошибка
      if (hasError) {
         // Если <span> еще не существует, добавляем его
        if (!errorSpanItem) {
          pElement.appendChild(errorSpan);
        }
      } else {
        // Если ошибки нет и <span> существует, убираем его
        if (errorSpanItem) {
          errorSpanItem.remove();
        }
      }
      // Если поле является чекбоксом
      if (pElement.getAttribute('id') === 'inputCheckbox') {
        // Если чекбокс не отмечен, добавляем уведомление об ошибке
        if (!inputValue.checked) {
          pElement.appendChild(errorSpan);
          hasError = true;
        }
        // Если чекбокс отмечен, ничего не делаем
        if (inputValue.checked) {
        }
      }
      return hasError;
    }
    
    var fieldIds = ['name', 'phone_end', 'email', 'agreement'];
    var pIds = ['inputName', 'inputPhone', 'inputMail', 'inputCheckbox'];

    // Добавляем обработчик события input для каждого поля
    fieldIds.forEach(function(fieldId, index) {
      // Получаем элементы полей и соответствующего блока <p>
      var inputElement = document.getElementById(fieldId);
      if (inputElement.type !== 'checkbox') {
        inputElement = inputElement.value.trim();
      }
      var pElement = document.getElementById(pIds[index]);

      var hasError = validateField(inputElement, pElement);
      // Если хотя бы одно поле не прошло валидацию, устанавливаем флаг isFormValid в false
      if (hasError) {
        isFormValid = false;
      }
    });
    if (isFormValid) {
      submitForm();
    }
  });
  //------
});
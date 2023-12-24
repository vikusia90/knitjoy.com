// Получаем ссылки на элементы
var modal = document.getElementById('modal');
var openModalBtn = document.getElementById('openModalBtn');

// На кнопку "Оформить заказ" вешаем обработчик события для открытия модального окна
openModalBtn.addEventListener('click', function() {
  modal.style.display = "block"; // показываем модальное окно
});

// На кнопку "закрыть" в модальном окне вешаем обработчик события для закрытия модального окна
var closeBtn = document.getElementsByClassName('close')[0];
closeBtn.addEventListener('click', function() {
  modal.style.display = "none"; // скрываем модальное окно
});

// Также можно закрывать модальное окно при клике вне его области
window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = "none"; // скрываем модальное окно
  }
});

// Вешаем обработчик события для отправки формы заказа
var orderForm = document.getElementById('orderForm');
orderForm.addEventListener('submit', function(event) {
  event.preventDefault(); // предотвращаем стандартное поведение формы
  // Получаем данные из формы и отправляем их на сервер
  // ... ваш код для отправки данных на сервер ...
  modal.style.display = "none"; // закрыть модальное окно после отправки формы
});
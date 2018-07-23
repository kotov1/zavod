<div id="popupCallbackQuiz" class="modalQuiz modalCallback mfp-hide">

	<div class="modalQuiz__container modalCallback__container">

		<div class="modalQuiz__containerInner modalCallback__containerInner">
			<div class="mfp-close white"></div>
			<div class="modalQuiz__containerInnerTop">
				<h2 class="modalQuiz__title">Опросный лист для заказа металлорукава</h2>
				<div class="imgWrap">
					<!-- <img src="img/imgEmpty.png" alt="" class="img-responsive"> -->
				</div>
			</div>

			<div class="modalQuiz__containerInnerBottom">
				<form action="#" class="callbackForm quizForm">

					<div class="modalQuiz__field">
						<h3 class="modalQuiz__fieldTitle">Основные технические данные</h3>
						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="diametr">Номинальный диаметр, мм</label>
							<p><input type="text" placeholder="100 мм ..." id="diametr" name="Номинальный диаметр" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="pressure">Рабочее давление рукава, кгс/см<sup>2</sup></label>
							<p><input type="text" placeholder="Рабочее давление рукава, кгс/см" id="pressure" name="Рабочее давление рукава" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="workField">Рабочая среда</label>
							<p><input type="text" placeholder="Рабочая среда..." id="workField" name="Рабочая среда" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="temperature">Температура рабочей среды, °С</label>
							<p><input type="text" placeholder="Температура рабочей среды, °С..." id="temperature" name="Температура рабочей среды, °С" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="length">Длина с окончаниями</label>
							<p><input type="text" placeholder="Длина с окончаниями..." id="length" name="Длина с окончаниями" required></p>
						</div>

					</div>

					<div class="modalQuiz__field">

						<h3 class="modalQuiz__fieldTitle">Присоединительная арматура</h3>
						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="finish1">Окончание 1</label>
							<p><input type="text" placeholder="Стандарт, резьба, исполнение" id="finish1" name="Окончание 1" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="finish2">Окончание 2</label>
							<p><input type="text" placeholder="Стандарт, резьба, исполнение" id="finish2" name="Окончание 2" required></p>
						</div>			

					</div>

					<div class="modalQuiz__field">
						<h3 class="modalQuiz__fieldTitle">Материалы основных деталей</h3>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="finish2-1">Окончание 1</label>
							<p><input type="text" placeholder="Стандарт, резьба, исполнение" id="finish2-1" name="Окончание 1" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="finish2-2">Окончание 2</label>
							<p><input type="text" placeholder="Стандарт, резьба, исполнение" id="finish2-2" name="Окончание 2" required></p>
						</div>		

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="silfon">Сильфон</label>
							<p><input type="text" placeholder="Сильфон" id="silfon" name="Сильфон" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="silfonWrap">Оплетка сильфона</label>
							<p><input type="text" placeholder="Стандарт, резьба, исполнение" id="silfonWrap" name="Оплетка сильфона" required></p>
						</div>	

					</div>


					<div class="modalQuiz__field">
					<h3 class="modalQuiz__fieldTitle">Уточняющая информация</h3>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="requirement">Доп. требования</label>
							<p><input type="text" placeholder="Доп. требования" id="requirement" name="Доп. требования" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="quantity">Количество, шт</label>
							<p><input type="text" placeholder="Количество, шт" id="quantity" name="Количество, шт" required></p>
						</div>	

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="period">Желаемый срок поставки</label>
							<p><input type="text" placeholder="Желаемый срок поставки" id="period" name="Желаемый срок поставки" required></p>
						</div>	

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="customer">Заказчик</label>
							<p><input type="text" placeholder="Заказчик" id="customer" name="Заказчик" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="contacts">Контактное лицо</label>
							<p><input type="text" placeholder="Контактное лицо" id="contacts" name="Контактное лицо" required></p>
						</div>

						<div class="callbackForm__inputItem quizForm__inputItem">
							<label for="phone">Телефон</label>
							<p><input type="text" placeholder="Телефон" id="phone" name="Телефон" required></p>
						</div>	

					</div>

				<div class="modalQuiz__field">
					<label class="checkbox">
						<input type="checkbox" checked class="checkbox-hidden" required name="privacy">
						<span class="checkbox-wrap">
							<span class="checkbox-pseudo">
								<svg class="checkbox-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.5 11.5"><path d="M20 7L12 16L8 12" fill-opacity="0" fill="#707070" stroke="#707070" stroke-width="1.5" transform="matrix(1,0,0,1,-6.75,-5.75)"></path></svg>
							</span>
						</span>
						<span class="checkbox-text">С <a href="privacy.php" target="_blank">политикой конфиденциальности</a> соглашаюсь.</span>
					</label>

					<div class="callbackForm__inputItem_submit">
						<input type="submit" value="Отправить">
					</div>
				</div>

				</form>
			</div>

		</div><!-- modalCallback__containerInner -->

	</div><!-- modalCallback__container -->

</div>
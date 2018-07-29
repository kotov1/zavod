<div id="popupCallback" class="modalCallback mfp-hide">

	<div class="modalCallback__container">

		<div class="modalCallback__containerInner">
			<div class="mfp-close"></div>
			<div class="modalCallback__containerInnerLeft">
				<div class="imgWrap">
					<img src="img/imgEmpty.png" alt="" class="img-responsive">
				</div>
			</div>

			<div class="modalCallback__containerInnerRight">
				<h2 class="modalCallback__title">Оформление заказа</h2>
				<div class="callbackForm">
					<form action="#">
						<div class="callbackForm__inputItem">
							<label for="name">Ваше имя</label>
							<p><input type="text" placeholder="Введите ваше имя..." id="name" name="Имя" required></p>
						</div>

						<div class="callbackForm__inputItem">
							<label for="tel">Телефон или e-mail</label>
							<p><input type="text" placeholder="Введите ваш номер телефона или e-mail..." id="tel" name="Телефон/e-mail" required></p>
						</div>

						<div class="callbackForm__inputItem">
							<label for="note">Примечание</label>
							<p><input type="text" placeholder="Введите ваше примечание..." id="note" name="Примечание" required></p>
						</div>


						<div class="callbackForm__inputItem_checkbox">
							<label class="checkbox">
								<input type="checkbox" checked class="checkbox-hidden" required name="privacy">
								<span class="checkbox-wrap">
									<span class="checkbox-pseudo">
										<svg class="checkbox-check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.5 11.5"><path d="M20 7L12 16L8 12" fill-opacity="0" fill="#707070" stroke="#707070" stroke-width="1.5" transform="matrix(1,0,0,1,-6.75,-5.75)"></path></svg>
									</span>
								</span>
								<span class="checkbox-text">С <a href="/privacy.php" target="_blank">политикой конфиденциальности</a> соглашаюсь.</span>
							</label>
						</div>

						<div class="callbackForm__inputItem_submit">
							<p><input type="submit" value="Отправить"></p>
						</div>

					</form>
				</div>
				<!-- /.callbackForm -->
			</div>

		</div><!-- modalCallback__containerInner -->

	</div><!-- modalCallback__container -->

</div><!-- modalCallback -->
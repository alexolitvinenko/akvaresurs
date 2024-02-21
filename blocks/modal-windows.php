<div id="myModal" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">×</span>
			<h2 id="sign-in">Сделать заказ</h2>
		</div>
		<div class="modal-body">
			<form method="post" id="forms_order">
				<p>
					<input type="email" name="email" placeholder="Электронная почта">
				</p>

				<p>
					<input type="text" name="name" placeholder="Ваше имя">
				</p>

				<p>
					<input type="text" name="last_name" placeholder="Ваша фамилия">
				</p>

				<p>
					<input type="text" name="adress" placeholder="Адрес">
				</p>

				<p>
					<input type="tel" name="phone_number" placeholder="Номер телефона">
				</p>

				<p>
					<input type="text" name="quantity" placeholder="Количество счетчиков">
				</p>
				<input id="login-in" type="submit" value="Оставить заявку" name="submit"></input>
			</form>				
		</div>
	</div>
</div>
<div id="myModal2" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">×</span>
			<h2 id="sign-in">Заказать звонок</h2>
		</div>
		<div class="modal-body">
			<form method="post" id="forms_phone">
				<p>
					<input type="text" name="name" require placeholder="Ваше имя">
				</p>
				<p>
					<input type="tel" name="phone_number" require placeholder="Номер телефона">
				</p>
				<input id="login-in" type="submit" value="Заказать звонок" name="submit"></input>
			</form>				
		</div>
	</div>
</div>
<div class="results modal" id="results">
	<div class="modal-content">
		<div class="modal-header">
			<span class="close">×</span>
			<h2 id="sign-in">Успех!</h2>
		</div>
		<div class="modal-body">
			<p>Ваша заявка отправлена, мы с вами скоро свяжемся!</p>
		</div>
	</div>
</div>
<script type="text/javascript" src="/scripts/modal-windows.js"></script>
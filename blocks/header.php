<div class="header">
	<div class="navigation">
		<div class="nav">
			<div class="nav_container">
				<div class="nav_row">
					<div class="nav_col-3"><img src="/images/small_menu.png" id="open_btn_small_menu" alt="Главная"></div>
					<div class="nav_col-1"><a href="/index.php" class="logo"><img src="/images/logo.png"></a></div>
					<div class="nav_col-2">
						<div class="phone_link">8 (918) 248-80-82</div>
						<div class="phone_link">8 (918) 339-00-77</div>
						<div class="phone_link_small"><a href="tel:+79182488082">8 (918) 248-80-82</a></div>
						<div class="phone_link_small"><a href="tel:+79183390077">8 (918) 339-00-77</a></div>
						<div class="phone_callback open-button-callback">Обратный звонок</div>
					</div>
				</div>
			</div>
		</div>
		<div class="nav_sub">
			<div class="nav_sub-container">
				<div class="nav_sub-row">
					<div class="nav_sub-row_links home_link"><a href="/index.php#Home">Главная</a></div>
					<div class="nav_sub-row_links anchor_link" ><a href="/index.php#Prei">Преимущества</a></div>
					<div class="nav_sub-row_links serv_link"><a href="/index.php#Services" id="servise_link">Услуги</a></div>
					<div class="nav_sub-row_links"><a href="/contact.php">Контакты</a></div>
				</div>
			</div>
			<div class="servise_menu">
				<div class="servise_menu_container">
					<div class="servise_menu_row">
						<div class="servise_menu_col-1">
							<div class="servise_menu_row_links"><a href="/Poverka_vodoschetchikov.php">Поверка счетчиков воды без снятия</a></div>
							<div class="servise_menu_row_links"><a href="/Ustanovka_vodoschetchikov.php">Установка счетчиков воды</a></div>
						</div>
						<div class="servise_menu_col-2">
							<div class="servise_menu_row_links"><a href="/Ustanovka_vodoschetchikov_v_kolodce.php">Установка счетчиков воды в колодцах</a></div>
							<div class="servise_menu_row_links"><a href="/Zamena_vodoschetchikov.php">Замена водосчетчиков в квартирах и колодцах</a></div>					
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="small_menu_container" id="small_menu">
			<div class="small_menu_row">
				<div class="small_menu_row_links"><a href="/index.php#Home">Главная</a></div>
				<div class="small_menu_row_links"><a href="/index.php#Prei">Преимущества</a></div>
				<div class="small_menu_row_links"><a href="/index.php#Services">Услуги</a></div>
				<div class="small_menu_row_links"><a href="/contact.php">Контакты</a></div>
			</div>
			<div class="smal_menu_callback">
				<div class="phone_link_small"><a href="tel:+79182488082">8 (918) 248-80-82</a></div>
				<div class="phone_link_small"><a href="tel:+79183390077">8 (918) 339-00-77</a></div>
			</div>
		</div>
		
	</div>
</div>

<script type="text/javascript" language="javascript">
	$('.anchor_link').on('click', function(e){
		$('html,body').stop().animate({ scrollTop: ($('#Prei').offset().top-60)}, 1000);
		e.preventDefault();
	});
	$('.home_link').on('click', function(e){
		$('html,body').stop().animate({ scrollTop: ($('#Home').offset().top-60) }, 1000);
		e.preventDefault();
	});
	$('#servise_link').on('click', (event) => {
		event.preventDefault();
		$('.servise_menu').fadeIn();
	});
</script>

<script type="text/javascript" src="/scripts/fixed-menu.js"></script>
<script type="text/javascript" src="/scripts/small_menu.js"></script>
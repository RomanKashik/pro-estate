<?php
session_start();
require_once('lang/lang.php');
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<!--		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="libs/normalize.css" />
	<link rel="stylesheet" href="libs/magnific-popup.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css">
	<link rel="stylesheet" href="css/main.css">
	<title>Pro Estate</title>
	<script type="text/javascript" async=""
			src="https://www.gstatic.com/recaptcha/releases/vJuUWXolyYJx1oqUVmpPuryQ/recaptcha__ru.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
</head>
<body>
<header class="header">
	<div class="container">
		<nav class="nav">
			<a href="#" class="nav__logo">
				<img src="images/logo_header.png" alt="logo">
			</a>
			<ul class="nav__menu">
				<li class="nav__item"><a class="nav__link popup_about_link" href="#popup_about"><?php echo $Lang['about_us'];?></a></li>
				<li class="nav__item"><a class="nav__link" href="#services"><?php echo $Lang['our_services'];?></a></li>
				<li class="nav__item"><a class="nav__link" href="#why"><?php echo $Lang['why_we'];?></a></li>
				<li class="nav__item"><a class="nav__link" href="#order"><?php echo $Lang['leave_request'];?></a></li>
				<li class="nav__item"><a class="nav__link" href="#contacts"><?php echo $Lang['contact_us'];?></a></li>
			</ul>
			<div class="nav__phone"><a href="tel:+(371) 26858674">+(371) 26858674</a></div>
			<div class="nav__social">
				<a class="nav__social-link" href="#"><img src="images/icon/icon_facebook.png" alt="facebook"></a>
				<a class="nav__social-link" href="#"><img src="images/icon/icon_instagram.png" alt="instagram"></a>
			</div>
			<div class="nav__lang">
				<a class="nav__lang-link" href="index.php?lang=ru">Rus</a>

				<span class="nav__lang-border">|</span>

				<a class="nav__lang-link" href="index.php?lang=lv">Lv</a>

				<span class="nav__lang-border">|</span>

				<a class="nav__lang-link" href="index.php?lang=en">En</a>
			</div>
		</nav>
		<div class="header__content">

			<h1 class="header__title"><?php echo $Lang['main_title'];?></h1>

            <?php echo $Lang['main_subtitle'];?>

			<a href="#popup_about" class="btn header__btn popup_about_link">
				<span class="header__btn-text"><?php echo $Lang['header_button'];?></span>
				<img src="images/icon/icon_arrow.png" alt="About us">
			</a>
			<div class="header__mouse">
				<img src="images/icon/icon_mouse.png" alt="Arrow bottom">
			</div>
		</div>
	</div>
</header>
<main>
	<section class="services" id="services">
		<div class="container">
			<h2 class="main-title services__title"><?php echo $Lang['services_title'];?></h2>
			<p class="services__subtitle"><?php echo $Lang['services_subtitle'];?></p>
			<div class="card-inner">
				<!--Card N1-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_1.jpg" alt="service">
					</div>
					<?php echo $Lang['buying'];?>
				</div>
				<!--Card N2-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_2.jpg" alt="service">
					</div>
                    <?php echo $Lang['selling'];?>
				</div>

				<!--Card N3-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_3.jpg" alt="service">
					</div>
                    <?php echo $Lang['for_rent'];?>
				</div>

				<!--Card N4-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_4.jpg" alt="service">
					</div>
                    <?php echo $Lang['renting'];?>
				</div>

				<!--Card N5-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_5.jpg" alt="service">
					</div>
                    <?php echo $Lang['handling'];?>
				</div>

				<!--Card N6-->
				<div class="card">
					<div class="card__img">
						<img src="images/service_6.jpg" alt="service">
					</div>
                    <?php echo $Lang['providing'];?>

				</div>
			</div>
		</div>
	</section>
	<section class="partner" id="partner">
		<div class="container">
			<h2 class="main-title partner__title"><?php echo $Lang['partners_services_title'];?></h2>
			<div class="partner__inner">
				<div class="partner__card">
					<div class="partner__img partner__img--one"></div>
					<div class="partner__card-title"><?php echo $Lang['furniture'];?></div>
				</div>
				<div class="partner__card">
					<div class="partner__img partner__img--two"></div>
					<div class="partner__card-title"><?php echo $Lang['design'];?></div>
				</div>
				<div class="partner__card">
					<div class="partner__img partner__img--three"></div>
					<div class="partner__card-title"><?php echo $Lang['repair'];?></div>
				</div>
				<div class="partner__card">
					<div class="partner__img partner__img--four"></div>
					<div class="partner__card-title"><?php echo $Lang['cleaning'];?></div>
				</div>
			</div>
		</div>
	</section>
	<section class="why" id="why">
		<div class="container">
			<h2 class="main-title why__title"><?php echo $Lang['why_title'];?></h2>

			<div class="why__inner">
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_expirience.png" alt="expirience"></div>
					<div class="why__text"><?php echo $Lang['experience'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_property.png" alt="property"></div>
					<div class="why__text"><?php echo $Lang['objects'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_result.png" alt="result"></div>
					<div class="why__text"><?php echo $Lang['result'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_support.png" alt="support"></div>
					<div class="why__text"><?php echo $Lang['clients_side'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_money.png" alt="money"></div>
					<div class="why__text"><?php echo $Lang['rates'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_dialog.png" alt="dialog"></div>
					<div class="why__text"><?php echo $Lang['questions'];?></div>
				</div>
				<div class="why__item">
					<div class="why__img"><img src="images/icon/icon_friendship.png" alt="friendship"></div>
					<div class="why__text"><?php echo $Lang['consultations'];?></div>
				</div>
			</div>
		</div>
	</section>
	<section class="order" id="order">
		<div class="container">
			<h2 class="main-title order__title">Заказ</h2>
			<form action="#" method="post" class="order__form" enctype="multipart/form-data">
				<div class="order__form-title"><?php echo $Lang['contact_title'];?></div>
				<p class="order__form-subtitle"><?php echo $Lang['contact_subtitle'];?></p>

				<label class="order__form-label" for="email"><?php echo $Lang['contact_label_email'];?></label>
				<input class="order__form-input" type="text" id="email" name="email">

				<label class="order__form-label" for="select"><?php echo $Lang['contact_label_service'];?></label>
				<input class="order__form-input" type="text" id="select" list="services" name="services">

				<datalist id="services">
					<option value="<?php echo $Lang['choice_buying'];?>"></option>
					<option value="<?php echo $Lang['choice_selling'];?>"></option>
					<option value="<?php echo $Lang['choice_for_rent'];?>"></option>
					<option value="<?php echo $Lang['choice_renting'];?>"></option>
					<option value="<?php echo $Lang['choice_handling'];?>"></option>
					<option value="<?php echo $Lang['choice_juridical'];?>"></option>
				</datalist>

				<label class="order__form-label" for="message"><?php echo $Lang['contact_label_textarea'];?></label>
				<textarea class="order__form-textarea" name="" id="message" cols="30" rows="10">
				</textarea>

				<input class="order__form-input-file" id="loader" type="file" name="photo" accept="image/*,image/jpeg"
					   multiple>

				<div class="order__form-file" id="list">
					<button class="order__form-file-btn" id="button" type="button"><?php echo $Lang['add_photo'];?></button>
				</div>
				<div class="captcha">
					<div class="g-recaptcha" style="transform:scale(0.9);transform-origin:0;"
						 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>
				</div>
				<input class="form__btn order__form-btn" type="submit" value="<?php echo  $Lang['btn_form_send'];?>">
				<div class="form-result"></div>
			</form>
		</div>
	</section>
	<section class="contact" id="contact">
		<h2 class="main-title contact__title"><?php echo  $Lang['map_title'];?></h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.7278135540146!2d24.057649205034743!3d56.95373195030785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecffd5268be5f%3A0xc439fb05a5f73f44!2zU2xva2FzIGllbGEgNTIsIEt1cnplbWVzIHJham9ucywgUsSrZ2EsIExWLTEwMDcsINCb0LDRgtCy0LjRjw!5e0!3m2!1sru!2sua!4v1581419316589!5m2!1sru!2sua"
				style="border:0;" allowfullscreen=""></iframe>
		<form action="#" method="post" class="contact__form">
			<div class="contact__form-header">
				<div class="contact__form-logo">
					<img src="images/logo_footer.png" alt="logo">
				</div>
				<div class="contact__form-content">
					<p class="contact__form-loc"><?php echo  $Lang['address'];?></p>
					<p class="contact__form-phone"><?php echo  $Lang['map_tel'];?><a href="tel:+(371) 26858674">+(371) 26858674</a></p>
					<p class="contact__form-web">E-mail:<a href="mailto:info@proestate.eu">info@proestate.eu</a></p>
				</div>
			</div>
			<hr>
			<div class="contact__form-title"><?php echo  $Lang['map_form_title'];?></div>

			<label class="contact__form-label" for="e-mail"><?php echo  $Lang['map_form_label_email'];?></label>
			<input class="contact__form-input" type="text" id="e-mail" name="email">

			<label class="contact__form-label" for="messages"><?php echo  $Lang['map_form_label_textarea'];?></label>
			<textarea class="contact__form-textarea" name="" id="messages" cols="30" rows="10"></textarea>

			<div class="captcha contact__captcha">
				<div class="g-recaptcha" style="transform:scale(0.9);transform-origin:0;"
					 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>
			</div>

			<input class="form__btn" type="submit" value="<?php echo  $Lang['btn_form_send'];?>">
			<div class="form-result"></div>
		</form>
	</section>
</main>
<footer class="footer">
	<div class="container">
		<div class="footer__inner">
			<div class="footer__location">
				<div class="footer__phone"><a href="tel:+(371) 26858674">+(371) 26858674</a></div>
				<div class="footer__adress"><?php echo  $Lang['address'];?></div>
			</div>
			<ul class="footer__menu">
				<li class="footer__item"><a class="footer__link popup_about_link" href="#popup_about"><?php echo  $Lang['about_us'];?></a></li>
				<li class="footer__item"><a class="footer__link" href="#"><?php echo  $Lang['our_services'];?></a></li>
				<li class="footer__item"><a class="footer__link" href="#"><?php echo  $Lang['why_we'];?></a></li>
			</ul>
			<ul class="footer__menu">
				<li class="footer__item"><a class="footer__link" href="#"><?php echo  $Lang['feedback'];?></a></li>
				<li class="footer__item"><a class="footer__link" href="#"><?php echo  $Lang['contact_us'];?></a></li>
			</ul>
			<div class="footer__logo">
				<img src="images/logo_footer.png" alt="logo">
				<p class="copyright"><?php echo $Lang['copyright'];?></p>
			</div>
		</div>
	</div>
</footer>

<section class="popup white-popup mfp-hide">
		<div class="popup__inner" id="popup_about">
			<div class="popup__bread"><?php echo $Lang['popup_bread'];?></div>
			<div class="popup__close popup_about-dismiss"><img src="images/icon/icon_close.png" alt="close"></div>
			<div class="popup__header">
				<h1 class="popup__title"><?php echo $Lang['popup_title'];?></h1>
			</div>
			<div class="popup__content"><?php echo $Lang['popup_content'];?></div>
			<div class="popup__footer"><img src="images/logo_popup.png" alt="logo"></div>
	</div>
</section>


<script src="libs/jquery.min.js"></script>
<script src="libs/jquery.magnific-popup.min.js"></script>
<script src="libs/jquery.malihu.PageScroll2id.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SME4ME: JOIN CODE</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="<?php echo site_url();?>assets/card/css/normalize.css">
     <link rel="stylesheet" href="<?php echo site_url();?>assets/card/css/style.css">
        <style>
     
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("http://fonts.googleapis.com/css?family=Lato:400,700");
* {
  position: relative;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
  background: #ebebeb;
}
html,
body {
  height: 100%;
}
/* 
  Standard ID-1 cards are 85.60 × 53.98 mm   
*/
.credit-card {
  /* Form */
  width: 42.8rem;
  /* Just to get a proper scale */
  height: 26.99rem;
  padding: 2.6rem;
  /* Content */
  font-family: "Lato", sans-serif;
  /* Aesthetics */
  border: 1px solid #Ffffff;
  border-top-color: #ffffff;
  border-radius: 1.8rem;
  background: linear-gradient(135deg, #F19A17, #F19A17);
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.28);
  /* Add a complementary magnetic strip */
  transition: background 0.28s ease-in-out;
}
.credit-card.credit-card--with-stripe:before {
  content: "";
  position: absolute;
  bottom: 2rem;
  left: 0;
  width: 100%;
  height: 5rem;
  background: rgba(0, 0, 0, 0.25);
}
.credit-card.credit-card--visa {
  /* Aesthetics */
}
.credit-card .credit-card__title {
  margin-bottom: 2rem;
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: .12rem;
  color: white;
  text-shadow: 0 2px rgba(0, 0, 0, 0.18);
}
.credit-card .credit-card__form input {
  width: 100%;
  padding: .7rem;
  font-size: 2rem;
  line-height: 1.2;
  font-family: "Lato", sans-serif;
  /* Aesthetics */
  color: #666;
  border: 1px solid #222;
  border-bottom: 1px solid #333;
  border-radius: 3px;
  box-shadow: 0 0 0 1px #505050;
}
.credit-card .credit-card__form fieldset {
  width: 100%;
  padding: 0;
  margin: 0;
  border: 0;
}
.credit-card .credit-card__form .credit-card__number {
  margin-bottom: 2rem;
}
.credit-card .credit-card__form .credit-card__expiry-month,
.credit-card .credit-card__form .credit-card__expiry-year,
.credit-card .credit-card__form .credit-card__cv-code {
  display: inline-block;
  margin-right: 1rem;
  width: 6rem;
  text-align: center;
}
/* End Credit Card */
.pull-right {
  float: right;
  margin: 0 !important;
}
.l-centered {
  margin: 4rem auto;
}
.form-submit {
    background: #Ffffff ;
    border: none;
    padding: 10px 79px 10px 10px;
    font-style: italic;
    font-weight: bold;
    font-size: 15px;
    font-family: Georgia;
    cursor: pointer;
  }
    
</style>

    
        <script src="<?php echo site_url();?>assets/card/js/prefixfree.min.js"></script>

    
  </head>

  <body>

  <?php echo show_notification(); ?>
              <span style="<?= $displayData ?>" >
              <?php echo show_valnotif(); ?>
              </span>

    <div class="credit-card credit-card--with-stripe credit-card--visa l-centered">
  <div class="credit-card__title">
    JOIN CODE
  </div>
  <form class="credit-card__form" action="<?php echo site_url('Main/Card/doVoucherPay');?>" method="post">
    <input class="credit-card__number" name="code" placeholder="Enter Join Code" type="text" />
   <fieldset>
   <input type="submit" class="form-submit" value="Submit">
   </fieldset>
  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>

<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Règlement</title>
<link rel="stylesheet" href="bootstrap.min.css" >
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="fontawesome/css/all.min.css" rel="stylesheet" />
<script src="https://js.stripe.com/v3/"></script>
    <link href="css/menuStyles.css" rel="stylesheet" />
<link rel="stylesheet" href="css/donStyle.css">

</head>
<body>
  <div class="body">


    <!----------------->


    

<?php 
    if(isset($_SESSION['email'])){
        
       include 'menuWelcome.php';  
    }
    else{
        
        include 'menu.php'; 
    }
 ?>

        <!----------------->

        <!-- body  -->
        <!-- include payment config -->
        <?php include 'config_payment.php'; ?>

    <?php




$name_error = 0;
$amount_error = 0;
$email_error = 0;

// var_dump($_POST);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    // name verification
    if (strlen(trim($name)) < 6) {
        $name_error = 1;
    }

    if ($_POST['number'] < 1) {
        $amount_error = 1;
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $email_error = 1;

    }

}

?>
  </div>
  <?php if (isset($_POST['submit']) && $email_error == 0 && $amount_error == 0 && $name_error == 0) {?>
<style>
    .hidden {
  display: none;
}

#email {
  border-radius: 6px;
  margin-bottom: 16px;
  padding: 12px;
  border: 1px solid rgba(50, 50, 93, 0.1);
  max-height: 44px;
  font-size: 16px;
  width: 100%;
  background: white;
  box-sizing: border-box;
}

#payment-message{
  color: rgb(105, 115, 134);
  font-size: 16px;
  line-height: 20px;
  padding-top: 12px;
  text-align: center;
}

#payment-element{
  margin-bottom: 24px;
}

/* Buttons and links */
button {
  background: #5469d4;
  font-family: Arial, sans-serif;
  color: #ffffff;
  border-radius: 4px;
  border: 0;
  padding: 12px 16px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  display: block;
  transition: all 0.2s ease;
  box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
  width: 100%;
}
button:hover {
  filter: contrast(115%);
}
button:disabled {
  opacity: 0.5;
  cursor: default;
}

/* spinner/processing state, errors */
.spinner,
.spinner:before,
.spinner:after {
  border-radius: 50%;
}
.spinner {
  color: #ffffff;
  font-size: 22px;
  text-indent: -99999px;
  margin: 0px auto;
  position: relative;
  width: 20px;
  height: 20px;
  box-shadow: inset 0 0 0 2px;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
.spinner:before,
.spinner:after {
  position: absolute;
  content: "";
}
.spinner:before {
  width: 10.4px;
  height: 20.4px;
  background: #5469d4;
  border-radius: 20.4px 0 0 20.4px;
  top: -0.2px;
  left: -0.2px;
  -webkit-transform-origin: 10.4px 10.2px;
  transform-origin: 10.4px 10.2px;
  -webkit-animation: loading 2s infinite ease 1.5s;
  animation: loading 2s infinite ease 1.5s;
}
.spinner:after {
  width: 10.4px;
  height: 10.2px;
  background: #5469d4;
  border-radius: 0 10.2px 10.2px 0;
  top: -0.1px;
  left: 10.2px;
  -webkit-transform-origin: 0px 10.2px;
  transform-origin: 0px 10.2px;
  -webkit-animation: loading 2s infinite ease;
  animation: loading 2s infinite ease;
}

@-webkit-keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes loading {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@media only screen and (max-width: 600px) {
  form {
    width: 80vw;
    min-width: initial;
  }
}
</style>
<?php }?>

<div class="container">
  <div id="Checkout" class="inline">
      <h1>Mon Règlement</h1>
      <div class="card-row">
          <span class="visa"></span>
          <span class="mastercard"></span>
          <span class="amex"></span>
          <span class="discover"></span>
      </div>

      <?php if (isset($_GET['payment_intent'])){
          ?>
          <div class="alert alert-success text-center">
        Thanks for your Donation!<br>
        We are grateful

      </div>



<?php

      }

      ?>

      <?php if (!isset($_POST['submit']) || $email_error == 1 || $amount_error == 1 || $name_error == 1) {?>


      <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      <div class="row">

      <div class=" col-lg-12 form-group">
              <label for="PaymentAmount">Payment amount (<span>$</span>)</label>
              <?php if ($amount_error == 1) {
    ?>
                <span class="text-danger">* Please your Amount should not be less than $1 </span>
                <br>
                 <?php
}
    ?>
              <div class="amount-placeholder">

                  <input type="number" min="1" name="number" class="form-control" id="PaymentAmount" placeholder="montant ex:10$" required>
              </div>
          </div>


      </div>
          <div class="form-group">
              <label for="PaymentAmount">Name</label>

             <?php if ($name_error == 1) {
        ?>
                <span class="text-danger">* Your name must be at least 6 characters </span>
                <br>
                 <?php
}
    ?>
                  <input type="text" name="name" class="form-control"  placeholder="Full Name" required>

          </div>
          <div class="form-group">
              <label for="PaymentAmount">Email</label>

              <?php if ($email_error == 1) {
        ?>
                <span class="text-danger">* Please Enter a valid Email </span>
                <br>
                 <?php
}
    ?>
                  <input type="text" class="form-control" name="email" placeholder="username@domain.com" required>

          </div>



          <button id="PayButton" class="btn btn-block btn-success submit-button" name="submit" type="submit"">
              <span class="submit-button-lock"></span>
              <span class="align-middle">Je Valide</span>
          </button>
      </form>

<br>
      <div class=" text-center">
      <hr>
<a href="" class="text-primary"><strong>>>Click to Pay With Paypal</strong></a>
<br>
<br>
</div>

      <?php } else {?>


 <!-- Display a payment form -->
 <form id="payment-form" >
    
      <div id="payment-element">
        <!--Stripe.js injects the Payment Element-->
       <span class="text-center" > 
           <i class="fa fa-spinner fa-spin"></i>Loading.....

       </span>
      </div>
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now ($<?php echo $_POST['number']; ?>) </span>
      </button>
      <div id="payment-message text-danger" class="hidden"></div>
    </form>

        <?php }?>
  </div>
</div>

 <div class="footer">
    <?php include 'footer.php'?>;
  </div>



<script type="text/javascript" src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap.min.js" ></script>
<?php if (isset($_POST['submit']) && $email_error == 0 && $amount_error == 0 && $name_error == 0) {

     $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
    ?>
    <script>
       var currency="USD";
       var name="<?php echo $_POST['name']; ?>";
       var amount="<?php echo $_POST['number']; ?>";
       var email="<?php echo $_POST['email']; ?>";



        const stripe = Stripe("<?php echo $STRIPE_PUBLIC_KEY; ?>");

        // The items the customer wants to buy


        let elements;

        initialize();
        checkStatus();


        var el = document.getElementById('payment-form');
        if (el) {
            el.addEventListener('submit', handleSubmit, true);
        }


        // Fetches a payment intent and captures the client secret
        async function initialize() {
            const { clientSecret } = await fetch("stripe.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ 
                    amount:amount,
                    currency:currency,name:name,email:email}),
            }).then((r) => r.json());

            elements = stripe.elements({ clientSecret });

            const paymentElement = elements.create("payment");
            paymentElement.mount("#payment-element");
        }

        async function handleSubmit(e) {
            e.preventDefault();
            // alert('message')
            setLoading(true);

            const { error } = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: "<?php echo $base_url.$_SERVER['PHP_SELF']; ?>",
                },
            });

            // This point will only be reached if there is an immediate error when
            // confirming the payment. Otherwise, your customer will be redirected to
            // your `return_url`. For some payment methods like iDEAL, your customer will
            // be redirected to an intermediate site first to authorize the payment, then
            // redirected to the `return_url`.
            if (error) {
            if (error.type === "card_error" || error.type === "validation_error") {
                showMessage(error.message);
            } else {
                showMessage("An unexpected error occured.");
            }
        }else{
            alert('successfull')
        }
            setLoading(false);
        }

        // Fetches the payment intent status after payment submission
        async function checkStatus() {
            const clientSecret = new URLSearchParams(window.location.search).get(
                "payment_intent_client_secret"
            );

            if (!clientSecret) {
                return;
            }

            const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);

            switch (paymentIntent.status) {
                case "succeeded":
                    showMessage("Payment succeeded!");
                    alert('succeeded')
                    break;
                case "processing":
                    showMessage("Your payment is processing.");
                    break;
                case "requires_payment_method":
                    showMessage("Your payment was not successful, please try again.");
                    break;
                default:
                    showMessage("Something went wrong.");
                    break;
            }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");

            messageContainer.classList.remove("hidden");
            messageContainer.textContent = messageText;

            setTimeout(function () {
                messageContainer.classList.add("hidden");
                messageText.textContent = "";
            }, 4000);
        }

        // Show a spinner on payment submission
        function setLoading(isLoading) {
            if (isLoading) {
                // Disable the button and show a spinner
                document.querySelector("#submit").disabled = true;
                document.querySelector("#spinner").classList.remove("hidden");
                document.querySelector("#button-text").classList.add("hidden");
            } else {
                document.querySelector("#submit").disabled = false;
                document.querySelector("#spinner").classList.add("hidden");
                document.querySelector("#button-text").classList.remove("hidden");
            }
        }
    </script>



<?php }?>
</body>
</html>








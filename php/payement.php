<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Payment Information</title>
        <link rel="stylesheet" href="../css/styleOfPayement.css">
    </head>
    <body>
        <a href="../index.php"><img class="logoC" src="../img/logo.webp" alt="image"></a>
        <main class="container">
            <section class="ui">
                <div class="container-left">
                    <form id="credit-card">
                        <div class="number-container">
                            <label>Numéros de Carte</label>
                            <input type="text" name="card-number" id="card-number" maxlength="19" 
                            placeholder="1234 5678 9101 1121" required
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                        <div class="name-container">
                            <label>Titulaire</label>
                            <input type="text" name="name-text" id="name-text" maxlength="30" 
                            placeholder="WEB MASTER" required
                            onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.key == ' '">
                        </div>
                        <div class="infos-container">
                            <div class="expiration-container">
                                <label>Date d'expiration</label>
                                <input type="text" name="valid-thru-text" id="valid-thru-text" maxlength="5" 
                                placeholder="02/40" required 
                                onkeypress="return event.charCode >=48 && event.charCode <= 57">
                            </div>
                            <div class="cvv-container">
                                <label>CVV</label>
                                <input type="text" name="cvv-text" id="cvv-text" maxlength="3" 
                                placeholder="123" required
                                onkeypress="return event.charCode >=48 && event.charCode <= 57">
                            </div>
                        </div>
                        <input type="submit" value="PAYER" id="payer">
                    </form>
                </div>
                <div class="container-right">
                    <div class="card">
                        <div class="intern">
                            <img class="approximation" src="../img/aprox.png" alt="aproximation">
                            <div class="card-number">
                                <div class="number-vl">1234 5678 9101 1121</div>
                            </div>
                            <div class="card-holder">
                                <label>Titulaire</label>
                                <div class="name-vl">WEB MASTER</div>
                            </div>
                            <div class="card-infos">
                                <div class="exp">
                                    <label>Date d'expriation</label>
                                    <div class="expiration-vl">02/40</div>
                                </div>
                                <div class="cvv">
                                    <label>CVV</label>
                                    <div class="cvv-vl">123</div>
                                </div>
                            </div>
                            <img class="chip" src="../img/chip.png" alt="chip">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="../javascript/index.js"></script>    
</html>
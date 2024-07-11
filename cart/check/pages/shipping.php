<?php
/*
    * Shipping details page -  Mark Flow.
    * Buyer can enter shipping address information and choose shipping option on this page.
*/
session_start();

    $rootPath = "../";
    include_once('../api/Config/Config.php');
    include_once('../api/Config/Sample.php');
    include('../templates/header.php');
    

    $baseUrl = str_replace("pages/shipping.php", "", URL['current']);
?>

<!-- HTML Content -->
<div class="row-fluid">
    <div class="col-md-offset-4 col-md-4">
        <h3 class="text-center">Shipping Information</h3>
        <hr>
        <form class="form-horizontal">
            <!-- Shipping Information -->
         <div class="form-group">
                <label for="recipient_name" class="col-sm-5 control-label">Recipient Name</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="recipient_name"
                           name="recipient_name"
                           value="Jane Doe"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="line1" class="col-sm-5 control-label">Address Line 1</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="line1"
                           name="line1"
                           value="55 East 52nd Street"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="line2" class="col-sm-5 control-label">Address Line 1</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="line2"
                           name="line2"
                           value="21st Floor"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="city" class="col-sm-5 control-label">City</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="city"
                           name="city"
                           value="New York"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="state" class="col-sm-5 control-label">State</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="state"
                           name="state"
                           value="NY"
                           readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="zip" class="col-sm-5 control-label">Postal Code</label>
                <div class="col-sm-7">
                    <input class="form-control"
                           type="text"
                           id="zip"
                           name="zip"
                           value="10022"
                           readonly>
                </div>
            </div>
           
            <div class="form-group" style="display: none;">
                <label for="shippingMethod" class="col-sm-5 control-label">Shipping Type</label>
                <div class="col-sm-7">
                    <select class="form-control" name="shippingMethod" id="shippingMethod">
                        <optgroup label="Flat Rate" style="font-style:normal;">
                            <option value="0" selected>
                                Fixed - $2.00</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <!-- Checkout Options -->
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-7">
                    <div class="radio">
                        <label>
                            <input type="radio"
                                   name="paymentMethod"
                                   id="paypalRadio"
                                   value="paypal"
                                   checked>
                            <img src="https://fpdbs.paypal.com/dynamicimageweb?cmd=_dynamic-image&amp;buttontype=ecmark&amp;locale=en_US" alt="Acceptance Mark" class="v-middle">
                            <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside" onclick="javascript:window.open('https://www.paypal.com/us/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, ,left=0, top=0, width=400, height=350'); return true;">What is PayPal?</a>
                        </label>
                    </div>
                    <div class="radio disabled">
                        <label>
                            <input type="radio"
                                   name="paymentMethod"
                                   id="cardRadio"
                                   value="card"
                                   disabled>
                            Card
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-7">
                    <!-- Container for PayPal Mark Checkout -->
                    <div id="paypalCheckoutContainer"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Javascript Import -->
<script src="https://www.paypal.com/sdk/js?client-id=ASnUa4_eMkIZPulBBkonTiNEz4yF1B4AHm3TbE_w9dKQDUwzRv33fo62IiRPV4PJGTIrFl54mvyd-msg"></script>
<script src="<?= $rootPath ?>js/config.js"></script>



<!-- PayPal In-Context Checkout script -->
<script type="text/javascript">

    paypal.Buttons({

        // Set your environment
        env: 'production',

        // Set style of button
        style: {
            layout: 'horizontal',   // horizontal | vertical
            size:   'responsive',    // medium | large | responsive
            shape:  'pill',      // pill | rect
            color:  'black'       // gold | blue | silver | black
        },

        // Execute payment on authorize
        commit: true,

        // Wait for the PayPal button to be clicked
        createOrder: function() {

            let shippingMethodSelect = document.getElementById("shippingMethod"),
                updatedShipping = shippingMethodSelect.options[shippingMethodSelect.selectedIndex].value,
                total_amt = parseFloat(<?= $SampleCart['item_amt'] ?>) +
                        parseFloat(<?= $SampleCart['tax_amt'] ?>) +
                        parseFloat(<?= $SampleCart['handling_fee'] ?>) +
                        parseFloat(<?= $SampleCart['insurance_fee'] ?>) +
                        parseFloat(updatedShipping) -
                        parseFloat(<?= $SampleCart['shipping_discount'] ?>),
                postData = new FormData();
                postData.append('item_amt','<?= $SampleCart['item_amt'] ?>');
                postData.append('tax_amt','<?= $SampleCart['tax_amt'] ?>');
                postData.append('handling_fee','<?= $SampleCart['handling_fee'] ?>');
                postData.append('insurance_fee','<?= $SampleCart['insurance_fee'] ?>');
                postData.append('shipping_amt',updatedShipping);
                postData.append('shipping_discount','<?= $SampleCart['shipping_discount'] ?>');
                postData.append('total_amt',total_amt);
                postData.append('currency','<?= $SampleCart['currency'] ?>');
                postData.append('return_url','<?= $baseUrl.URL["redirectUrls"]["returnUrl"]?>' + '?commit=true');
                postData.append('cancel_url','<?= $baseUrl.URL["redirectUrls"]["cancelUrl"]?>');
               

            return fetch(
                '<?= $rootPath.URL['services']['orderCreate']?>',
                {
                    method: 'POST',
                    body: postData
                }
            ).then(function(response) {
                return response.json();
            }).then(function(resJson) {
                return resJson.data.id;
            });
        },

        // Wait for the payment to be authorized by the customer
        onApprove: function(data, actions) {
            // Capture Order
            let postData = new FormData();
            return fetch(
                '<?= $rootPath.URL['services']['orderCapture'] ?>',
                {
                    method: 'POST',
                    body: postData
                }
            ).then(function(res) {
                return res.json();
            }).then(function() {
                window.location.href = 'success.php?commit=true';
            });
        }

    }).render('#paypalCheckoutContainer');

</script>
<?php
    include('../templates/footer.php');
?>
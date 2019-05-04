@extends('templates.garage.master')
@section('content')
<div class="team" id ="team">
    <div class="container payment">
        <h1 class="title-payment">Select method to payment</h1>
        <div id="payment"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AfjM3XQ4vc6_wqcdpGkh5bOTDbKRBW6at2zsbldY7mX1BlA4wQ6Ofp_f4mCB1o0zMipatDb1ctMe6S4e"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: <?php echo $total_price; ?>
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Capture the funds from the transaction
            return actions.order.capture().then(function(details) {
                console.log('success');
                 // Show a success message to your buyer
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#payment');
</script>
<style type="text/css">
    .payment {
        border: 3px solid grey;
        width: 70%;
        padding: 20px;
    }
    .title-payment {
        padding-bottom: 20px;
    }
</style>
@endsection
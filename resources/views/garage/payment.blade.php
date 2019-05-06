@extends('templates.garage.master')
@section('content')
<div class="team" id ="team"> 
    <div class="container payment" id="payment">
        <h1 class="title-payment">Select method to payment</h1>
        <div id="payment"></div>
    </div>
    <form action="{{ route('garage.success', ['access_token' => $access_token, 'user_id' => $user_id]) }}" method="get" id="form">{{ csrf_field() }}</form>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=AfjM3XQ4vc6_wqcdpGkh5bOTDbKRBW6at2zsbldY7mX1BlA4wQ6Ofp_f4mCB1o0zMipatDb1ctMe6S4e"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 1
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Capture the funds from the transaction
            return actions.order.capture().then(function(details) {
                console.log('success');
                // Show a success message to your buyer
                document.getElementById('form').submit();
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
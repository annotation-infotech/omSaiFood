 
 
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "<?php echo $key_id  ?>", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $order['amount'];?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Snowy Glow",
    "description": "",
    "image": "<?php echo base_url()?>assets/images/logo.png",
    "order_id": "<?php echo $order['id']  ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "<?php echo base_url() . 'User/payment_status/' . $urlEncodedJson ?>",
    "prefill": {
        "name": "<?php echo $data[0]['UserFirstName']; ?>",
        "email": "<?php echo $data[0]['UserEmail']; ?>",
        "contact": "<?php echo $data[0]['UserMobile']; ?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);

rzp1.open();


</script>

 
 
 
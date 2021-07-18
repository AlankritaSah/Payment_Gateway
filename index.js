
  function pay(){
          var name=jQuery('#name').val();
          var amt=jQuery('#amt').val();

           jQuery.ajax({
                 type:'POST',
                 url:'payment_process.php',
                 data:"amt="+amt+"&name="+name,
                 success:function(result){
                      var options = {
                          "key": "rzp_test_lcgPSLZIP2BIOL",
                          "amount": amt*100,
                          "currency": "INR",
                          "name": "Team Altruistic",
                          "description": "Test Transaction",
                          "image": "https://i.pinimg.com/236x/4f/c0/a1/4fc0a1f0df3216e33e0d7fd040341cc5.jpg",
                          "handler": function (response){
                             jQuery.ajax({
                                 type:'POST',
                                 url:'payment_process.php',
                                 data:"payment_id="+response.rsf_payment_id,
                                 success:function(result){
                                     window.location.href="thank_you.php";
                                 }
                             });
                          }
                      };
                      var rzp1 = new Razorpay(options);
                      rzp1.open();
                 }
             });
      }

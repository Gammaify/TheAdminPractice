function sendEnquiryform(){
    event.preventDefault();
    var firstName=$('#firstName').val();
    var surName=$('#lastName').val();
    var subject=$('#subject').val();
    var email=$('#email').val();
    var message=$('#message').val();
    $.post("sendMail.php",'firstName='+firstName+'&lastName='+surName+'&email='+email+'&subject='+subject+'&message='+message+'&submit=Submit',function(result,status,xhr) {
            
                $('.statusMessage').html("Thank you for contacting me. I will respond to you soon!");
                document.getElementById("contactForm").reset();
        });
       
}

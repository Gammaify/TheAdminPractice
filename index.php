<?php 
$title = "Homepage - The Admin Practice";
include "header.php";
?>

<div class="heroBanner">
    <a href="#AboutMe">
        <img class="desktopVersion" src="./images/banners/AP_HERO_WEB.png" />
        <img class="mobileVersion" src="./images/banners/AP_HERO_MOB.png" />
    </a>
</div>

<div class="IntroContainer">
    <h1>Let Me Help Your Business</h1>
    <p class="introText">Imagine…having the free time to concentrate on where you’re needed most – developing your business AND enjoying some well-deserved time off!</p>
    <p class="readOn">Read on...</p>
</div>

<div id="AboutMe" class="AboutMeContainer">
    <h2>About Me</h2>
    <div class="AboutUsImageAndTextContainer">
        <div class="AboutMeImageContainer">
            <img src="./images/IMAGE 1_HR WEB.jpg"/>
        </div>
        <div class="AboutMeTextContainer">
            <p class="welcomeText">Hi, I’m Lisa, welcome to</p>
            <img src="./images/logos/PNGs/The AP Logo_The Admin Practice_GOLD.png" />
            <p>I’m a highly experienced administrator in the beautiful Spa town of Cheltenham.</p>
            <p>I offer a range of admin support which can be customised to suit your needs whether you are a small business owner, self-employed or an entrepreneur within Gloucestershire.</p>
        </div>
    </div>
</div>
<div id="Services" class="ServicesContainer">
    <h2>Services</h2>
    <div class="ServicesImageAndTextContainer">
        <div class="ServicesTextContainer">
            <ul>
                <li>General Day to day administration</li>
                <li>Diary Management</li>
                <li>Customer Relations</li>
                <li>Preparing and issuing Invoices/Quotations/Purchase Invoices</li>
                <li>Handling of incoming post, via email or hardcopy</li>
                <li>Data entry for daily accounting/reconciliation using online accounting packages</li>
                <li>Book-keeping utilising Xero Accounting or Quickbooks</li>
                <li>Website Management</li>
            </ul>
        </div>
        <div class="ServicesImageContainer">
            <img src="./images/IMAGE 2_HR WEB.jpg" />
        </div>
       
    </div>
</div>
<div class="GetInTouchContainer">
    <p>This is a great resource and works out as a very cost-effective way of getting your admin done quickly and efficiently, without employing someone or having to find the time to do it yourself!</p>
    <p>As a free bonus, I am helpful, efficient, friendly, and approachable.</p>
    <p>Get in touch today to see how I can help your business flourish.</p>
    <a href="#Contact" class="GetInTouchBtn">Get In Touch Now</a>
</div>
<div id="Packages" class="PackagesContainer">
    <h2>Packages</h2>
    <div class="PackagesImageContainer">
        <img src="./images/BRONZE PACKAGE-01.svg" />
        <img src="./images/SILVER PACKAGE-01.svg" />
        <img src="./images/GOLD PACKAGE-01.svg" />
    </div>
    <p>All packages are paid up front.</p>
    <p>If your requirements do not suit any of the packages above The Admin Practice is happy to customise a package to suit you and your business.</p>
    <a href="#Contact" class="GetInTouchBtn">Enquire Here</a>
</div>
<div id="HowItWorks" class="HowItWorksContainer">
    <h2>How it Works</h2>
    <img class="desktopVersion" src="./images/The AP - Flow Diagram WEB.png"/>
    <img class="mobileVersion" src="./images/The AP - Flow Diagram MOB.png"/>
</div>
<div class="TestimonialsContainer">
    <h2>Testimonials</h2>
    <div class="TestimonialBoxContainer">
        <div class="Testimonial">
            <p>
                “Lisa is extremely efficient, very personable and understood my deadlines so is an asset to any business for managing both admin’ and accounts – the perfect virtual office manager!”
                <span class="TestimonialName fw-bold">Jim</span>
                <span class="fw-bold">JT Project Services Ltd</span>
            </p>
        </div>
        <div class="Testimonial mobileSpacing">
            <p>
                “Lisa joined the company a few months ago as an office administrator and has already proved herself to be extremely capable, reliable, and very organised!!!!
    She has helped the company transition from a mostly “paper based” office to setting things up online- implementing this and many other systems to help the company move forward in an efficient and seamless manner.
    She is an asset to have on the team!”
            <span class="TestimonialName fw-bold">Jo</span>
            <span class="fw-bold">Solo Interiors Ltd</span>
            </p>
           
        </div>
    </div>
    <p class="getInTouchText">Get in touch today to see how I can help your business</p>
</div>
<div id="Contact" class="contactUsContainer">
    <h2>Contact</h2>
    <div class="contactUsMainContainer">
        <div class="contactUsTextContainer">
            <p>It's SIMPLE...</p>
            <p>Get in touch and let me know your requirements.</p>
            <p>You can do this by either using the email address below or via the contact form here.</p>
            <p>I look forward to assisting you and your business!</p>
            <a class="contactLink" href="mailto:lisa@theadminpractice.co.uk"><img src="./images/Messages.svg" />lisa@theadminpractice.co.uk</a>
            <a class="contactLink" href="tel:07717696110"><img src="./images/Phone.svg" />07717 696110</a>
        </div>
        <div class="contactUsFormContainer">
            <form method="post" enctype="multipart/form-data" id="contactForm" action="#Contact" onsubmit="sendEnquiryform()">
                <div class="statusMessage">
                
                </div>
                <input type="text" id="firstName" name="firstName" placeholder="First name" required/>
                <p class="validation" id="firstNameValid"></p>

                <input type="text" id="lastName" name="lastName" placeholder="Surname" required />
                <p class="validation" id="lastNameValid"></p>

                <input type="email" id="email" name="email" placeholder="Email" required />
                <p class="validation" id="emailValid"></p>

                <input type="text" id="subject" name="subject" placeholder="Subject" required />
                <p class="validation" id="subjectValid"></p>

                <textarea id="message" name="message" placeholder="Message" rows="10" required  placeholder="Message"></textarea>
                <p class="validation" id="messageValid"></p>

                <input type="submit" value="Submit" name="submit" id="submit" class="GetInTouchBtn submitBtn">
            </form>
        </div>
    </div>
    
    
</div>
<?php
    // function strip_crlf($string)
    // {
    //     return str_replace("\r\n", "", $string);
    // }
    // unset($_REQUEST['firstName']);
    // unset($_REQUEST['lastName']);
    // unset($_REQUEST['email']);
    // unset($_REQUEST['subject']);
    // unset($_REQUEST['message']);

    //  $firstName = $_POST["firstName"];
    //  $surName = $_POST["lastName"];
    //  $email = $_POST["email"];
    //  $subject = $_POST["subject"];
    //  $message = $_POST["message"];
    //  $toEmail = "root@localhost.com";
    
    //  $firstName = strip_crlf($firstName);
    //  $surName = strip_crlf($surName);
    //  $email = strip_crlf($email);
    //  $subject = strip_crlf($subject);
    //  $message = strip_crlf($message);
    //  $toEmail = "root@localhost.com";
    
    // $body = "From: $firstName $surName\n E-Mail: $email\n Message:\n $message";
    
    // if ($_POST['submit']) {
    //     if (mail ($toEmail, $subject, $body, $email)) { 
    //         $success = "Message successfully sent";
    //     } 
    //     else {
    //         $success = "Message Sending Failed, try again";
    //     }
    // }
?>
<?php include "footer.php" ?>
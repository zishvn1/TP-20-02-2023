<?php
include ('header,php')
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name = "viewport" content="width=device-width,intitial-scale=1">
        <link rel="stylesheet" href ="styl.css">
        <title>Contact Us</title>

      
    </head>
    <body>
        <section class ="header">
            <div class = "ctitle">
                <h1>CONTACT US</h1>
           
            </div>
            <div class = "ContactI">
                 <button onclick="document.location='default.asp'">Contact Info</button>
            </div>

            <div class = "Enquires">
                <button onclick="document.location='default.asp'">Enquires</button>
            </div>    

            <div class = "FAQS">
                <button onclick="document.location='default.asp'">FAQS</button>
            </div>
            <div class ="ToyotaL">
                <img src="/Figma Images/Picture3.png">
            </div>
            <div class ="AudiR">
                <img src="/Figma Images/Picture4.png">
            </div>
            
        </section>

        <section class = "Contact Info">
            <div class = "infoTitle">
                <h1>CONTACT INFO</h1>
            </div>
            <div class ="whatsapp">
                <img src = "Figma Images/whatsapp.png">
                <h3>+44 5567868979</h3>
            </div>
            <div class ="instagram">
                <img src ="Figma Images/instagram.png">
                <h3>@ASTONAUTOS</h3>
            </div>
            <div class ="facebook">
                <img src ="Figma Images/facebook.png">
                <h3>@ASTONAUTOS</h3>
            </div>
           <!--- <div class = "container">
                <form action ="action_page.php">

                    <label for ="fname">First Name</label>
                    <input type ="text" id="fname" name="firstname" placeholder="Enter your first name">

                    <label for ="lname">Last Name</label>
                    <input type ="text" id="lname" name="lastname" placeholder="Enter your last name">

                    <label for = "Reason">Reason</label>
                    <select id="Reason" name="Reason">
                    <option value = "Enquiry">Enquiry</option>
                    <option value = "Quote">Quote for a car</option>
                    <option value = "Other">Option</option>
                    </select>

                    <label for ="subject">Subject</label>
                    <textarea id ="subject" name="subject" placeholder="Write something.." style = "height:200px"></textarea>

                    <input type ="submit" value ="Submit">
                </form>-->
            </section>

            <section class = "contact-box">
                <form>
                    <input type ="text" class="input-field" placeholder="your name">
                    <input type ="text" class="input-field" placeholder="your email">
                    <input type ="text" class="input-field" placeholder="subject">
                    <textarea type ="text" class="input-field textarea-field" placeholder="your message"></textarea>
                    <br><br>
                    <button type ="button" class="btn">Send Message</button>


                    
                </form>
            </div>
        </section>
    
        
    <div id = "background">
    </div>

    </body>
</html>
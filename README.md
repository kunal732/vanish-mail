#SendGrid Vanish Mail Demo

This hack shows how it is possible to create and send self-destructing/vanishing emails to any email address. 

## How it works

Magicmail takes the body of the message and converts that into an image. It sends that image as an html message to the other party using our SMTP Api. In the SMTP api, we specify the filename in the unique argument section. This information will be returned to the application when the user opens up the email. Once they open it up, Magicmail gets contacted by SendGrid using our event Webhook , letting it know that the email was just opened. Magicmail then takes the image of the body and makes it an all white image, which gives the affect of vanishing.


###  Get Set Up

To run your own customized copy of the MagicMail hack. You need to get the Pre-requisites. 
  1. This hack uses the Flat UI theme for twitter bootstrap (http://designmodo.com/flat-free/)
  2. Install the SendGrid php library. Directions can be found here: (https://github.com/sendgrid/sendgrid-php)
  3. Setup the Event App to start using the SendGrid event Webhook. Check out docs here: (http://sendgrid.com/docs/API_Reference/Webhooks/event.html)

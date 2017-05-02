# Using Perch Shop to develop an online booking system

As some of you will know I work at a company called [Fishtank Creative](https://fishtankcreative.co.uk/ "Fishtank Creative") and the full blog post was [posted there](https://fishtankcreative.co.uk/blog/using-perch-shop-to-develop-an-online-booking-system/ "Using Perch Shop to develop an online booking system").

Essentially using Perch Shop I had to come up with a way for customers to secure a swimming holiday by paying a 20% deposit and then pay the remaining balance at a later date. To do this we had to create two products

1. Deposit Product
2. Remaining Balance Product

We then had to filter those two products based on whether they had a tag or not. The tag needed to be unique so we wanted to use the SKU code but change it slightly.

You can read the detailed post on the Fishtank Creative blog but the code I developed is included.

The code is simply displaying both products on the same page. We then filter the two products to only show the product with a SKU code that contains **DEP**.

Next when a customer purchases the deposit product they get assigned a Perch Tag. The tag will be the SKU code of the deposit product.

So now what happens the code will check if they have that tag, if they do I will display the remaining balance product.




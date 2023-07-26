# Food-Express
You can access the website at https://foodsexpress.000webhostapp.com/ (As of now only Dwarka and Noida is accepted when asked to Enter the city name because of the restaurants added in the database)

You can access the admin side at https://foodsexpress.000webhostapp.com/adminlogin.php (use atul123 as username and password for Motimahal Deluxe Restaurant (Location: Dwarka). So to experience full functionality for this set of credentials the customer needs to be from the Dwarka City and must be ordering from Motimahal Deluxe)

This project is a food delivery platform like Zomato and Swiggy.
This project contains 2 interfaces one is for the customer from which they will order the food and the other one is for the client i.e the Restaurants registered with us.
This project is built using Html,Css,Js,Php.

#Working of the Project

First of all the index page appears in which the user is asked to fill the name of the city in which they are residing, if we have any restauarant that delivers to that particular location then the user will be redirected to the Login Page, else they will be redirected back to the index page. On the Login Page the user is asked to fill in their credentials, if they are not registered yet they can click on the link and will be redirected to the Signup Page and on that page they fill their information and once they submit that they are redirected back to the Login Page and once they fill the correct credentials they will be redirected to the Home Page and on that page they can see all the restauarnts that delivers in their city and they can click on any of them, whenever they click, they will be redirected to the restaurant page and there they can see all the menu items that the restuarant is offering and they can add their items to the cart by clicking on the Add Button. Now they can click on the My Cart hyperlink and they will be redirected to the My Cart Page where they can see all the items they have added in the cart and if they want to reduce the quantity or remove some items then they can click on the Remove Button, on the right hand side they can see the total of their order and Place Order Button, when they click on the button they will be redirected to the Payment Form where they fill out the bank details(We are not storing that) and then click on the Pay Now button, after this they will be redirected to the Ratings Page where they give us their valuable feedback, once they submit it they will be redirected to the Profile Page where the user can see all of their order till date along with its information, status(Active or Delivered) and many more. Whenever the user places any order, that particular restaurants recieves the order and when they click on the deliver button the status of the order changes on the Profile Page of the User.

#Database

There are total 8 tables.

1. cart(M_Id,Rest_Id,Name,Price,Qty,User) // for the cart M_Id-> Menu Item Id, Rest_Id-> Restaurant Id
2. customer(Id,Name,Email,User_Name,Password,Ph_No,City) // for the customer information
3. menu(Id,Name,Price,Rest_Id) // contains the details of the menu items here Rest_Id -> Restaurant Id
4. order_details(Id,Menu_Id,Qty,Price,Order_Date,Processed_By,Order_Status,Order_Id,Customer_Id) // Contains the order details Processed_By -> Id of the Restaurant
5. payment(Id,Order_Id,Paid_By,Amount,Date,Processed_By)// Contains the Payment Info i.e how much amount is paid by whom to the Restaurant and for which order
6. rating(Id,Customer_Id,Date,Score,Feedback)// stores the rating information
7. site_info(Id,Name,Address,User_Id,Img)// stores the info about the restaurant information
8. user(Id,Name,Email_Address,Contact,User_Name,Password)// stores the information of the admin i.e. the person who is managing the restaurant side

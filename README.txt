Muhammad Haaris, Developer at WebHR (Verge Systems Pvt Ltd).

The code is good in terms of code containing the Repository Pattern.

But bad implementation inside the repository because of business login and their structure also included in the repository. In my opinion, the repository looks cleaner when we use the data layer and database operation in it.

For Business logic and its structure use the service layer, with controller form request. After the validation, it goes into the controller. The controller will call the service layer after the repository pattern to call the database operation. Also, Observer also defines in the service layer. the conclusion is that the project looks cleaner and more understandable. Thanks


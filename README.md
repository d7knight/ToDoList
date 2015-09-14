# ToDoList

Technical Assessment
- A "To Do List" single page app developed in a Laravel Homestead Environment  
- I am using PHP Storm as my IDE and am following along with the following tutorials: 
- [Laravel To Do List App](https://www.youtube.com/watch?v=sfSjm-MwhNM&list=PLfdtiltiRHWGH8AngyP6cp525_R_NExcR&index=1)
- [Creating a Basic ToDo Application in Laravel 5](https://www.flynsarmy.com/2015/02/creating-a-basic-todo-application-in-laravel-5-part-1/)
- I also am using BootStrap and Angular in the Frontend



#Setup Instructions

1. Install Laravel with Homestead [Instructions](http://laravel.com/docs/4.2/homestead#installation-and-setup)
2. Clone this repository inside your shared projects folder 
3. In the project root, rename .env.example to .env and edit your homestead database details within this file 
3. Add an entry to your hosts file ex:"192.168.10.10  myawesomeproject.app", in linux it is located at "/etc/hosts"
4. Make sure your virtual machine is booted by executing `homestead up`
4. SSH into your vagrant box by executing `homestead ssh` 
5. navigate in the virtual machine to the repo folder which you cloned earlier (step 2) 
6. execute `serve myawesomeproject.app {path to repository on virtual machine}/public` or add the corresponding site entry in Homestead.yaml 
7. In the project root `composer install`
8. Execute `php artisian migrate`
9. Execute `php artisian db:seed`
10. Open a browser navigate to myawesomeproject.app
11. My single page To do List app should have 3 tasks loaded, feel free to edit the task list by adding or deleting tasks :).

# ToDoList

Technical Assessment
- A "To Do List" single page app developed in a Laravel Homestead Environment  
- I am using PHP Storm as my IDE and am following along with the following tutorials: 
- [Laravel To Do List App](https://www.youtube.com/watch?v=sfSjm-MwhNM&list=PLfdtiltiRHWGH8AngyP6cp525_R_NExcR&index=1)
- [Creating a Basic ToDo Application in Laravel 5](https://www.flynsarmy.com/2015/02/creating-a-basic-todo-application-in-laravel-5-part-1/)
- I also am using BootStrap and Angular in the Frontend
- I've also deployed this project to openshift here is a demo link - [Demo](http://todolistapp-davidknight.rhcloud.com)


#Installation/Deployment Steps

1. Install Laravel with Homestead
2. Clone this repo to your shared projects folder 
3. In the project root, rename .env.example to .env and edit your homestead database details within this file 
3. Add an entry to your hosts file ex:"192.168.10.10  myawesomeproject.app", in linux it is at "/etc/hosts"
4. make sure your virtual machine is booted by executing `homestead up`
4. ssh into your vagrant box by executing `homestead ssh` 
5. cd into your the cloned repo folder
6. execute `serve myawesomeproject.app {cloned repo location}/public` or add the site entry in Homestead.yaml 
7. In the project root `composer install`
8. `php artisian migrate`
9. `php artisian db:seed`
10. Open a browser navigate to myawesomeproject.app
11. My Single Page To do List app should have 3 tasks loaded, feel free to edit the list :).

# Organizational-portal

---

![](https://www.smartsight.in/wp-content/uploads/2020/11/php-300x165.png)


<p>An organizational portal with the ability to create a personal page for employees, polls, voting, sending and receiving correspondence. Designed using PHP programming languages ​​as the backend, HTML, CSS, and JavaScript as the frontend, and MySQL as the database.</p>

`Author:`

```json
{
"firstName"  : "Mohammad"
"lastName"   : "Naghavi Olyaei"
"userName"   : "mohammadna62"
}
```

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)

---

`Sample Code`

```php
<?php
switch ($action){
        case 'create':
            $pic='images/user.jpg';
           if($_FILES['pic']['size']>0){
               $pic = $upload->uploader($_FILES['pic']);
           }

            $contacts_obj->create($userID,$_POST,$pic);
           header("location:?c=contacts&a=list&m=$manager");
        break;
        case 'show':
          $contact=$contacts_obj->show($_GET['id']);
        break;
        case 'list' :
         $contacts = $contacts_obj->list();

        break;
        case 'edit':
            $contact=$contacts_obj->show($_GET['id']);
        break;
        case 'update':
            $picarray=$contacts_obj->showpic($_GET['id']);
            $pic=$picarray[0];
            if($_FILES['pic']['size']>0){
            $pic = $upload->uploader($_FILES['pic']);
                }
            $contacts_obj->update($_POST,$pic);
            header("location:?c=contacts&a=list&m=$manager");
        break;
        case 'delete':
            $id= $_GET['id'];
            $contacts_obj->delete($id);
            header("location:?c=contacts&a=list&m=$manager");
        break;

}
___
```

## List

Ordered:

1. PHP
2. Javascript
3. JQuery
4. MySQL

Unordered:

- BackEnd (`PHP`)
- FrontEnd (`HTML` - `CSS` - `JAVASCRIPT` - `JQUERY`)

---

[learn about backend](https://www.php.net/)

[learn about javascript](https://www.javascript.com/)

[learn about Data Base](https://www.mysql.com/)

---

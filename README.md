# 🏢 Organizational Portal

---

![📌 Banner](https://www.smartsight.in/wp-content/uploads/2020/11/php-300x165.png)

## 💡 **Organizational Portal** enables employees to create personal pages, participate in polls and votes, and manage correspondence efficiently. Built with **PHP** backend, **MySQL** database, and a responsive frontend using **HTML, CSS, JavaScript** it ensures seamless interaction and streamlined organizational communication.

## 👤 Author

```json
{
  "firstName": "Mohammad",
  "lastName": "Naghavi Olyaei",
  "userName": "mohammadna62"
}
```

---

## 🛠️ Technologies & Packages

### 💻 Core Technologies

![🐘 PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![🌱 MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![🟨 JavaScript](https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E)
![📄 HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![🎨 CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![⚡ jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)

---

## 💡 Sample Code

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

---

## 📋 Lists

### ✅ Ordered:

1. 🐘 PHP
2. 🟨 JavaScript
3. ⚡ jQuery
4. 🌱 MySQL

### 🔹 Unordered:

- Backend (`PHP`)
- Frontend (`HTML` - `CSS` - `JavaScript` - `jQuery`)

---

## 🌐 Learn More

- [🌟 Learn PHP](https://www.php.net/)
- [🌟 Learn JavaScript](https://www.javascript.com/)
- [🌟 Learn MySQL](https://www.mysql.com/)

---

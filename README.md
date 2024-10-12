#お問い合わせフォーム

##環境構築  
Dockerビルド  
1.git clone リンク  
2.docker-compose up -d --build

##laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3..env.exampleファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate  
5.php artisan migrate  

##使用技術  
Laravel Framework 8.83.8

##ER図

![スクリーンショット 2024-10-12 155223](https://github.com/user-attachments/assets/92afad9e-d44b-444c-a337-f5f3aa8dd9fe)
![スクリーンショット 2024-10-12 155433](https://github.com/user-attachments/assets/da483a08-a7a0-403b-82e8-2c79223da2e8)
![スクリーンショット 2024-10-12 155456](https://github.com/user-attachments/assets/fc748c39-5db7-49aa-b57e-6bbee901ac26)
![スクリーンショット 2024-10-12 155526](https://github.com/user-attachments/assets/de573173-a5a5-475d-9536-f354b4d7a83a)
![スクリーンショット 2024-10-12 155543](https://github.com/user-attachments/assets/11e594e9-6f1c-48b6-963e-e0b64658e14c)

##URL  
開発環境　http://localhost/  
phpMyAdmin http://localhost:8080/

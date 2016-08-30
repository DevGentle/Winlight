# Winlight

Clone project to ../Winlight

## Prepare for virtual box
- Download virtual box https://www.virtualbox.org/wiki/Downloads and install
- Download vagrant https://www.vagrantup.com/downloads.html and install
- cd Winlight
- ~ composer require laravel/homestead --dev
- ~ run ~ php vendor/bin/homestead make

in file Homestead.yml set configuration like this
```yml
ip: "192.168.10.10"
memory: 2048
cpus: 1
hostname: winlight
name: winlight
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: "..path../Winlight/laravel-with-admin-lte"
      to: "/home/vagrant/laravel-with-admin-lte"

sites:
    - map: winlight.app
      to: "/home/vagrant/laravel-with-admin-lte/public"

databases:
    - winlight
```

- open ~/etc/hosts
- then add to the last line
```
192.168.10.10	  winlight.app
``` 

- cd Winlight 
- ~ vagrant up
- cd laravel-with-admin-lte
- ~ composer update

เสร็จสิ้นการติดตั้ง Project ครับ


## Username & Password to login to database
- Host: 192.168.10.10
- Username: homestead
- Password: secret
- Port: 3306

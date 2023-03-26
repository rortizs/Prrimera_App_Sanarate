# Proyecto # 1 UML

Proyecto Empleados para la Empresa Logistic, usando mysql cómo base de Datos y PHP 8, Bootstrap 5 para el diseño de la Página Web.

## Tech Stack

**Client:** PHP, Bootstrap 5, css3, html5

**Server:** Ubuntu Server
## comando para el nuevo usuario
adduser sammy (enter)
## comando para darle el rol de root
usermod -aG sudo sammy 

## activad el firewall
comando para activar el firewall --> ufw enable
comando para verificar si el firewall esta habilitado --> ufw status
** validar los puertos que esten habilitados en el firewall
ufw app list
** Habilitar una app en el firewall
ufw allow OpenSSH <-->estoy habilitando el acceso al nuevo usuario

## Habilitar acceso externo para el usuario recien creado

comando ssh sammy@your_server_ip (desde una nueva terminal)

## Ahora se procede a instalar LAMP (APACHE, MYSQL, PHP) LEMP(NGX, MYSQL, PHP)
### LAMP
1- sudo apt update (actializar repositorios)
2- sudo apt install apache2 (isntala apache2 en ubuntu)
3- sudo ufw app list
4- sudo ufw allow in "Apache"








## GIT

https://github.com/rortizs/Prrimera_App_Sanarate.git

## Used By

This project is used by the following companies:

- Ingeniero Richard Ortiz | UMG Guastatoya

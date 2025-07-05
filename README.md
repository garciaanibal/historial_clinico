Comandos para correr el proyecto
1- Clonar el repositorio
2- Correr docker: docker compose up -d 
3- Composer install 
4- Crear el .env.local con los siguientes datos 
DATABASE_URL=mysql://demo:demo@mariadb:3306/historialclinico
5- Corre en http://localhost:17000/

# 🏥 Historial Clínico - Symfony

_Aplicación para gestión de historiales médicos._

## 🚀 Requisitos
- Docker
- PHP 8.2+
- Symfony CLI (opcional)

## ⚙️ Instalación
```bash
git clone https://github.com/garciaanibal/historial_clinico.git
cd historial_clinico
docker compose up -d
# Acceder al contenedor PHP (nombre puede variar según tu docker-compose.yml)
docker compose exec php-fpm bash
# Dentro del contenedor:
composer install
```

## 🔧 Configuración
Crea el archivo `.env.local`:
```
DATABASE_URL=mysql://demo:demo@mariadb:3306/historialclinico
```

## 🌐 Acceso
- **URL local**: http://localhost:17000

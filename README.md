# Reto Técnico Backbone
## Descripción
Api Rest que consulta los datos dirección con base en un código postal 

## Stack
### Load Data 
- zx
- json-2-csv
### BackEnd
- krlove/eloquent-model-generator
- Laravel
- MySql
  
### Deployment
- Bref.sh
- Forge
- Serverless
- AWS RDS
- AWS EC2
- AWS Lambda
## Load Data
```
npm i
npm run s:generate
```
## Run Localy
```
composer install
cp -f .env.example .env
php artisan serve
```

## Deploy (AWS Lambda)
```
serverless deploy
```

# Reto Técnico Backbone
## Descripción
Api Rest que consulta los datos dirección con base en un código postal 

## Approach to the problem

> First step, the data source only gave 3 options for download formats, which were: XML, Excel and Txt, The first decision I made was to take the txt, to later develop a script with ZX to read the txt and generate a csv since this format allows me to do better handling at the time and import the data.

> The second step was to import the data to a database manager in the first instance so that later the logic to perform the query, it was there when I realized an improvement since in the first instance I inserted the data in a single table, but this made it more complex when making the query because I decided to separate it into two tables in order to make a better consultation

>Later, when deploying the api in the first instance, I chose to use AWS Lambda to do it, this worked correctly, but since a instance of the function will be created with each invocation, this adds latency. it would have some 100+ ms delays and there were times that this exceeded the time required for the challenge, so I made the decision to create an AWS EC2 instance and RDS to do the deployment and this allowed for a better response time for the challenge.

> Note: Attached the Url of the deployment with AWS Lambda - https://jxvqeffzf0.execute-api.us-east-1.amazonaws.com/api/zip-codes/93700

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


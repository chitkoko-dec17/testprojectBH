# testprojectBH
Assignment project from BetterHR Interview 

## Installation

### Dependencies:

* [PHP 7.2.33]
* [Laravel 7.2+]
* [GraphQL PHP]
* [Laravel Passport 9.4]
* ["mll-lab/laravel-graphql-playground" +2.6]
* ["nuwave/lighthouse" +4.0]


### To run locally

- Git clone this repository
- Change directory into root of cloned folder
- Enter `composer install` (assuming you have `composer` and its related packages installed and or configured)
- Rename `.env.example`  to `.env` (This contains the app configs and databases settings)
- Enter `php artisan migrate` to run migration  
- Enter `php artisan db:seed` for test data
- Enter `npm install`
- Enter `npm run dev`
- Enter `php artisan serve` to start application
- Open http://localhost:8000 or http://127.0.0.1:8000 to access frontend vue ui

### Queries to run on (http://localhost:8000/graphql-playground) - CRUD operations on employees
```bash
Login:
mutation {
  login(
    input: { username: "admin@email.com", password: "12345678" }
  ) {
    access_token
    refresh_token
    expires_in
    token_type
    user {
      id
      email
      name
    }
  }
}

Get all employee:
{
  employees{
    id
    name
    age
    job
    salary
  }
}

Get a employee:
{
  employee(id: 2){
    id
    name
    age
    job
    salary
  }
}

Create employee :
mutation{
	createEmployee(
	    name : "Ma Hla Aye"
	    age : 24
	    job : "Marketing"
	    salary : 9000
	){
	    id
	    name
	    age 
	    job
	    salary
	}
}

Update employee :
mutation{
	updateEmployee(
	    id : 8
	    name : "U Kyaw Kyaw"
	    age : 23
	    job : "Sales"
	    salary : 13000
	){
	    id
	    name
	    age 
	    job
	    salary
	}
}

Delete employee :
mutation{
	deleteEmployee(id: 11)
  	{
	    id
	    name
	}
}

```


##If You find the following message, please do the follow the step to fixed
NOTE:
library: 'digital envelope routines',
reason: 'unsupported',
code: 'ERR_OSSL_EVP_UNSUPPORTED'

###fixed to run
``` 
export NODE_OPTIONS=--openssl-legacy-provider
npm run dev
```
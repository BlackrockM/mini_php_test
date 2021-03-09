# Mini php test

Create search component which have to return array of objects which filtered by their property values.

Input: model 'Dish'
App\Utils\Filter\Model\Dish

####Common requirements:

1. write search filter functionality for dishes
2. add to index.php output for found values

####Filter functionality requirements:

1. create search filter by each dish property 
2. create filter manager as independent class and factory
3. filter manager must support search by mixed filter's collection 

Example of search query:

1. find dishes which cost between 150 - 700 and not payed
2. find dishes with types MIXED and MILK, cost between 650 - 1700 and payed
3. etc, please create at least 4 different search query
# Product CRUD API 
------
I have generate 100K+ fake products & 30+ categories with faker & deployed on [live](https://product-api.abdullahme.com/api/v1/products)

## API Endpoints :

### Categories : 

    Method : GET
    URL : BASE/api/v1/categories
    
    #It should list all categories and the numbers of products inside each categories. 
<br>

    Method : GET
    URL : BASE/api/v1/category-products/{category_id}
    
    #It should be able to list all products inside category with number of products inside it.
<br>
    
    Method : POST
    URL : BASE/api/v1/categories
    Accepted prametter : category_name
    #create  category
<br>
    
    Method : GET
    URL : BASE/api/v1/categories/{category_id} 

    #get single category using category_id
<br>
    
    Method : PUT
    URL : BASE/api/v1/categories/{category_id} 
    Accepted prametter : category_name
    #update category
<br>
    
    Method : DELETE 
    URL : BASE/api/v1/categories/{category_id} 
    #delete category

### Products : 

    Method : GET
    URL : BASE/api/v1/products 

    example url : BASE/api/v1/products?limit=25&sortP=asc&sortCT=desc&sortUT=asc&search=nisi

    Accepted prametter : search, limit, sortP, sortCT, sortUT, 

    #list of all products & search products by title and description, then filter and sort them based on price, create and update time 

Note : sortP == sort by price, sortCT = sort by create time, sortUP = sort by update time
<br>
    
    Method : POST
    URL : BASE/api/v1/products 

    Accepted prametter : category_id, title, description, price
    
    #Create product
<br>
    
    Method : PUT
    URL : BASE/api/v1/products 

    Accepted prametter : category_id, title, description, price
    
    #Update product
<br>
    
    Method : GET
    URL : BASE/api/v1/products/{product_id} 

    #get single product using product_id
<br>
    
    Method : DELETE 
    URL : BASE/api/v1/products/{product_id} 
    #delete product


## How I plan & solve the task : 

To understand the requirement, I read that very carefully 

- design the system on paper & its work flow 
- draw database schema 
- plan about how can i show the data on each route as per requirement
- the jump to development

Database schema : 

<a href="https://ibb.co/zHBC61x"><img src="https://i.ibb.co/HpbRh04/Screenshot-1.png" alt="Screenshot-1" border="0"></a>

I love the eloquent query here for coding quality and readability. It's readable and nice. Whereas DB query is complecated .


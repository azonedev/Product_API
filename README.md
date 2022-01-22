# Product CRUD API 
------
I have generate 100K+ fake products & 30+ categories with faker & deployed on [live](https://product-api.abdullahme.com/)

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

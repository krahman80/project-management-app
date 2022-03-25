# Project-management-app


## Navigation structure
### admin role
```
-Login
   |-------Dashboard
   |-------Roles 
   |         |-------Create Roles
   |         |-------Update Roles
   |
   |-------Permission
   |         |-------Create Permission
   |         |-------Update Permission
   |
   |-------Users
   |         |-------Assign User To Roles
   |
   |-------Project
   |         |-------Create project
   |         |-------Update project
   |
   |-------Task
   |         |-------Create task
   |         |-------Update task     
   |
   |-------My task
   |         |-------Comment
             

             
```

### staff/developer roles
```
-Login
   |-------Dashboard
   |        |--------My task
   |        
             
```

## schema
* Project
   - id
   - name
   - status 
   - deadline
   - 

* Task
   - id
   - title
   - description
   - start_data
   - end_date
   - status
   - priority

* UserTask
   - user_id
   - task_id

* Comment
   - id
   - comment

* CommentTask
   - comment_id
   - task_id
   - user_id

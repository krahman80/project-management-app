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
   |-------My task
   |         |-------Comment
             

             
```
### Project Manager Role
```
-Login 
   |-------Dashboard
   |-------Project------------------->Add project
   |         |-------List project
   |         |-------Create project
   |         |-------Update project
   |
   |-------Task
   |         |-------List task 
   |         |           |-------Show task
   |         |                       |-------->Assign task/re assign task
   |         |                       |-------->Comment task     
   |         |-------Create task
   |         |-------Update task     
   
```

### staff/developer roles
```
-Login
   |-------Dashboard
   |        |--------My task
   |        |--------list Task------->search task with filter
   |        |            |--------Show task
   |        |                        |--------->update task status
   |        |                        |--------->comment status
   |        |          
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
   - project_id
   - user_id
   - start_data
   - end_date
   - status
   - progress
   - priority

* Comment
   - id
   - comment

* CommentTask
   - comment_id
   - task_id
   - user_id

# Project-management-app


## Navigation structure
### admin role
```
-Login
   |-------Dashboard
   |-------Project list 
   |         |-------Filter project
   |         |-------add edit project
   |
   |-------Project Detail
   |         |-------add project member
   |         |-------add edit task
   |
   |-------Project Comment
   |         |-------add comments
   |         |-------edit comments
```

## schema
* Project
   - id
   - name
   - owner_id (fk)
   - start
   - end
   - priority

* Task
   - id
   - name
   - description
   - project_id (fk)
   - owner_id (fk)
   - start_date
   - end_date
   - status

* Comment
   - id
   - user_id
   - task_id
   - body

<!-- 
   * CommentTask
   - comment_id
   - task_id
   - user_id 
-->
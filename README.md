fussball-backend
================
Based on Laravel 4.1

**Currently supporting**
+ Reading all matches
+ Reading a specific match
+ Reading a specific match with scores
+ Reading scores of a specfic match

**Routing**  
```
GET  /matches  
GET  /matches/{match_id}  
GET  /matches/{match_id}?scores=true
GET  /matches/{match_id}/scores  
GET  /matches/{match_id}/scores/{score_id}  
POST /matches (accepts application/json, parameters: name and status ('open','playing','finished' or 'closed'))
```

**Example to post a new match**  
`curl -X POST -H "Content-Type: application/json" -d '{"name":"match name", "status":"open"}' http://localhost/matches`

**To get started:**  
+ Configure a MySQL database and edit `/app/config/database.php` with the connection details
+ Run `php artisan migrate`
+ Run `php artisan db:seed` (optional) if you want to seed the database with some data


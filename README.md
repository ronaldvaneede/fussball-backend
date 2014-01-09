fussball-backend
================
Based on Laravel 4.1

**Currently supporting**
+ Reading all matches
+ Reading a specific match
+ Reading a specific match with scores
+ Reading scores of a specific match

**Routing**  
```
GET  /api/v1/matches
GET  /api/v1/matches/{match_id}
GET  /api/v1/matches/{match_id}?scores=true
GET  /api/v1/matches/{match_id}/scores
GET  /api/v1/matches/{match_id}/scores/{score_id}
POST /api/v1/matches (accepts application/json, parameters: name and status ('open','playing','finished' or 'closed'))
```

**Example to post a new match**  
```
curl -X POST -H "Content-Type: application/json" \
-d '{"name":"match name", "status":"open"}' http://localhost/api/v1/matches
```

**To get started:**  
+ Create a database and edit `/app/config/database.php` with the connection details
+ Run `composer install`
+ Run `artisan migrate`
+ Run `artisan db:seed` (optional) if you want to seed the database with some data


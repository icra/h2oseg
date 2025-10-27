//llegeix db.sqlite
function llegeix_db_sqlite(){
  fetch("db/api.php").then(r=>r.json()).then(arr=>{
    app.db_sqlite=arr;
  });
}

/*
  inicialitzar base de dades:
  cat schema.sql | sqlite3 db.sqlite
*/
CREATE TABLE IF NOT EXISTS 'fluxos' (
  'id'         INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  'data_inici' DATE   NOT NULL,
  'data_final' DATE   NOT NULL,
  'lloc'       TEXT   DEFAULT "lloc",
  'volum'      NUMBER DEFAULT 0,
  'tipus'      TEXT   DEFAULT "entrada",
  'proveidor'  TEXT   DEFAULT "proveidor"
);

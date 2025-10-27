/*
  inicialitzar base de dades:
  cat schema.sql | sqlite3 db.sqlite
*/
CREATE TABLE IF NOT EXISTS 'taules' (
  'id'   INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  'data' DATE DEFAULT CURRENT_TIMESTAMP,
  'text' JSON NOT NULL
);

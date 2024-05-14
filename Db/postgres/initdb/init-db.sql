CREATE TABLE IF NOT EXISTS todos (
  id SERIAL PRIMARY KEY,
  titre VARCHAR(255),
  done BOOLEAN
);

INSERT INTO todos (titre, done) VALUES ('Tâche 1', false), ('Tâche 2', true), ('Tâche 3', false);

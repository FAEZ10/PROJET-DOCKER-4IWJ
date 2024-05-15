CREATE TABLE IF NOT EXISTS todo (
  id SERIAL PRIMARY KEY,
  title VARCHAR(255),
  done BOOLEAN
);

INSERT INTO todo (title, done) VALUES ('Tâche 1', false), ('Tâche 2', true), ('Tâche 3', false), ('Tâche 4', true), ('Tâche 5', false), ('Tâche 6', true), ('Tâche 7', false), ('Tâche 8', true), ('Tâche 9', false), ('Tâche 10', true);

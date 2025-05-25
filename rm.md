-- CRUD
-- Create
INSERT INTO roles (name,value) VALUES ('super',44)

-- Read
SELECT id, name FROM roles ORDER BY name DESEC LIMIT 3

-- Update
UPDATE roles SET name='Editor' WHERE id=2

--Delete
DELETE FROM roles WHERE id=2
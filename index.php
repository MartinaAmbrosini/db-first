| Nome Colonna | Tipo di dato | Attributi |
| ---- | ---- | ---- |
| ID | INT | primary key, auto_increment |
| Targa | VARCHAR(20) | NOT NULL |
| marca | VARCHAR(64) | NOT NULL |
| modello | VARCHAR(64) | NOT NULL |
| colore | VARCHAR(16) | NOT NULL |
| data_immatricolazione | DATE | NOT NULL |
| data_inserimento | DATE | NOT NULL |
| chilometraggio | INT | NOT NULL |
| alimentazione | VARCHAR(16) | NOT NULL |
| anno_fabbricazione | YEAR | NULL |
| descrizione | TEXT | NULL |
| tipo_cambio | VARCHAR(16) | NOT NULL |
| prezzo | DECIMAL(8, 2) | NOT NULL |
| available | BOOLEAN | default(true) |
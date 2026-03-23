ollama list

ollama run qwen2.5-coder:7b "Tengo una base de datos mysql que tiene una tabla con clientes. Quiero realizar la siguiente peticion: Listame todos los clientes. Dame el codigo SQL. Pero solo quiero codigo SQL."

```sql
SELECT * FROM clientes;
```


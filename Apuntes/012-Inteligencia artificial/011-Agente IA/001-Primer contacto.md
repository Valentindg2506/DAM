ollama list

valentin@valentin-PC:~$ ollama list
NAME                     ID              SIZE      MODIFIED    
deepseek-r1:1.5b         e0979632db5a    1.1 GB    6 days ago     
nomic-embed-text:v1.5    0a109f422b47    274 MB    6 days ago     
qwen2.5-coder:3b         f72c60cabf62    1.9 GB    4 weeks ago    
llama3:latest            365c0bd3c000    4.7 GB    4 weeks ago    
qwen2.5:3b-instruct      357c53fb659c    1.9 GB    4 weeks ago    
qwen2.5-coder:7b         dae161e27b0e    4.7 GB    4 weeks ago 

valentin@valentin-PC:~$ ollama run qwen2.5-coder:7b "Crea una web en HTML, sin comentarios, solo el codigo"

```html
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mi Web</title>
	</head>
	<body>
		<h1>Bienvenido a Mi Web</h1>
		<p>Esta es una página web simple.</p>
	</body>
	</html>
```

valentin@valentin-PC:~$ ollama run qwen2.5-coder:7b "Crea un programa en python, que sume 4+3. Solo quiero el codigo, ningun comentario"

```python
	print(4 + 3)
```


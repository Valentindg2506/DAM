Primero sacamos terminal

Listamos modelos de ollama disponibles
ollama list

Alternativa1: ollama pull qwen2.5-coder:7b

Alternativa2: Buscamos modelo en la web de ollama

Primero vamos a hacer una pregunat en consola:
	- ollama run qwen2.5-coder:7b "Dame el codigo html y css de una web personal"
	
Restringimos el prompt:
	- ollama run qwen2.5-coder:7b "Dame el codigo HTML y CSS de una web personal. No me hagas introduccion ni salida, solo quiero el codigo sin fences. Hazme un single file."

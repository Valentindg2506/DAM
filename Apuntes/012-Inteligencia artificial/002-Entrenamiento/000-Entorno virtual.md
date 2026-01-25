Primero tenemos que crear un entorno virtual
Es una burbuja aislada que no afecta al resto del sistema
En la terminal

python3 -m venv venv

A continuación entramos dentro del entorno
En la terminal:

source venv/bin/activate

pip install -r requirements.txt

pip install torch
pip install datasets
pip install peft
pip install transformers

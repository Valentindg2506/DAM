# Aplicaciones Python — Colección de Apps de Consola

Colección de 13 aplicaciones de consola desarrolladas en Python que demuestran progresivamente los conceptos de programación orientada a objetos, persistencia de datos y lógica de negocio.

## Tecnologías

- Python 3
- Módulos estándar: `pickle`, `json`
- Programación Orientada a Objetos (POO)

## Aplicaciones

| App | Archivo | Descripción | Conceptos clave |
|-----|---------|-------------|-----------------|
| Calculador de cuadras | `001` | Conversión de unidades | Variables, operadores |
| Registro de personas | `002` | Alta de personas en lista | Listas, bucles |
| Gestión de clientes | `003` | CRUD de clientes con persistencia | Clases, `pickle`, archivos binarios |
| Productos | `004` | Gestión de catálogo de productos | Clases, colecciones |
| Listado de clientes | `005` | Visualización de registros | Iteración, formato |
| Generador de tickets | `006` | Tickets numerados automáticamente | Contadores, formato de salida |
| Generador de facturas con IVA | `007` | Factura con IVA 21% y descuento | Lógica condicional, cálculos |
| Agenda | `008` | Contactos con persistencia en .txt | Archivos de texto, append mode |
| Cuenta bancaria | `009` | Depósitos y retiradas con saldo | Encapsulación básica |
| Calculadora de impuestos | `010` | IRPF por tramos | Condicionales encadenados |
| Banco | `011` | Sistema bancario con atributos privados | Encapsulación, getters/setters, validación |
| Lista de la compra | `012` | Lista persistente de artículos | Listas, archivos |
| Agenda deportiva | `013` | Eventos deportivos con JSON | Clases, serialización JSON |

## Destacados

### 011 — Banco (Sistema Bancario)
Demuestra encapsulación con atributos privados (`__saldo`, `__cliente`) y validación de negocio: los ingresos superiores a 1.000 € disparan una alerta automática.

```python
class CuentaBancaria():
    def __init__(self):
        self.__saldo = 0          # Atributo privado
        self.__cliente = ""

    def setSaldo(self, nuevosaldo):
        if nuevosaldo > self.__saldo + 1000:
            print("Aviso: ingreso muy elevado detectado")
        else:
            self.__saldo = nuevosaldo
```

### 013 — Agenda Deportiva (JSON)
CRUD completo con persistencia en JSON. Los datos se guardan automáticamente tras cada operación.

```python
import json
agenda_deportiva = []
# Al añadir un evento:
agenda_deportiva.append({'deporte': deporte, 'nombre': nombre, 'fecha': fecha})
with open("agenda.json", "w") as f:
    json.dump(agenda_deportiva, f)
```

### 003 — Gestión de Clientes (Pickle)
Persistencia binaria con `pickle`. Los objetos Python se serializan y deserializan directamente.

```python
import pickle
clientes = pickle.load(open("clientes.bin", "rb"))
# ...
pickle.dump(clientes, open("clientes.bin", "wb"))
```

## Cómo ejecutar

```bash
# Ejecutar cualquier aplicación directamente
python "011- Banco.py"
python "013- Agenda deportiva.py"
```

No requieren dependencias externas.

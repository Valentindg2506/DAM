from flask import Flask, request, jsonify
from flask_cors import CORS
import mysql.connector
from mysql.connector import Error
from datetime import datetime
import os

app = Flask(__name__)
CORS(app)

DB_CONFIG = {
    "host": "localhost",
    "user": "valentin",
    "password": "Empresadam2526@",
    "database": "crm_inmobiliario",
}

def get_db_connection():
    try:
        conn = mysql.connector.connect(**DB_CONFIG)
        return conn
    except Error as e:
        print(f"Error conectando a MySQL: {e}")
        return None

# ========== CLIENTES ==========
@app.route('/api/clientes', methods=['GET'])
def obtener_clientes():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor(dictionary=True)
        filtro = request.args.get('filtro', '')
        
        if filtro:
            cursor.execute(
                "SELECT * FROM clientes WHERE dni_nie LIKE %s OR nombre LIKE %s OR apellidos LIKE %s ORDER BY fecha_registro DESC",
                (f"%{filtro}%", f"%{filtro}%", f"%{filtro}%")
            )
        else:
            cursor.execute("SELECT * FROM clientes ORDER BY fecha_registro DESC")
        
        clientes = cursor.fetchall()
        return jsonify(clientes), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/clientes', methods=['POST'])
def crear_cliente():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    data = request.json
    try:
        cursor = conn.cursor()
        cursor.execute(
            "INSERT INTO clientes (dni_nie, nombre, apellidos, email, telefono, origen, etapa_pipeline) VALUES (%s, %s, %s, %s, %s, %s, %s)",
            (data['dni_nie'], data['nombre'], data['apellidos'], data.get('email'), data.get('telefono'), data.get('origen', 'Web'), data.get('etapa_pipeline', 'Nuevo'))
        )
        conn.commit()
        return jsonify({"id": cursor.lastrowid, "message": "Cliente creado"}), 201
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/clientes/<int:id>', methods=['PUT'])
def actualizar_cliente(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    data = request.json
    try:
        cursor = conn.cursor()
        cursor.execute(
            "UPDATE clientes SET dni_nie=%s, nombre=%s, apellidos=%s, email=%s, telefono=%s, origen=%s, etapa_pipeline=%s WHERE id=%s",
            (data['dni_nie'], data['nombre'], data['apellidos'], data.get('email'), data.get('telefono'), data.get('origen'), data.get('etapa_pipeline'), id)
        )
        conn.commit()
        return jsonify({"message": "Cliente actualizado"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/clientes/<int:id>', methods=['DELETE'])
def eliminar_cliente(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor()
        cursor.execute("DELETE FROM clientes WHERE id=%s", (id,))
        conn.commit()
        return jsonify({"message": "Cliente eliminado"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

# ========== PROPIEDADES ==========
@app.route('/api/propiedades', methods=['GET'])
def obtener_propiedades():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor(dictionary=True)
        cursor.execute("""
            SELECT p.*, c.nombre AS propietario_nombre, c.apellidos AS propietario_apellidos
            FROM propiedades p
            LEFT JOIN clientes c ON p.propietario_id = c.id
            ORDER BY p.fecha_alta DESC
        """)
        propiedades = cursor.fetchall()
        return jsonify(propiedades), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/propiedades', methods=['POST'])
def crear_propiedad():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    data = request.json
    try:
        cursor = conn.cursor()
        cursor.execute(
            "INSERT INTO propiedades (referencia, direccion, tipo, precio, superficie, habitaciones, banos, estado, propietario_id) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
            (data['referencia'], data['direccion'], data['tipo'], data['precio'], data.get('superficie'), data.get('habitaciones'), data.get('banos'), data.get('estado', 'Disponible'), data.get('propietario_id'))
        )
        conn.commit()
        return jsonify({"id": cursor.lastrowid, "message": "Propiedad creada"}), 201
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/propiedades/<int:id>', methods=['DELETE'])
def eliminar_propiedad(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor()
        cursor.execute("DELETE FROM propiedades WHERE id=%s", (id,))
        conn.commit()
        return jsonify({"message": "Propiedad eliminada"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

# ========== TAREAS ==========
@app.route('/api/tareas', methods=['GET'])
def obtener_tareas():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor(dictionary=True)
        cursor.execute("""
            SELECT t.*, c.nombre AS cliente_nombre, c.apellidos AS cliente_apellidos
            FROM tareas t
            JOIN clientes c ON t.cliente_id = c.id
            ORDER BY t.fecha_hora ASC
        """)
        tareas = cursor.fetchall()
        return jsonify(tareas), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/tareas', methods=['POST'])
def crear_tarea():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    data = request.json
    try:
        cursor = conn.cursor()
        cursor.execute(
            "INSERT INTO tareas (cliente_id, titulo, descripcion, fecha_hora) VALUES (%s, %s, %s, %s)",
            (data['cliente_id'], data['titulo'], data.get('descripcion'), data['fecha_hora'])
        )
        conn.commit()
        return jsonify({"id": cursor.lastrowid, "message": "Tarea creada"}), 201
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/tareas/<int:id>/completar', methods=['PUT'])
def completar_tarea(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor()
        cursor.execute("UPDATE tareas SET completada = NOT completada WHERE id=%s", (id,))
        conn.commit()
        return jsonify({"message": "Tarea actualizada"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/tareas/<int:id>', methods=['DELETE'])
def eliminar_tarea(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor()
        cursor.execute("DELETE FROM tareas WHERE id=%s", (id,))
        conn.commit()
        return jsonify({"message": "Tarea eliminada"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

# ========== PIPELINE ==========
@app.route('/api/pipeline', methods=['GET'])
def obtener_pipeline():
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    try:
        cursor = conn.cursor(dictionary=True)
        etapas = ['Nuevo', 'Contactado', 'Calificado', 'Propuesta', 'Cerrado']
        pipeline = {}
        
        for etapa in etapas:
            cursor.execute(
                "SELECT id, dni_nie, nombre, apellidos, email, telefono, etapa_pipeline FROM clientes WHERE etapa_pipeline=%s ORDER BY fecha_registro DESC",
                (etapa,)
            )
            pipeline[etapa] = cursor.fetchall()
        
        return jsonify(pipeline), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

@app.route('/api/clientes/<int:id>/etapa', methods=['PUT'])
def cambiar_etapa(id):
    conn = get_db_connection()
    if not conn:
        return jsonify({"error": "Error de conexión"}), 500
    
    data = request.json
    try:
        cursor = conn.cursor()
        cursor.execute("UPDATE clientes SET etapa_pipeline=%s WHERE id=%s", (data['etapa'], id))
        conn.commit()
        return jsonify({"message": "Etapa actualizada"}), 200
    except Error as e:
        return jsonify({"error": str(e)}), 500
    finally:
        cursor.close()
        conn.close()

if __name__ == '__main__':
    app.run(debug=True, port=5000)


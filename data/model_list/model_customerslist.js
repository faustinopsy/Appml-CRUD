{"security": "admin",
"rowsperpage" : 10,
"database" : {
"connection" : "mydatabase",
"sql" : "SELECT * FROM customers",
"orderby" : "Nome"
},
"filteritems" : [
{"item" : "Nome", "label" : "Customer"},
{"item" : "Cidade"},
{"item" : "Pais"}
],
"sortitems" : [
{"item" : "Nome", "label" : "Customer"},
{"item" : "Cidade"},
{"item" : "Pais"}
]
}
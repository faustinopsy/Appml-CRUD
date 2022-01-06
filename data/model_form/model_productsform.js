{
	"security": "admin",
"database" : {
"connection" : "mydatabase",
"sql" : "SELECT * FROM produtos",
"maintable" : "produtos",
"keyfield" : "IDprod"
},
"restrictions" : {
    "Unidade" : {"maxlength": 3},
    "Preco" : {"max": 999,"min": 10}
    },
"updateItems" : [
{"item" : "Nomeprod"},
{"item" : "IDforn"},
{"item" : "IDcat"},
{"item" : "Unidade"},
{"item" : "Preco"}
]
}